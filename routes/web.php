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
Route::get('/','ProductController@welcome');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/products' ,'ProductController@index')->name('index');
Route::get('admin/products/create','ProductController@create')->name('create');
Route::post('admin/products','ProductController@store')->name('store');
Route::get('admin/products/{id}/edit','ProductController@edit')->name('edit');
Route::post('admin/products/{id}/update','ProductController@update')->name('update');
Route::post('admin/products/{id}/delete','ProductController@delete')->name('delete');
