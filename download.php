<?php
$file=$_GET['file'].".pdf";
header("content-dispostition:attachment;filename=".urlencode($file));
$fb=fopen($file,"r");
while(!feof($fb)){
 echo fread($fb,8192);
 }
 ?>