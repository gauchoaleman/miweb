@include('includes/head')
@include('includes/navbar')
<?php
$name = $_POST['name'];

$res = DB::table('categories')->insert(
    ['name' => $name]
);

echo "<div class='high_text' style='color:orange'>Categoría agregada</div>";
  ?>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
