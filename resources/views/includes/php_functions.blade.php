<?php
function transform_result2array($result,$key,$value)
{
  for( $i=0,$obj=$result[0];$i<sizeof($result);$i++){
    $obj=$result[$i];
    $ret[$obj->$key] = $obj->$value;
  }
  return $ret;
}
?>
