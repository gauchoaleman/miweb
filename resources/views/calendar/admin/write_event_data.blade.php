@include('includes/head')
<?php

$name= $_POST['name'];
$description= $_POST['description'];
$address= $_POST['address'];
$date= $_POST['date'];
$time= $_POST['time'];
$id = $_GET["id"];

if( !validateDate($date) ){
  $error =  "La fecha ingresada es inválida";
  ?>
  @include('includes/navbar')
  @include('calendar.admin.forms.change_event_data_form', ['error' => $error])
  <?php
}
else {
$res = DB::table('events')
->where('id', $id)
->update(['name' => $name,'description'=>$description,'address'=>$address,'date'=>$date,'time'=>$time]);

$subject = "Evento Actualizado";
$content = "Nombre: $name\r\n";
$content.= "Descripción: $description\r\n";
$content.= "Dirección: $address\r\n";
$content.= "Fecha: $date\r\n";
$content.= "Hora : $time";
$headers = "From: eventos@autoayuda.com";

$users = DB::table('users')->where('send_mail',TRUE)->get();

foreach ($users as $user) {
  $to = $user->email;
  mail($to,$subject,$content,$headers);
}
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Datos actualizados</div>
@include('calendar.admin.tables.view_events_table')
<?php
}
?>

@include('includes/bottom_bar')
@include('includes/bottom')
