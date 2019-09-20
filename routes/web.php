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

Route::get('/auth/admin/change_user_pass', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/change_user_pass');
});

Route::post('/auth/admin/write_user_pass', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/write_user_pass');
});

Route::get('/auth/admin/change_user_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/change_user_data');
});

Route::post('/auth/admin/write_user_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/write_user_data');
});

Route::get('/auth/admin/view_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/view_user');
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

Route::get('/auth/admin/add_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/add_user');
});

Route::post('/auth/admin/write_add_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/write_add_user');
});

Route::get('/calendar/admin/add_event', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/add_event');
});

Route::post('/calendar/admin/write_add_event', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/write_add_event');
});

Route::get('/calendar/admin/view_events', function () {
    if (!isset(Auth::user()->name))
      return view('no_access');
    elseif (Auth::user()->is_admin == 0)
      return view('no_access');
    else
      return view('calendar/admin/view_events');
});

Route::get('/calendar/admin/del_event', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/del_event');
});

Route::get('/calendar/admin/change_event_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/change_event_data');
});

Route::post('/calendar/admin/write_event_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/write_event_data');
});

Route::get('/calendar/user/view_events_user', function () {
    return view('/calendar/user/view_events_user');
});

Route::get('/calendar/user/view_event_user', function () {
    return view('/calendar/user/view_event_user');
});

Route::get('/calendar/admin/view_event_admin', function () {
    return view('/calendar/admin/view_event_admin');
});

Route::post('/contact/send_contact', function () {
    return view('/contact/send_contact');
});

Route::get('/contact/contact', function () {
    return view('/contact/contact');
});


Auth::routes();

Route::get('/home', function ()  {
  return view('welcome');
});
