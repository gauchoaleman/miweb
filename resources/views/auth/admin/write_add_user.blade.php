@include('includes/head')
@include('includes/navbar')

<?php
$password = Hash::make($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];

// Me fijo si ese mail ya está en uso
$users_same_email = DB::table('users')->where([
    ['email', '=', $email]
])->get();

if( sizeof($users_same_email)){
  $error = "Este email está en uso";
  ?>@include('auth.admin.forms.add_user_form', ['error' => $error])<?php
}
elseif( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
?>@include('auth.admin.forms.add_user_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
?>@include('auth.admin.forms.add_user_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')->insert(
    ['email' => $email, 'name' => $name, 'password'=>$password]
);

  echo "<div class='high_text' style='color:orange'>Usuario agregado</div>";
  ?>@include('auth.admin.tables.view_users_admin_table')<?php
}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
