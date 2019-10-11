@include('includes/head')
@include('includes/navbar')
<?php
del_old_event_pic($_GET["id"],1);
del_old_event_pic($_GET["id"],2);
?>
<div class='high_text' style='color:orange'>Fotos borradas</div>
@include('calendar.admin.forms.event_review_form')
@include('includes/bottom_bar')
@include('includes/bottom')
