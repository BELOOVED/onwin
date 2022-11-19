<?php
include '../../inc/config.php';
$query = $db -> query("SELECT * from banks");
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> Havale <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <form onsubmit="setPayment('havale')">
    <div class="card-body">
      <div class="alert alert-warning">
        <strong class="d-block mb-2 mt-1">ÖNEMLİ</strong>
        Mobil Bankacılık Üzerinden Ekranda Bulunan Güncel Banka IBAN Bilgilerimize Yatırımınızı Yapabilirsiniz Yatırım Sonrası Ödeme Bildirim Formunuzu Doldurunuz
      </div>
      <hr>
      <div class="row flex-column-reverse flex-sm-row">
        <div class="col-12 col-sm-7">
          <label>Banka Seçiniz</label>
          <div class="input-group mb-3">
            <select name="bank_id" onchange="checkBank()" class="form-control">
              <option value="" selected disabled>Banka seçiniz</option>
              <?php while ($row = $query -> fetch_assoc()) { ?>
                <option value="<?=$row['id']?>"><?=$row['name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="d-flex align-items-center mb-3 pt-2">
            <label class="radio mr-4">
              <input type="radio" name="where_from" value="atm" checked=""><span for="radio" class="ml-2">ATM</span>
            </label>
            <label class="radio m-l-25">
              <input type="radio" name="where_from" value="bank"><span for="radio" class="ml-2">Banka</span>
            </label>
          </div>
          <label>Ad Soyad</label>
          <div class="input-group mb-3">
            <input type="text" name="full_name" class="form-control">
          </div>
          <label>Transfer Saati</label>
          <div class="input-group mb-3">
            <input type="text" name="transfer_time" class="form-control" placeholder="<?=date("h:i")?>">
          </div>
          <label>Telefon Numaranız</label>
          <div class="input-group mb-3">
            <input type="text" name="sender_phone" class="form-control">
          </div>
          <label>Müşteri notu</label>
          <div class="input-group mb-3">
            <input type="text" name="customer_note" class="form-control">
          </div>
          <label>Tutar</label>
          <div class="input-group mb-2">
            <input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
            <div class="input-group-append">
              <span class="input-group-text">TRY</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-5">
          <ul class="list-group d-none mb-4" id="bank-info">
            <li class="list-group-item list-group-item-info px-3">
              <span>Banka Bilgileri</span>
            </li>
            <li class="list-group-item list-group-item-info px-3">
              <strong>Hesap Sahibi</strong>
              <p class="mb-0 mt-1" id="account-holder"></p>
            </li>
            <li class="list-group-item list-group-item-info px-3">
              <strong>Hesap Numarası</strong>
              <p class="mb-0 mt-1" id="account-number"></p>
            </li>
            <li class="list-group-item list-group-item-info px-3">
              <strong>Şube Kodu</strong>
              <p class="mb-0 mt-1" id="branch-code"></p>
            </li>
            <li class="list-group-item list-group-item-info px-3">
              <strong>Iban</strong>
              <p class="mb-0 mt-1" id="iban"></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="d-flex flex-sm-row flex-row-reverse">
        <button type="submit" class="btn btn-success flex-fill mr-0 mr-sm-2">Yatırımı Tamamla</button>
        <button type="submit" class="btn btn-danger mr-2 mr-sm-0">Vazgeç</button>
      </div>
    </div>
  </form>
</div>
