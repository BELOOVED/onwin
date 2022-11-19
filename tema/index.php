<?php
include '../inc/config.php';
$q = explode('/', $_GET['q']);
$page = 'dashboard';
if (file_exists('view/'.$q[0].'.php')) {
  $page = $q[0];
}
if (!$admin) {
  include 'view/login.php';
}else{
  include 'view/modules/header.php';
  if ($page == 'login') {
    include 'view/dashboard.php';
  }else{
    include 'view/'.$page.'.php';
  }
  include 'view/modules/footer.php';
}
?>
