<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('verifyAccount/{token}','Auth\RegisterController@verifyUser')->name('verifyUser');
Route::get('verify/token/{token}','TokenController@verify')->name('verify.token');
Route::post('resend/token','TokenController@resend')->name('resend.token');
Route::post('contact/admin','ContactAdminController@send')->name('admin.contact');


Route::group(['middleware'=>'auth'], function(){
	Route::get('/', 'HomeController@index')->name('home');

	Route::group(['prefix'=>'user'], function(){
		Route::get('/profile','UserController@profile')->name('user.profile');
		Route::get('/profile/edit','UserController@editProfile')->name('user.profile.edit');
		Route::post('/profile/update','UserController@updateProfile')->name('user.profile.update');
		Route::get('/payment/method','UserController@paymentMethod')->name('user.payment.method');
		Route::post('/add/payment/method','UserController@addPaymentMethod')->name('user.add.payment.method');
		Route::get('/products','UserController@products')->name('user.products');
		Route::get('/bookings','UserController@bookings')->name('user.bookings');
	});


Route::get('/hotels',function(){
	return view('hotel.index');
})->name('hotels');

Route::get('/flights',function(){
	return view('flight.index');
})->name('flights');

Route::get('/taxi',function(){
	return view('taxi.index');
})->name('taxi');

Route::get('/budget-assistance',function(){
	return view('budget-assistance.index');
})->name('budget-assistance');

Route::get('/trips-and-packages',function(){
	return view('trips-packages.index');
})->name('trips-and-packages');

Route::get('/shop',function(){
	return view('shop.index');
})->name('shop');

Route::get('/product/detail',function(){
	return view('shop.product-detail');
})->name('shop.product.detail');

Route::get('/faq',function(){
	return view('faq.index');
})->name('faq');

Route::get('/responsibility',function(){
	return view('responsibility.index');
})->name('responsibility');

Route::get('/travel-easy',function(){
	return view('travel-easy.index');
})->name('travel-easy');

Route::get('/get-visa',function(){
	return view('get-visa.index');
})->name('get-visa');

Route::get('/about-us',function(){
	return view('about.index');
})->name('about-us');

Route::get('/terms-of-service',function(){
	return view('terms.index');
})->name('terms-of-service');

Route::get('/jobs',function(){
	return view('job.index');
})->name('jobs');

Route::get('/blog',function(){
	return view('blog.index');
})->name('blog');

Route::get('/contact-us',function(){
	return view('contact.index');
})->name('contact-us');

Route::get('/privacy-policy',function(){
	return view('privacy-policy.index');
})->name('privacy-policy');

Route::get('/feedback',function(){
	return view('feedback.index');
})->name('feedback');

Route::get('/complaints',function(){
	return view('complaints.index');
})->name('complaints');

Route::redirect('/home','/');

});
