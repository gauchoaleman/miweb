@include('includes/head')

<?php
$email = $_POST['email'];

// Me fijo si ese mail ya está en uso
$check_existing_email = DB::table('users')->where([
    ['email', '=', $email]
])->get();

if( !sizeof($check_existing_email)){
  $error =  "Este email no está en uso";
  ?>
  @include('includes/navbar', ['there_is_error' => TRUE])
  @include('auth.user.forms.forgot_password_form', ['error' => $error])<?php
}
else{
  $id=$check_existing_email[0]->id;
  $hashtag = Hash::make(time());

  DB::table('password_resets')->insert(['user_id' => $id, 'hashtag' => $hashtag]);

  $to = $email;
  $subject = "Cambie su clave de plataforma de autoayuda";
  $content = "<a href='http://".$_SERVER['HTTP_HOST']."/auth/user/reset_password?user_id=$id&hashtag=$hashtag'>Click aquí</a> para actualizar su clave";
  $headers = "From: clave@autoayuda.com";
  mail($to,$subject,$content,$headers);
  echo "To: $to<br>Subject: $subject<br>Content: $content<br>Headers: $headers<br>";

  ?>@include('includes/navbar', ['there_is_error' => FALSE])<?php
  echo "<div class='high_text' style='color:orange'>Se le envió un mail con un enlace para actualizar la clave</div>";
  ?>
  @include('content/welcome_content')<?php
}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
