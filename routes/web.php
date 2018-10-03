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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// // Authentication Routes...
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
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'is.admin'], function () {
 Route::get('/admin', 'admin\AdminController@index');
 //users
 Route::resource('admin/users','admin\UserController');
  //currencies
  Route::resource('admin/currencies','admin\CurrencyController');
  //offiers
  Route::resource('admin/offers','admin\OfferController');
  //slideshow
  Route::resource('admin/slideshow','admin\SlideShowController');
  //Country
  Route::resource('admin/countries','admin\CountryController');
  //category
  Route::resource('admin/categories','admin\CategoryController');
   //branches
   Route::resource('admin/branches','admin\BranchController');
  //Brand
  Route::resource('admin/brands','admin\BrandController');
  //Labels
  Route::resource('admin/labels','admin\LabelController');
  //slideshow
  Route::resource('admin/slideshows','admin\SlideshowController');
  //suppliers
  Route::resource('admin/suppliers','admin\SupplierController');
  //products
  Route::resource('admin/products','admin\ProductController');
  //Coupon
  Route::resource('admin/coupons','admin\CouponController');
  //features
  Route::resource('admin/features','admin\FeatureController');
  //feature details
  Route::resource('admin/featuredetails','admin\FeatureDetailsController');

  Route::resource('admin/featureproduct','admin\FeatureProductController');
 //images
 Route::resource('image','ImageController');
});
   //Order
   Route::resource('admin/orders','admin\OrderController'); 
   //about
   Route::get('about','PageController@about')->name('about');
   //contact
   Route::get('contact','PageController@contact')->name('contact');
   //charge and terms_conditions
   Route::get('policy','PageController@policy')->name('policy');
   //terms_conditionsshipping
   Route::get('terms','PageController@term')->name('terms');
   //shipping
     Route::get('shipping','PageController@shipping')->name('shipping');
     //shop
     Route::get('shop','PageController@shop')->name('shop');
     //product-page
     Route::get('product_page','PageController@product_page')->name('product_page');
    //wish_listaccount
     Route::get('wishlist','PageController@wishlist')->name('wishlist');
     //account
     Route::get('account','PageController@account')->name('account'); 
          //cart
     Route::get('cart','PageController@cart')->name('cart'); 
        //checkout
     Route::get('checkout','PageController@checkout')->name('checkout'); 
      //order_overviewpayment
     Route::get('order_overview','PageController@order_overview')->name('order_overview'); 
      //paymentorder_complete
     Route::get('payment','PageController@payment')->name('payment'); 
      //order_complete
     Route::get('order_complete','PageController@order_complete')->name('order_complete'); 