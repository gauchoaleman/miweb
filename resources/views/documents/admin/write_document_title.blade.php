@include('includes/head')
<?php
$id = $_GET['id'];
$title= $_POST['title'];

// Me fijo si ese mail ya está en uso
$documents_same_title = DB::table('documents')->where([
    ['title', '=', $title],
    ['id', '<>', $id]
])->get();

if( sizeof($documents_same_title)){
  $error =  "Este título está en uso";
  ?>
  @include('includes/navbar')
  @include('documents.admin.forms.change_document_title_form', ['error' => $error])<?php
}
elseif( !preg_match('/^[\w áéíóúÁÉÍÓÚñÑ]+$/', $title)){
  $error = "El título no tiene sólo números y letras";
  ?>
  @include('includes/navbar')
  @include('documents.admin.forms.change_document_title_form', ['error' => $error])<?php
}
else {
  $old_document = DB::table('documents')->where('id', $_GET['id'])->first();
  $old_title = $old_document->title;
  $extension = $old_document->extension;
  rename($_SERVER['DOCUMENT_ROOT']."/documents/".$old_title.".".$extension,$_SERVER['DOCUMENT_ROOT']."/documents/".$title.".".$extension);

  $res = DB::table('documents')
  ->where('id', $id)
  ->update(['title' => $title]);
  ?>
  @include('includes/navbar')
  <div class='high_text' style='color:orange'>Título actualizado</div>
  @include('documents.admin.tables.view_documents_admin_table')<?php
}?>


@include('includes/bottom_bar')
@include('includes/bottom')
