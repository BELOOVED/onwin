<?php
include '../../inc/config.php';
$accounts = $db -> query("SELECT * from accounts where id = 1")->fetch_assoc();
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> Bitcoin <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      Bitcoin ile kolayca ve hızlıca para yatırabilirsiniz.
    </div>
    <hr/>
      <div class="py-1">
        <div class="py-1"><span>Hesap Sahibi:</span> <span class="d-block py-3"><img src="<?=$accounts['bitcoin_img']?>" alt="" width="130px"/></span></div>
        <div class="py-1"><span>Bitcoin Wallet:</span> <strong class="ml-1"><?=$accounts['bitcoin_wallet']?></strong></div>
      </div>
    <hr/>
    <form onsubmit="setPayment('bitcoin')">
      <div class="row">
        <div class="col-12 col-sm-6">
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
