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

// Route::get('/', function () {
//     return view('welcome');
// });
 // Route::get('/city/create','CityController@create');
 // Route::post('/city/store','CityController@store');
 // Route::get('/','FrontendController@index');
 // Route::get('/about','FrontendController@about');
 // Route::get('/contact','FrontendController@about');
 // Route::get('/blog','FrontendController@about');
  // Route::resource('kheladi', 'KheladiController');

// Route::resource('article','BlogController');
// Route::resource('about','aboutController');
// Route::resource('blog','BlogController');

// Route::get('/tasks',[

// 	'uses' => 'TasKController@index',

// 	'as' => 'tasks.index',

// 	]);

// Route::post('/task',[
// 	'uses' => 'TaskController@store',

// 	'as' => 'tasks.store',

// 	]);
// Route::delete('/task/{task}',[
// 	'uses' => 'TaskController@destroy',

// 	'as' => 'tasks.destroy',

// 	]);


// Auth::routes();

Route::get('/', 'FrontController@index')->name('home');

Route::get('/shirts', 'FrontController@shirts')->name('shirts');

Route::get('/shirt', 'FrontController@shirt')->name('shirt');


Auth::routes();

Route::get('logout','Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::resource('/cart', 'CartController');

Route::get('/cart/add-items/{id}', 'CartController@addItem')->name('cart.addItem');


Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],function(){

Route::post('toggledeliever/{orderId}','OrderController@toggledeliever')->name('toggle.deliever');

	Route::get('/',function()
	{
		return view('admin.index');
	})->name('admin.index');

	Route::resource('product','ProductsController');

	Route::resource('category','CategoriesController');

	Route::get('orders/{type?}','OrderController@orders');

});
Route::resource('address','AddressController');

// Route::get('checkout','CheckoutController@step1');

Route::group(['middleware' =>'auth'], function(){
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');

});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('payment','CheckoutController@storePayment')->name('payment.store');