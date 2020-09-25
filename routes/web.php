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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

// Route::get('/', 'HomepageController@index');
Route::get('/', function () {
    return view('homepage.index');
});
Route::get('/flush', function () {
    session()->flush();
    return redirect('/');
});
Route::get('/blog/{judul}', 'HomepageController@blogview');
Route::get('/projects', 'HomepageController@projectsview');
Route::post('/send-message', 'DashboardController@kirimpesan');
Route::get('/contact-us', function () {
    $contacts = App\Contact::find('609012');
    return view('homepage.contact', ['contacts' => $contacts]);
});
Route::get('/pesan', function () {
    return view('receivedemails');
});
Route::get('/about-us', function () {
    return view('homepage.aboutus');
});
Route::get('/gallery', 'HomepageController@galleryview');
Route::get('/demonstration', 'HomepageController@videoview');
Route::get('/blog', 'HomepageController@blog');
Route::get('/dash', function () {
    return view('dashboard');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::post('/request-quotation', 'HomepageController@requestQuot');
Route::delete('remove-from-cart', 'HomepageController@removeitem');

Route::prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@loginshow')->name('login.show');
    Route::post('/', 'DashboardController@loginproses')->name('login.proses');
});
Route::get('logout', function () {
    session()->flush();
    return redirect('/admin/dashboard');
});

// Testing email mailtrap.io
// Route::get('/test-email', function () {
//     \Mail::raw('Halo ini pesan testing untuk putra karya logam sukses', function ($message) {
//         $message->to('john@johndoe.com', 'John Doe');
//         $message->subject('Subject Testing');
//     });
// });

Route::prefix('product/details')->group(function () {
    Route::get('/{id}', 'HomepageController@productdetails');
    Route::get('ajax-item/{id}', 'HomepageController@ajaxdetails');
});
Route::prefix('product/categories/details')->group(function () {
    Route::get('/{id}', 'HomepageController@productcatdetails');
});

Route::get('/add-to-cart/{id}', 'HomepageController@addcart');

Route::group(['prefix' => 'admin', 'middleware' => 'isLogin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/blog', 'DashboardController@showblog');
    Route::get('/user', 'DashboardController@showuser');
    Route::get('/gallery', 'DashboardController@showgallery');
    Route::get('/products', 'DashboardController@showproducts');
    Route::get('/emails', 'DashboardController@showemails');
    Route::get('/announcement', 'DashboardController@showannounce');
    Route::get('/partner', 'DashboardController@showpartner');
    Route::get('/video', 'DashboardController@showvideo');
    Route::get('/contact', 'DashboardController@showcontact');
});

Route::group(['prefix' => 'admin/user', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewuser', 'DashboardController@prosesaaddnew');
    Route::get('/trash/{id}', 'DashboardController@trashuser');
    Route::post('/update/{id}', 'DashboardController@updateuser');
});
Route::group(['prefix' => 'admin/products', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewproduct', 'DashboardController@prosesaddproduct');
    Route::post('/addnewkategorial', 'DashboardController@prosesaddkategori');
    Route::post('/addnewitemproduk', 'DashboardController@prosesadditem');
    Route::get('/trash/{id}', 'DashboardController@trashproduct');
    Route::post('/update/{id}', 'DashboardController@updateproduct');
});
Route::group(['prefix' => 'admin/blog', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewblog', 'DashboardController@prosesaddblog');
    Route::get('/trash/{id}', 'DashboardController@trashblog');
    Route::post('/update/{id}', 'DashboardController@updateblog');
});
Route::group(['prefix' => 'admin/gallery', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewgallery', 'DashboardController@prosesaddgallery');
    Route::get('/trash/{id}', 'DashboardController@trashgallery');
});
Route::group(['prefix' => 'admin/video', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewvideo', 'DashboardController@prosesaddvideo');
    Route::get('/trash/{id}', 'DashboardController@trashvideo');
});
Route::group(['prefix' => 'admin/partner', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewpartner', 'DashboardController@prosesaddpartner');
    Route::get('/trash/{id}', 'DashboardController@trashpartner');
});
Route::group(['prefix' => 'admin/emails', 'middleware' => 'isLogin'], function () {
    Route::get('/read/{id}', 'DashboardController@changestatus');
});
Route::group(['prefix' => 'admin/announcement', 'middleware' => 'isLogin'], function () {
    Route::post('/addnewannouncement', 'DashboardController@addnewannouncement');
    Route::post('/editannouncement/{id}', 'DashboardController@editannounce');
});
Route::group(['prefix' => 'admin/contact', 'middleware' => 'isLogin'], function () {
    Route::post('/update', 'DashboardController@updateprofile');
});
