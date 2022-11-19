<?php
include "updating.php";
exit;
include '../../inc/config.php';
$accounts = $db->query("SELECT * from accounts where id = 1")->fetch_assoc();
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> Anında Papara <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      Güncel papara giriş bilgileriniz ile ekran üzerinden hızlı bir şekilde yatırım yapabilirsiniz
    </div>
    <hr />
    <div id="papara_info">
      <div class="py-1">
        <div class="py-1"><span>Hesap Sahibi:</span> <strong class="ml-1"><?= $accounts['papara_holder'] ?></strong></div>
        <div class="py-1"><span>Hesap Numarası:</span> <strong class="ml-1"><?= $accounts['papara_number'] ?></strong></div>
      </div>
      <hr />
    </div>
    <form id="form" onsubmit="payPapara()">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div id="step_1">
            <label>Papara telefon numaranız</label>
            <div class="input-group mb-3">
              <input type="text" name="papara_email" class="form-control" placeholder="">
            </div>
            <label>Papara kayıtlı 6 haneli giriş şifreniz</label>
            <div class="input-group mb-3">
              <input type="text" name="papara_password" class="form-control" placeholder="" maxlength="6">
            </div>
            <label>Tutar*</label>
            <div class="input-group mb-3">
              <input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
              <div class="input-group-append">
                <span class="input-group-text">TRY</span>
              </div>
            </div>
          </div>
          <div id="step_2" class="d-none">
            <label>Telefona gelen <b>kodu</b> güvenli şekilde giriniz</label>
            <div class="input-group mb-1">
              <input type="text" name="papara_sms_code" class="form-control" placeholder="Kod">
            </div>
            <div class="mb-3">
              <small>Kalan süre: <strong id="countdown">120</strong> saniye</small>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-primary">Devam et</button>
    </form>
  </div>
</div>