@include('includes/head')
<?php
DB::table('categories')->where('id','=',$_GET['id'])->delete();
$documents = DB::table('documents')->where('category_id',$_GET['id'])->get();
foreach($documents as $document){
  unlink($_SERVER['DOCUMENT_ROOT']."/documents/".$document->title.".".$document->extension);
}
DB::table('documents')->where('category_id','=',$_GET['id'])->delete();
?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Categoría borrada</div>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
