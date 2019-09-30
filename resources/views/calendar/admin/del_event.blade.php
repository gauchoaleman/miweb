@include('includes/head')
@include('includes/navbar')
<?php
if (DB::table('events')->where('id',$_GET['id'])->delete()) {
  ?><div class='high_text' style='color:orange'>Evento borrado</div><br><?php
}else{
  ?><div class='high_text' style='color:orange'>No se pudo borrar evento</div><br><?php }?>
@include('calendar.admin.tables.view_events_table')
@include('includes/bottom_bar')
@include('includes/bottom')
