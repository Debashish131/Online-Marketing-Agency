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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();
//
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Route::get('/home', 'HomeController@index')->name('home');


//Admin Profile
Route::namespace("Admin")->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');

    });
});
Route::post('/addproduct', 'Admin\ProductController@store');
Route::get('/editProduct{id}', 'Admin\ProductController@editProduct');
Route::post('/updateProduct{id}', 'Admin\ProductController@updateProduct');
Route::get('/deleteProduct/{id}/delete', 'Admin\ProductController@deleteProduct');
Route::get('/index', 'HomeController@test');
Route::get('/user', 'Admin\HomeController@test2');
Route::get('/productaddpage', 'Admin\ProductController@showpage');
Route::get('/productdetails', 'Admin\ProductController@productdetails');
Route::get('/userdetails', 'Admin\HomeController@alluser');
Route::get('/deleteUser/{id}/delete', 'Admin\HomeController@deleteUser');

Route::get('/paymentdetails', 'Admin\HomeController@paymentdetails');



//Admin SLider
Route::get('/showSlider', 'Admin\SlideController@showSlider');
Route::get('/sliderAdd', 'Admin\SlideController@sliderAdd');
Route::post('/addSlider', 'Admin\SlideController@store');
Route::get('/editSlider{id}', 'Admin\SlideController@editSlider');
Route::post('/updateSlider{id}', 'Admin\SlideController@updateSlider');
Route::get('/deleteSlider/{id}/delete', 'Admin\SlideController@deleteSlider');

//User
Route::get('/productview', 'ProductController@productview');
Route::get('/showproduct{id}', 'ProductController@showproduct');
Route::get('/cart{id}', 'ProductController@cart');
Route::POST('/addToCart{id}', 'CartController@addToCart');
Route::get('/productCategory', 'HomeController@category');
Route::get('/product', 'ProductController@product');
Route::get('/invoice{id}', 'PaymentController@invoiceshow');
Route::POST('/wishList{id}', 'WishlistController@addToWishlist');
Route::get('/payment{id}','PaymentController@payment');
Route::post('/paymentAdd','PaymentController@getpayment');



// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
