@include('includes/head')
@include('includes/navbar')

<?php
if (DB::table('users')->where('id',$_GET['id'])->delete()) {
  ?><div class='high_text' style='color:orange'>Usuario borrado</div><br><?php
}else{
  ?><div class='high_text' style='color:orange'>No se pudo borrar usuario/div><br><?php }?>

@include('auth.admin.tables.view_table')
@include('includes/bottom_bar')
@include('includes/bottom')
