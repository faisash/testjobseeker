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


Route::get('/',function(){
    return view('jobseeker.DashBoard');
});
Route::get('/DashBoard',function(){
    return view('jobseeker.DashBoard');
});
Route::get('/CandidateProfile',function(){
    return view('jobseeker.CandidateProfile');
});

Route::get('/EditResume',function(){
    return view('jobseeker.EditResume');
});
Route::get('/Edit',function(){
    return view('jobseeker.Edit');
});

Route::get('/PaymentHistory',function(){
    return view('jobseeker.PaymentHistory');
});
Route::get('/ChangePassword',function(){
    return view('jobseeker.ChangePassword');
});

Route::get('/Login',function(){
    return view('jobseeker.Login');
});
Route::get('/SignUp',function(){
    return view('jobseeker.SignUp');
});

Route::get('/Payment',function(){
    return view('jobseeker.Payment');
});

Route::get('/pricing',function(){
    return view('jobseeker.pricing');
});




Route::post('JobseekerSignUp','Job_SeekerController@SignUp');



