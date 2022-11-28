<?php

if (!isset($us['id'])) {header('location: /');}
$limits = [];
$query_limits = $db->query("SELECT * from limits");
while ($row = $query_limits->fetch_assoc()) {
  $limits[$row['name']] = ['min' => $row['min'], 'max' => $row['max']];
}
$payment_query = $db -> query("SELECT * from payment_methods");
?>
<style media="screen">
  .footer-m-parent {
    display: none;
  }
</style>
<div data-v-72c175cd="" class="account-page">
<div class="container">
<div class="row d-flex flex-column-reverse flex-sm-row-reverse">
<div class="col-sm-2"></div>
<div class="col-sm-8 accountDiv px-0">
<div class="panel-page-title p-2 p-sm-5" style="padding-bottom: 0px !important;">
<div class="px-sm-5 px-2">
<div class="d-inline-block">
<i class="fa fa-landmark"></i>
Para Yatırma Yöntemleri
</div>
</div>
</div>
<div class="p-2 p-sm-5" style="padding-top: 0px !important;">
<div class="px-sm-5">
<div class="banking-menu row text-uppercase my-4">
<div class="col-6 col-sm-auto flex-sm-grow-1 pr-2 mb-2"><a href="deposit" aria-current="page" class="router-link-exact-active router-link-active">Yatırım</a></div>
<div class="col-6 col-sm-auto flex-sm-grow-1 mb-2 pl-0"><a href="withdraw" class="">Çekim</a></div>
<div class="col-6 col-sm-auto flex-sm-grow-1 mb-2 pr-2 pl-sm-0"><a href="pendings.php" class="">Çekim Talepleri</a></div>
<div class="col-6 col-sm-auto flex-sm-grow-1 mb-2 pl-0"><a href="bankaccounts" class="">Banka Hesapları</a></div>
</div>
<div data-v-72c175cd="" class="row depositTypes m-0">
<iframe src="/payment/" style="width:100%;height:calc(160vh - 191px);border:0"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>