<?php

namespace App\Http\Controllers\Auth;

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
    protected $redirectTo = '/home';

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
        $verification_code = str_random(30); //Generate verification code
        DB::table('user_verifications')->insert(['user_id' => $user->user_id, 'token' => $user->verify_token]);
        $subject = "Please verify your email address.";
        $name= $user->first_name;
        $email = $user->email;
        Mail::send('auth.email.verify', ['name' => $name, 'verification_code' => $user->verify_token],
            function ($mail) use ($email,$name,$subject) {
                $mail->from(getenv('FROM_EMAIL_ADDRESS'), getenv('APP_NAME'));
                $mail->to($email,$name);
                $mail->subject($subject);
            });
        return $user;
    }

    public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token', $verification_code)->first();
        if (!is_null($check)) {
            $user = User::find($check->user_id);
            if ($user->is_verified == 1) {
                session()->flash("success", "Your account is activated");
                 return redirect('/home');
            }
            $user->update(['is_verified' => 1]);
            DB::table('user_verifications')->where('token', $verification_code)->delete();
            // return view here will define user confirmed email
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

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        event(new UserRegistered($user));
    }

}