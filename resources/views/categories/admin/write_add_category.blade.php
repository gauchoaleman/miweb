@include('includes/head')
<?php
$name = $_POST['name'];
$res = DB::table('categories')->insert(['name' => $name]);
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Categoría agregada</div>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
