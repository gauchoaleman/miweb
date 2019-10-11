<?php
function transform_result2array($result,$key,$value)
{
  for( $i=0,$obj=$result[0];$i<sizeof($result);$i++){
    $obj=$result[$i];
    $ret[$obj->$key] = $obj->$value;
  }
  return $ret;
}

function del_old_event_pic($event_id,$pic_id)
{
  $files = glob($_SERVER['DOCUMENT_ROOT']."/img/events/$event_id.$pic_id.*");
  foreach($files as $file)
    unlink($file);
}

function get_event_pic_url($event_id,$pic_id)
{
  $files = glob($_SERVER['DOCUMENT_ROOT']."/img/events/$event_id.$pic_id.*");
  if( isset($files[0]) )
    return "http://".$_SERVER['HTTP_HOST']."/img/events/".basename($files[0]);
}
?>
