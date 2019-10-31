@include('includes/head')
<?php
$name = $_POST['name'];
$description = $_POST['description'];
$address = $_POST['address'];
$date=$_POST['date'];
$time=$_POST['time'];

$res = DB::table('events')->insert(
    ['name' => $name, 'description' => $description, 'address'=>$address, 'date'=>$date,'time'=>$time]
);


$subject = "Nuevo Evento";
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
<div class='high_text' style='color:orange'>Evento agregado</div>
@include('calendar.admin.tables.view_events_table')
@include('includes/bottom_bar')
@include('includes/bottom')
