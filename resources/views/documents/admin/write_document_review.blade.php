@include('includes/head')
<?php
$id = $_GET['id'];
$review= $_POST['review'];


$res = DB::table('documents')
->where('id', $id)
->update(['review' => $review]);
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Reseña actualizada</div>
@include('documents.admin.tables.view_documents_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
