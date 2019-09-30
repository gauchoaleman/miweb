@include('includes/head')
@include('includes/navbar')
<?php

$name= $_POST['name'];
$description= $_POST['description'];
$address= $_POST['address'];
$date= $_POST['date'];
$time= $_POST['time'];
$id = $_GET["id"];

$res = DB::table('events')
->where('id', $id)
->update(['name' => $name,'description'=>$description,'address'=>$address,'date'=>$date,'time'=>$time]);

echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
?>
@include('calendar.admin.tables.view_events_table')
@include('includes/bottom_bar')
@include('includes/bottom')
