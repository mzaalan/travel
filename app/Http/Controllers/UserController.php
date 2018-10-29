<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $countries = country_list();
    	return view('user.profile',compact('countries'));
    }

    public function editProfile()
    {
        $countries = country_list();
        return view('user.profile-edit',compact('countries'));
    }

    public function updateProfile(Request $request)
    {
    	// dd($request->all());
    	if($request->has('loyalty_card'))
    	{
    		$request['loyalty_card'] = 1;
    	} else {
    		$request['loyalty_card'] = 0;
    	}
    	$user = User::find(auth()->user()->id)->update($request->all());
    	return redirect()->route('user.profile')->with('success','Your profile information has been updated successfully.');
    }

    public function paymentMethod()
    {
        return view('user.payment.index');
    }

    public function addPaymentMethod(Request $request)
    {
        return view('user.payment.add-edit');
    }

    public function products()
    {
        return view('user.product.index');
    }

    public function bookings()
    {
        return view('user.booking.index');
    }
}
