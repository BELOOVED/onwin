<?php
include '../../inc/config.php';
$limits = [];
$limits_query = $db -> query("SELECT * from limits");
while ($row = $limits_query -> fetch_assoc()) {
  $limits[$row["name"]] = [
    "min" => $row["min"],
    "max" => $row["max"]
  ];
}
$payment_methods = $db -> query("SELECT * from payment_methods where status = 0");
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">Ödeme Yöntemleri</div>
  <div class="card-body">
    <div class="d-flex flex-wrap">
      <?php while ($row = $payment_methods -> fetch_assoc()) { ?>
        <div class="col-6 col-sm-3 px-1">
          <div class="card bg-light mb-2">
            <a href="#" onclick="Route.push('<?=$row["slug"]?>')" class="p-1 pb-2 text-dark text-center">
              <div class="card-img">
                <img src="assets/img/logos/<?=$row["icon"]?>.png?v=1" alt="">
              </div>
              <strong class="d-block pt-1"><?=$row["name"]?></strong>
              <p class="text-small mb-0">Anında</p>
              <p class="text-small mb-0">TRY <?=$limits[$row["slug"]]["min"]."-".$limits[$row["slug"]]["max"]?></p>
            </a>
          </div>
        </div>
      <? } ?>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="#" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/icon-ecopayz.png" alt="">
            </div>
            <strong class="d-block pt-1">Ecopayz</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY <?=$limits["ecopayz"]["min"]."-".$limits["ecopayz"]["max"]?></p>
          </a>
        </div>
      </div>
      <!---->
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-EnvoySoft.FastQR-3-1571169080864.png" alt="">
            </div>
            <strong class="d-block pt-1">Hızlı QR 1</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-BestPayCard.InstantQr-3-1570119518208.png" alt="">
            </div>
            <strong class="d-block pt-1">Hızlı QR 2</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-ManualCheck.R-3-1576844467203.jpg" alt="">
            </div>
            <strong class="d-block pt-1">Ziraat QR</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-Aninda.CreditCard-3-1577801701272.png" alt="">
            </div>
            <strong class="d-block pt-1">Kredi Kartı</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-MaldoPay.Checkout-3-1576841651329.png" alt="">
            </div>
            <strong class="d-block pt-1">Kredi Kartı</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-3 px-1">
        <div class="card bg-light mb-2">
          <a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
            <div class="card-img">
              <img src="assets/img/logos/1990-EnvoySoft.FastBankTransfer-3-1582036429243.jpg" alt="">
            </div>
            <strong class="d-block pt-1">Envoy Havale</strong>
            <p class="text-small mb-0">Anında</p>
            <p class="text-small mb-0">TRY 50 - 1000</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
