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

Route::get('/auth/admin/view_users_admin', function () {
    if (!isset(Auth::user()->name))
      return view('no_access');
    elseif (Auth::user()->is_admin == 0)
      return view('no_access');
    else
      return view('auth/admin/view_users_admin');
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
  if (!isset(Auth::user()->name))
    return view('no_access');
  else
    return view('auth/user/update_data');
});

Route::post('/auth/user/write_update_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  else
    return view('auth/user/write_update_data');
});

Route::get('/auth/user/update_password', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  else
    return view('auth/user/update_password');
});

Route::post('/auth/user/write_update_password', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  else
    return view('auth/user/write_update_password');
});

Route::get('/auth/admin/toggle_admin', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/toggle_admin');
});

Route::get('/auth/admin/toggle_send_mail', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('auth/admin/toggle_send_mail');
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

Route::get('/calendar/admin/view_events_admin', function () {
    if (!isset(Auth::user()->name))
      return view('no_access');
    elseif (Auth::user()->is_admin == 0)
      return view('no_access');
    else
      return view('calendar/admin/view_events_admin');
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

Route::get('/calendar/admin/event_review', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/event_review');
});

Route::post('/calendar/admin/write_event_review', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/write_event_review');
});

Route::get('/calendar/user/view_events_user', function () {
  return view('/calendar/user/view_events_user');
});

Route::get('/calendar/user/view_event_user', function () {
  return view('/calendar/user/view_event_user');
});

Route::get('/calendar/user/view_events_review_user', function () {
  return view('/calendar/user/view_events_review_user');
});

Route::get('/calendar/user/view_event_review_user', function () {
  return view('/calendar/user/view_event_review_user');
});

Route::get('/calendar/admin/view_event_admin', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('/calendar/admin/view_event_admin');
});

Route::get('/calendar/admin/del_event_picture', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('calendar/admin/del_event_picture');
});

Route::post('/contact/send_contact', function () {
  return view('/contact/send_contact');
});

Route::get('/contact/contact', function () {
  return view('/contact/contact');
});

Route::get('/categories/admin/add_category', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/add_category');
});

Route::post('/categories/admin/write_add_category', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/write_add_category');
});

Route::get('/categories/admin/view_categories_admin', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/view_categories_admin');
});

Route::get('/categories/admin/del_category', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/del_category');
});

Route::get('/categories/admin/change_category_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/change_category_data');
});

Route::post('/categories/admin/write_category_data', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('categories/admin/write_category_data');
});

Route::get('/auth/user/register', function () {
  return view('auth/user/register');
});

Route::post('/auth/user/write_register', function () {
  return view('auth/user/write_register');
});

Route::get('/documents/admin/add_document', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/add_document');
});

Route::post('/documents/admin/write_add_document', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/write_add_document');
});

Route::get('/documents/admin/view_documents_admin', function () {
    if (!isset(Auth::user()->name))
      return view('no_access');
    elseif (Auth::user()->is_admin == 0)
      return view('no_access');
    else
      return view('documents/admin/view_documents_admin');
});

Route::get('/documents/admin/del_document', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/del_document');
});


Route::get('/documents/admin/change_document_title', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/change_document_title');
});

Route::post('/documents/admin/write_document_title', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/write_document_title');
});

Route::get('/documents/admin/change_document_category', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/change_document_category');
});

Route::post('/documents/admin/write_document_category', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/write_document_category');
});

Route::get('/documents/admin/change_document_file', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/change_document_file');
});

Route::post('/documents/admin/write_document_file', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/write_document_file');
});

Route::get('/documents/admin/change_document_review', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/change_document_review');
});

Route::post('/documents/admin/write_document_review', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('documents/admin/write_document_review');
});

Route::get('/documents/user/show_document_user', function () {
  if (!isset(Auth::user()->name))
    return view('no_access');
  elseif (Auth::user()->is_admin == 0)
    return view('no_access');
  else
    return view('/documents/user/show_document_user');
});

Auth::routes();

Route::get('/home', function ()  {
  return view('welcome');
});
