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

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/auth/view', function () {
    return view('auth/view');
});

Route::get('/auth/mod_user', function () {
    return view('auth/mod_user');
});

Route::get('/auth/del_user', function () {
    return view('auth/del_user');
});

Route::get('/auth/update_data', function () {
    return view('auth/update_data');
});

Route::get('/auth/toggle_admin', function () {
    return view('auth/toggle_admin');
});

Auth::routes();

Route::get('/home', function ()  {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
