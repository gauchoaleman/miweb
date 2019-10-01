@include('includes/head')
@include('includes/navbar')

<?php

$password = Hash::make($_POST['password']);
$id = $_GET["id"];
if( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
  ?>@include('auth.admin.forms.change_user_pass_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
  ?>@include('auth.admin.forms.change_user_pass_form', ['error' => $error])<?php
}
else{
  $res = DB::table('users')
            ->where('id', $id)
            ->update(['password' => $password]);

  echo "<div class='high_text' style='color:orange'>Clave actualizada</div>";
  ?>@include('auth.admin.tables.view_table')<?php
}
 ?>
@include('includes/bottom_bar')
@include('includes/bottom')
