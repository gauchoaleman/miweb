@include('includes/head')
@include('includes/navbar')

<?php
if (DB::table('users')->where('id', $_GET['id'])->update(['is_admin' => $_GET['toggle_to']])){
  echo "<div class='high_text' style='color:orange'>Admin actualizado</div>";
}else{
  echo "<div class='high_text' style='color:orange'>Admin no actualizado</div>";
}?>
@include('auth.admin.tables.view_table')
@include('includes/bottom_bar')
@include('includes/bottom')
