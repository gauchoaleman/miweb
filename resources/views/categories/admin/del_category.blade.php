@include('includes/head')
<?php DB::table('categories')->where('id',$_GET['id'])->delete() ?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Categoría borrada</div>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
