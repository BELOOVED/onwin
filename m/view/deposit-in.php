<?php if (!isset($us['id'])) {header('location: /');} ?>
<style media="screen">
  iframe {
    height: calc(100vh - 166px);
  }
  .footer-m-parent {
    display: none;
  }
</style>
<div class="deposit-view-wrapper">
  <div class="title-separator-contain-b">
    <h1>Finansal İşlemler</h1>
  </div>
  <div id="payments-form-container" class="payments-form-wrapper animate-from-right-to-left">
    <div class="bread-crumbs-view-m">
      <a href="deposit"><span class="back-arrow-crumbs"></span></a>
      <p><span><span style="text-transform:capitalize"><?=$_GET['method']?></span> ile yatırım</span></p>
    </div>
    <iframe src="/payment/<?=$_GET['method']?>" width="100%"></iframe>
  </div>
</div>
