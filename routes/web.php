<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/userPhones/{id}', 'UserController@phones');
Route::get('/userPhoneDetail/{id}', 'UserController@phoneDetail');
Route::get('/', 'UserController@home');
Route::get('/userListArticle', 'UserController@userListArticle');
Route::get('/userArticleDetail/{id}', 'UserController@userArticleDetail');


Auth::routes();

// Route::get('/', 'PhoneController@home');

Route::get('/phones/{id}', 'PhoneController@phones');

Route::get('/phoneDetail/{id}', 'PhoneController@phoneDetail');

Route::get('/articleDetail/{id}', 'PhoneController@articleDetail');

Route::get('/listArticle', 'PhoneController@listArticle');

Auth::routes();

Route::get('/login', 'LoginController@login')->name('login')->middleware('guest');

Route::post('/login/login_new', 'LoginController@login_new')->middleware('guest');

Route::get('/regis', 'RegisterController@regis')->name('regis')->middleware('guest');

Route::post('/regis/regis_new', 'RegisterController@regis_new')->middleware('guest');

Route::get('change-password', 'RegisterController@changePassword')->name('change-password')->middleware('auth');

Route::post('update-password', 'RegisterController@updatePassword')->name('update-password')->middleware('auth');

//Route::get('/home', 'PhoneController@home')->middleware('auth');

Route::get('/home', 'PhoneController@home', function(){
    return view('/home');
})->middleware('auth')->name('home');

Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');

Route::group(['middleware' => ['auth', 'PageMiddleware:manager, user']], function (){

    Route::get('/addPhone', 'PhoneController@addPhone');

    Route::post('/addPhone/addPhoneVal', 'PhoneController@addPhoneVal');

    Route::get('/addNewBrand', 'PhoneController@addNewBrand');

    Route::post('/addNewBrand/addNewBrandVal', 'PhoneController@addNewBrandVal');

    Route::get('/deletePhone/{id}', 'PhoneController@deletePhone');

    Route::get('/addDetailPhone', 'PhoneController@addDetailPhone');

    Route::post('/addDetailPhone/addDetailPhoneVal', 'PhoneController@addDetailPhoneVal');

    Route::get('updatePhone/{id}', 'PhoneController@updatePhone');

    Route::put('/updatePhoneVal/{id}', 'PhoneController@updatePhoneVal');

    Route::get('updatePhoneDetail/{id}', 'PhoneController@updatePhoneDetail');

    Route::put('/updatePhoneDetailVal/{id}', 'PhoneController@updatePhoneDetailVal');

    Route::get('/manageBrand', 'PhoneController@manageBrand');

    Route::get('/deleteBrand/{id}', 'PhoneController@deleteBrand');

    Route::get('updateBrand/{id}', 'PhoneController@updateBrand');

    Route::put('/updateBrandVal/{id}', 'PhoneController@updateBrandVal');

    Route::get('/deleteArticle/{id}', 'PhoneController@deleteArticle');

    Route::get('/addArticle', 'PhoneController@addArticle');

    Route::post('/addArticle/addArticleVal', 'PhoneController@addArticleVal');

    Route::get('editArticle/{id}', 'PhoneController@editArticle');

    Route::put('/editArticleVal/{id}', 'PhoneController@editArticleVal');
});

Route::group(['prefix' => 'cart'], function () {
    # My Cart Page
    Route::get('/', 'CartController@myCartPage')->name('my-cart');

    # Create Cart
    Route::post('/create', 'CartController@createCart')->name('create-cart');

    Route::group(['prefix' => '{cartId}'], function () {
        # Update Cart
        Route::put('/update', 'CartController@updateCart')->name('update-cart');
    });
});

Route::group(['prefix' => 'transaction'], function () {
    # Transaction History Page
    Route::get('/history', 'TransactionController@transactionHistoryPage')->name('transaction-history');

    # Create Cart
    Route::post('/create', 'TransactionController@createTransaction')->name('create-transaction');

    Route::group(['prefix' => '{transactionHeaderId}'], function () {
        # Transaction Detail Page
        Route::get('/detail', 'TransactionController@transactionDetailPage')->name('transaction-detail');
    });
});
