@include('includes/head')
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
  ?>
  @include('includes/navbar')
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
elseif( strlen($_POST['password'])<8){
  $error = "La clave tiene menos de 8 caracteres";
?>
  @include('includes/navbar')
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
elseif( $_POST['password'] != $_POST['password_confirmation']){
  $error = "La confirmación de la clave no coincide con la clave";
?>
  @include('includes/navbar')
  @include('auth.user.forms.register_form', ['error' => $error])<?php
}
else{
$res = DB::table('users')->insert(
    ['email' => $email, 'name' => $name, 'password'=>$password]);
?>@include('includes/navbar')<?php
echo "<div class='high_text' style='color:orange'>Registro exitoso. <a href='/login'>Click aquí</a> para loguearse</div>";

?>@include('content/welcome_content')<?php
}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
