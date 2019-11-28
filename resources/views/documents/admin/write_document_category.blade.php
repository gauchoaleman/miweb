@include('includes/head')
<?php
$id = $_GET['id'];
$category_id= $_POST['category_id'];


$res = DB::table('documents')
->where('id', $id)
->update(['category_id' => $category_id]);
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Categoría actualizada</div>
@include('documents.admin.tables.view_documents_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
