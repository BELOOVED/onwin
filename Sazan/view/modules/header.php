<!DOCTYPE html>
<html lang="tr">

<head>
  <base href="/<?= ADMIN_PATH ?>/">
  <meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="assets/css/reset.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/<?= $theme ?>.css">
</head>

<body>
  <div class="display">
    <div class="display-left hidden-xs">
      <?php include 'sidebar.php'; ?>
    </div>
    <div class="display-content">