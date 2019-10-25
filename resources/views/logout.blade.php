<?php
Session::flush();
?>
@include('includes/head')
@include('includes/navbar')

<div class='high_text' style='color:orange'>
  Sesión finalizada.
</div>
<br>
@include('content/welcome_content')
@include('includes/bottom_bar')
@include('includes/bottom')
