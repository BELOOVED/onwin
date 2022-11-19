<?php
include "updating.php";
exit;
include '../../inc/config.php';
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> Paykasa <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      7/24 Anlık Paykasa ile Yatırım İşlemleri Sağlayabilirsiniz.
    </div>
    <hr/>
    <form onsubmit="setPayment('paykasa')">
      <div class="row">
        <div class="col-12 col-sm-6">
          <label>Paykasa kart numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="paykasa_number" class="form-control">
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
