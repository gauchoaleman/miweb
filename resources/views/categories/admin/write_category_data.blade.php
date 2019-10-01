@include('includes/head')
@include('includes/navbar')
<?php
$id = $_GET['id'];
$name= $_POST['name'];

$res = DB::table('categories')
->where('id', $id)
->update(['name' => $name]);

echo "<div class='high_text' style='color:orange'>Datos actualizados</div>";
?>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
