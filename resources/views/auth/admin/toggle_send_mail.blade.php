@include('includes/head')
@include('includes/navbar')

<?php
if (DB::table('users')->where('id', $_GET['id'])->update(['send_mail' => $_GET['toggle_to']])){
  echo "<div class='high_text' style='color:orange'>Enviar mails actualizado</div>";
}else{
  echo "<div class='high_text' style='color:orange'>Eniar mails no actualizado</div>";
}?>
@include('auth.admin.tables.view_users_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
