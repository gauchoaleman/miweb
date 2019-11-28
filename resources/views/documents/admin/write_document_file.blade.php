@include('includes/head')
<?php
$id = $_GET['id'];
$file = \Request::file('file');
$document = DB::table('documents')->where('id', $_GET['id'])->first();
$title = $document->title;
$extension = $document->extension;
$new_extension = strtolower($file->getClientOriginalExtension());
unlink($_SERVER['DOCUMENT_ROOT']."/documents/".$title.".".$extension);
move_uploaded_file($file->getRealPath(), $_SERVER['DOCUMENT_ROOT']."/documents/".$title.".".$new_extension);

$res = DB::table('documents')
->where('id', $id)
->update(['extension' => $new_extension]);
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Título actualizado</div>
@include('documents.admin.tables.view_documents_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
