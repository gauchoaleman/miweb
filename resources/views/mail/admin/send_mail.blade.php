@include('includes/head')
<?php
$subject = $_POST['subject'];
$content = $_POST['content'];
$headers = "From: info@autoayuda.com";

$users = DB::table('users')->where('send_mail',TRUE)->get();

foreach ($users as $user) {
  $to = $user->email;
  mail($to,$subject,$content,$headers);
}
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Mail enviado</div>
@include('content/welcome_content')
@include('includes/bottom_bar')
@include('includes/bottom')
