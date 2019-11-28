@include('includes/head')
<?php
$document = DB::table('documents')->where('id', $_GET['id'])->first();
$filename = $_SERVER['DOCUMENT_ROOT']."/documents/".$document->title.".".$document->extension;
unlink($filename);
DB::table('documents')->where('id',$_GET['id'])->delete();
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Documento borrado</div>
@include('documents.admin.tables.view_documents_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
