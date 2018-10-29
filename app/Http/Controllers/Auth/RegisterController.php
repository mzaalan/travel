<?php

namespace App\Http\Controllers\Auth;

use App\Mail\SendVerificationToken;
use App\User;
use App\Events\UserRegistered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
            'tos'           => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         $user= User::create([
            'first_name'    => $data['first_name'],
            'last_name'    => $data['last_name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'verify_token'  => str_random(60),
        ]);
        DB::table('user_verifications')->insert(['user_id' => $user->id, 'token' => $user->verify_token]);
        $subject = "Please verify your email address.";
        $name= $user->first_name;
        $email = $user->email;
        Mail::to($email)->send(new SendVerificationToken(['data' => $name, 'token' => $user->verify_token]));
        return $user;
    }

    public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token', $verification_code)->first();
        if (!is_null($check)) {
            $user = User::find($check->user_id);
            if ($user->status == 1) {
                session()->flash("success", "Your account is activated");
                if(!auth()->user()){
                  auth()->loginUsingID($user->id);
                }
                return redirect('/home');
            }
            $user->update(['status' => 1, 'verify_token' => null]);
            DB::table('user_verifications')->where('token', $verification_code)->delete();
            // return view here will define user confirmed email
            auth()->loginUsingID($user->id);
            session()->flash("success", "Your account is activated successfully");
            return redirect('/home');
        }
        return redirect('/register');

    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);
        session()->flash("success", "You have received an activation email, please activate your account");
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        event(new UserRegistered($user));
    }

}
