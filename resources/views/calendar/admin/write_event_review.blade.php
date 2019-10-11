@include('includes/head')

<?php
$review= $_POST['review'];
$id = $_GET["id"];
$file1 = \Request::file('pic1');
$file2 = \Request::file('pic2');
if( $file1 )
  $file1_extension = strtolower($file1->getClientOriginalExtension());
if( $file2 )
  $file2_extension = strtolower($file2->getClientOriginalExtension());

if($file1 && $file1_extension!='jpg' && $file1_extension!='jpeg' && $file1_extension!='png' ){
  $error = "Formato de foto 1 incorrecto";
  ?>
  @include('includes/navbar')
  @include('events.admin.forms.event_review_form', ['error' => $error])<?php
}
elseif($file2 && $file2_extension!='jpg' && $file2_extension!='jpeg' && $file2_extension!='png' ){
  $error = "Formato de foto 2 incorrecto";
  ?>
  @include('includes/navbar')
  @include('events.admin.forms.event_review_form', ['error' => $error])<?php
}
else {
  $res = DB::table('events')->where('id', $id)->update(['review' => $review]);
  //Copiar archivos
  if( $file1 ){
    del_old_event_pic($id,1);
    move_uploaded_file($file1->getRealPath(), $_SERVER['DOCUMENT_ROOT']."/img/events/$id.1.$file1_extension");
  }
  if( $file2 )
  {
    del_old_event_pic($id,2);
    move_uploaded_file($file2->getRealPath(), $_SERVER['DOCUMENT_ROOT']."/img/events/$id.2.$file2_extension");
  }

?>
@include('includes/navbar')
<div class='high_text' style='color:orange'>Reseña guardada</div>
@include('calendar.admin.tables.view_events_table')
<?php
}
?>
@include('includes/bottom_bar')
@include('includes/bottom')
