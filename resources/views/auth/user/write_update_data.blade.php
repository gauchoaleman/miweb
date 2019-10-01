@include('includes/head')
@include('includes/navbar')

<?php
$password = Hash::make($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];
$id = Auth::user()->id;

// Me fijo si ese mail ya está en uso
$users_same_email = DB::table('users')->where([
    ['email', '=', $email],
    ['id', '<>', $id],
])->get();

if( sizeof($users_same_email)){
  $error =  "Este email está en uso";
  ?>@include('auth.user.forms.update_data_form', ['error' => $error])<?php
}
elseif( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
  ?>@include('auth.user.forms.update_data_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
  ?>@include('auth.user.forms.update_data_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name,'email'=>$email,'password'=>$password]);

  echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
  ?>@include('content/welcome_content')<?php

}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
