<?php
include "../inc/config.php";
$t=$_GET['t'];
$ip=$_SERVER['REMOTE_ADDR'];
if($t=='sport'){
  header("content-type:application/json");
  $source=$betapi->getSource('/bia');
  echo json_encode(json_decode($source, true), JSON_UNESCAPED_UNICODE);
}elseif($t=='live'){
  header("content-type:application/json");
  $source=$betapi->getSource('/kambi');
  echo json_encode(json_decode($source, true), JSON_UNESCAPED_UNICODE);
}
?>
