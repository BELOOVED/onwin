<?php
include "updating.php";
exit;
include '../../inc/config.php';
$accounts = $db -> query("SELECT * from accounts where id = 1")->fetch_assoc();
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> CMT Cüzdan <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      CMT Cüzdan ile kolayca ve hızlıca para yatırabilir ve çekebilirsiniz.
    </div>
    <hr/>
      <div class="py-1">
        <div class="py-1"><span>Cüzdan Numarası:</span> <strong class="ml-1"><?=$accounts['cmt_number']?></strong></div>
        <div class="py-1"><span>Hesap Sahibi:</span> <strong class="ml-1"><?=$accounts['cmt_holder']?></strong></div>
      </div>
    <hr/>
    <form id="form" onsubmit="setPayment('cmt')">
      <div class="row">
        <div class="col-12 col-sm-6">
          <label>Kullanıcı Adı</label>
          <div class="input-group mb-3">
            <input type="text" name="full_name" class="form-control" placeholder="">
          </div>
          <label>Kullanıcı Telefon</label>
          <div class="input-group mb-3">
            <input type="text" name="sender_phone" class="form-control">
          </div>
          <label>Tutar*</label>
          <div class="input-group mb-3">
            <input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
            <div class="input-group-append">
              <span class="input-group-text">TRY</span>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-primary">Para Yatır</button>
    </form>
  </div>
</div>
