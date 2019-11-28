@include('includes/head')

<?php
$file = \Request::file('file');
$title = $_POST['title'];
$review = $_POST['review'];
$category_id = $_POST['category_id'];
$extension = strtolower($file->getClientOriginalExtension());

// Me fijo si ese título ya está en uso
$documents_same_title = DB::table('documents')->where([
    ['title', '=', $title],
])->get();

if( sizeof($documents_same_title)){
  $error =  "El título está en uso";
  ?>
  @include('includes/navbar')
  @include('documents.admin.forms.add_document_form', ['error' => $error])<?php
}
elseif( !preg_match('/^[\w áéíóúÁÉÍÓÚñÑ]+$/', $title)){
  $error = "El título no tiene sólo números y letras";
  ?>
  @include('includes/navbar')
  @include('documents.admin.forms.add_document_form', ['error' => $error])<?php
}
else{
  $res = DB::table('documents')->insert(
    ['title' => $title, 'category_id' => $category_id, 'extension' => $extension, 'review' => $review]);

  move_uploaded_file($file->getRealPath(), $_SERVER['DOCUMENT_ROOT']."/documents/".$title.".".strtolower($file->getClientOriginalExtension()));
  //phpinfo();
  ?>@include('includes/navbar')<?php
  echo "<div class='high_text' style='color:orange'>Documento agregado</div>";
  ?>@include('documents.admin.tables.view_documents_admin_table')<?php
}
?>

@include('includes/bottom_bar')
@include('includes/bottom')
