@include('includes/head')
@include('includes/navbar')
<?php
del_old_event_pic($_GET["id"],$_GET["pic_id"]);
?>
<div class='high_text' style='color:orange'>Foto borrada</div>
@include('calendar.admin.forms.event_review_form')
@include('includes/bottom_bar')
@include('includes/bottom')
