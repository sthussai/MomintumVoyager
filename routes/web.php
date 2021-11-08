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
Route::resource('events', 'EventController');
Route::resource('eventregister', 'EventRegisterController')->middleware('verified');
Route::resource('programregister', 'ProgramRegisterController')->middleware('verified');
Route::get('eventregister/create/{eventid}', 'EventRegisterController@create');
Route::post('eventregister/updatestatus', 'EventRegisterController@updateStatus');
Route::get('programregister/create/{programid}', 'ProgramRegisterController@create');
Route::post('programregister/updatestatus', 'ProgramRegisterController@updateStatus');

/* PagesController */
//Route::get('/', 'PagesController@mmain');

Route::get('/', 'PagesController@mmain');
Route::get('/mmain', 'PagesController@mmain');
Route::get('/program/{programTitle}', 'PagesController@showprogram');

/* HomeController */
Route::get('/mprofile', 'HomeController@mprofile');
Route::get('admin/musers', 'HomeController@musers');
Route::get('/test', 'HomeController@test');
Route::get('/locationinfo', 'HomeController@locationinfo');
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
Route::post('/payprogramregistration', 'PaymentController@payProgramRegistration');
Route::get('/paytest', 'PaymentController@charge');
Route::get('user/refund/{payment_intent}/{invoice_id}', 'PaymentController@refund');
Route::delete('/payment', 'PaymentController@destroy');
use Illuminate\Http\Request;

Route::get('user/invoice/{invoice}/{event_name}', function (Request $request, $invoiceId, $event_name) {
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
Route::get('/almasrepair', function () {
    return view('almasrepair.home');
});

Route::get('/eia', function () {
    return view('eia.home');
});

Route::get('/eia/test', function () {
    return view('eia.test');
});

Route::get('/mevent', function () {
    return view('momintum.mevent');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mtest', function () {
    return view('momintum.mtest');
});

 Route::post('/getmsg', 'AjaxController@index');
 Route::get('/search', 'AjaxController@search');

Auth::routes();
