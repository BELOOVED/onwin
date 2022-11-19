<?php
include '../../inc/config.php';
$query = $db -> query("SELECT * from banks");
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> CepBank <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      CepBank ile kolayca ve hızlıca para yatırabilirsiniz.
    </div>
    <hr/>
    <form onsubmit="setPayment('cepbank')">
      <div class="row">
        <div class="col-12 col-sm-6">
          <label>Banka seçiniz</label>
          <div class="input-group mb-3">
            <select class="form-control" name="bank_id">
              <option value="" selected disabled>Banka seçiniz</option>
              <?php while ($row = $query -> fetch_assoc()) { ?>
                <option value="<?=$row['id']?>"><?=$row['name']?></option>
              <? } ?>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Gönderici telefon numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="sender_phone" class="form-control">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Alıcı telefon numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="buyer_phone" class="form-control">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Alıcı TC kimlik numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="buyer_passport" class="form-control">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Alıcı doğum tarihi</label>
          <div class="input-group mb-3">
            <input type="text" name="buyer_birth" class="form-control">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Alıcı kimlik veriliş tarihi</label>
          <div class="input-group mb-3">
            <input type="text" name="buyer_passport_date" class="form-control">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <label>Referans numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="referance" class="form-control">
          </div>
        </div>
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
      <hr/>
      <button type="submit" class="btn btn-block btn-primary">Para Yatır</button>
    </form>
  </div>
</div>
