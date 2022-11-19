<?php
include '../inc/config.php';
include 'view/modules/header.php';
if (!isset($us['id'])) {header("location: /");}
?>
<div id="app" class="case"></div>
<?php include 'view/modules/footer.php'; ?>
