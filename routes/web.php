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

Route::group(['middleware' => ['web']], function () {
//get cronulla florists api data 
Route::get('get-api-data', 'MainController@getApiData');
Route::get('/', 'MainController@index');
Route::get('categories', 'MainController@categories');
Route::get('contact-us', 'MainController@contact');
Route::post('submit-contact-form', 'MainController@submitContactForm');
Route::get('about-us', 'MainController@aboutUs');
Route::get('faq', 'MainController@faq');
Route::get('customer-services', 'MainController@customerServices');
Route::get('product/{slug}', 'MainController@product');
Route::get('category/{name}', 'MainController@products');
Route::get('result/', 'MainController@searchResult');
Route::post('add-cart', 'MainController@addCart');
Route::post('update-cart', 'MainController@updateCart');
Route::get('delete-cart', 'MainController@removeItem');
Route::post('remove-cart', 'MainController@removeCart');
Route::get('shopping-cart', 'MainController@viewShoppingCart');
Route::get('get-cart-data', 'MainController@getCartData');
Route::get('checkout', 'MainController@checkout');
// stripe Api Routes
Route::post('check-order-from', 'PaymentController@checkOrderForm');
Route::post('store', 'PaymentController@storeStripe');
Route::post('submit-stripe-order', 'PaymentController@submitStripeOrder');
// Route::get('thank-you', 'PaymentController@thankYou');

// testing paypal
Route::post('submit-paypal', 'PaymentController@payWithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus');
Route::get('thank-you', 'PaymentController@thankYou');

Route::get('flower-delivery-{name}', 'MainController@productListing');
// Route::get('christmas-flowers', 'MainController@flowerEvents');

// Terms and Condition
Route::get('terms-and-conditions', 'MainController@terms');
Route::get('privacy-policy', 'MainController@privacy');
Route::get('substitution-policy', 'MainController@substitution');
Route::get('terms-of-use', 'MainController@disclaimer');

});

// create dynamic sitemap
Route::get('sitemap.xml', 'MainController@sitemap');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



