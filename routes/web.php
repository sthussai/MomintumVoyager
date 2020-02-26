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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['verify' => true]);

/* Resources */
Route::resource('photos', 'PhotoController');
Route::resource('events', 'EventController')->middleware('verified');
Route::resource('eventregister', 'EventRegisterController')->middleware('verified');
Route::get('eventregister/create/{eventid}', 'EventRegisterController@create');
Route::post('eventregister/confirm/{eventregister}', 'EventRegisterController@confirm');

/* PagesController */
Route::get('/', 'PagesController@mmain');
Route::get('/mmain', 'PagesController@mmain');
Route::get('/program/{programTitle}', 'PagesController@showprogram');

/* HomeController */
Route::get('/mprofile', 'HomeController@mprofile');
Route::get('/musers', 'HomeController@musers');
Route::get('/test', 'HomeController@test');
Route::get('/home', 'HomeController@index')->name('home');

/* ActivityReportController */
Route::post('/activityreport', 'ActivityReportController@store');

/* UpdatePayerController */
Route::get('/addpaymentmethod', 'UpdatePayerController@add');
Route::post('/addpayer', 'UpdatePayerController@added');
Route::get('/editbillinginfo', 'UpdatePayerController@edit');
Route::patch('/updatebillinginfo', 'UpdatePayerController@updateBillingInfo');
Route::get('/updatepayer', 'UpdatePayerController@edit');
Route::get('/deletePaymentMethod/{paymentMethodId}', 'UpdatePayerController@deletePaymentMethod');

/* PaymentController */
Route::get('/payment', 'PaymentController@index');
Route::get('/payment/success', 'PaymentController@success');
Route::post('/payment', 'PaymentController@store');
Route::post('/payevent', 'PaymentController@payevent');
Route::get('/paytest', 'PaymentController@charge');
Route::get('user/refund/{payment_intent}/{invoice_id}', 'PaymentController@refund');
Route::delete('/payment', 'PaymentController@destroy');
use Illuminate\Http\Request;

Route::get('user/invoice/{invoice}/{event_name}', function (Request $request, $invoiceId, $event_name) {
    //dd($request);
    return $request->user()->downloadInvoice($invoiceId, [
        'vendor' => 'Momintum',
        'product' => $event_name,
    ]);
});

/* UpdateUserController */
Route::post('/updateuser', 'UpdateUserController@store');

/* EnableStripeController -creates Stripe customer ID */
Route::post('/enablestripe', 'EnableStripeController');

/* Individual Routes */
Route::get('/eia', function () {
    return view('eia.home');
});

Route::get('/eia/test', function () {
    return view('eia.test');
});

Route::get('/mevent', function () {
    return view('momintum.mevent');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();
