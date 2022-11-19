<?php
include '../../inc/config.php';
$accounts = $db -> query("SELECT * from accounts where id = 1")->fetch_assoc();
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a>Papara<span class="font-weight-normal ml-1">ile yatırım yap</span>
  </div>
  <form id="form" onsubmit="setPayment('papara')">
    <div class="card-body">
      <div class="alert alert-warning" role="alert">
        <strong class="d-block mb-2 mt-1">ÖNEMLİ</strong>
        Papara Hesabınıza Giriş Yaparak Ekranda Bulunan Güncel Papara Hesabımıza Yatırımınızı Yapabilirsiniz
      </div>
      <hr/>
      <?php if ($accounts['papara_holder'] && $accounts['papara_number']): ?>
        <div class="py-1">
          <div class="py-1"><span>Hesap Sahibi:</span> <strong class="ml-1"><?=$accounts['papara_holder']?></strong></div>
          <div class="py-1"><span>Hesap Numarası:</span> <strong class="ml-1"><?=$accounts['papara_number']?></strong></div>
        </div>
        <hr/>
      <?php endif; ?>
      <p class="text-secondary">Lütfen yatırım yapmadan <u>Yatırımı Gerçekleştirdim</u> butonuna tıklamayınız</p>
      <hr/>
      <div class="row">
        <div class="col-12 col-sm-6">
          <label>Kullanıcı Adı</label>
          <div class="input-group mb-3">
            <input type="text" name="full_name" class="form-control" placeholder="">
          </div>
          <label>Telefon</label>
          <div class="input-group mb-3">
            <input type="text" name="sender_phone" class="form-control" placeholder="">
          </div>
          <label>Tutar*</label>
          <div class="input-group mb-2">
            <input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
            <div class="input-group-append">
              <span class="input-group-text">TRY</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="d-flex flex-sm-row flex-row-reverse">
        <button type="submit" class="btn btn-success flex-fill mr-0 mr-sm-2">Yatırımı Gerçekleştirdim</button>
        <button type="submit" class="btn btn-danger mr-2 mr-sm-0">Vazgeç</button>
      </div>
    </div>
  </form>
</div>
