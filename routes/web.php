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

Route::get('no_access', function () {
    return view('no_access');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/auth/admin/view', function () {
    if (!isset(Auth::user()->name))
      return view('no_access');
    elseif (Auth::user()->is_admin == 0)
      return view('no_access');
    else
      return view('auth/admin/view');
});

Route::get('/auth/admin/mod_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/mod_user');
});

Route::get('/auth/admin/del_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/del_user');
});

Route::get('/auth/user/update_data', function () {
    return view('auth/user/update_data');
});

Route::post('/auth/user/write_update_data', function () {
    return view('auth/user/write_update_data');
});

Route::get('/auth/admin/toggle_admin', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/toggle_admin');
});

Auth::routes();

Route::get('/home', function ()  {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
