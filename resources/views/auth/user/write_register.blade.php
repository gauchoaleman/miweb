@include('includes/head')
<?php
$password = Hash::make($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];
if( isset($_POST['send_mail']) )
  $send_mail=TRUE;
else
  $send_mail=FALSE;


// Me fijo si ese mail ya está en uso
$users_same_email = DB::table('users')->where([
    ['email', '=', $email]
])->get();

if( sizeof($users_same_email)){
  $error = "Este email está en uso";
  ?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
elseif( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')->insert(
    ['email' => $email, 'name' => $name, 'password'=>$password, 'send_mail'=>$send_mail]);

$last_insert_id_res = DB::select( DB::raw("SELECT LAST_INSERT_ID() as LID") );
//Logueo usuario registrado
Auth::loginUsingId($last_insert_id_res[0]->LID);
?>
@include('includes/navbar', ['there_is_error' => FALSE])
@include('content/welcome_content')<?php
}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
