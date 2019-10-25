@include('includes/head')

<?php
$password = Hash::make($_POST['password']);
$id = Auth::user()->id;

if( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
  ?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.update_password_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
  ?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.update_password_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')
            ->where('id', $id)
            ->update(['password'=>$password]);
  $user = Auth::user();
  $user->password = $password;
  $user->save();
  $ok=1;
}
?>

<?php if(isset($ok)){
  ?>@include('includes/navbar', ['there_is_error' => FALSE])<?php
  echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
  ?>

  @include('content/welcome_content')<?php

}?>

@include('includes/bottom_bar')
@include('includes/bottom')
