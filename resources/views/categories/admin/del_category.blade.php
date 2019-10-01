@include('includes/head')
@include('includes/navbar')
<?php
if (DB::table('categories')->where('id',$_GET['id'])->delete()) {
  ?><div class='high_text' style='color:orange'>Categoría borrada</div><br><?php
}else{
  ?><div class='high_text' style='color:orange'>No se pudo borrar categoría</div><br><?php }?>
@include('categories.admin.tables.view_categories_admin_table')
@include('includes/bottom_bar')
@include('includes/bottom')
