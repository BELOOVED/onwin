<?php
    $type = $_GET['type'] ? $_GET['type'] : "index";
    include 'view/payments/'.$type.'.php';
  ?>