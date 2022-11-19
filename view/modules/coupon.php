<div class="panel">
  <div class="panel-header panel-header-sm bg-main text-primary pr-2">
    <h5 class="panel-title text-uppercase">Bahis Kuponu</h5>
    <ul class="d-flex align-items-center">
      <li class="text-medium">
        <a href="javascript:;">
          <i class="icon-systemcalculator text-gray"></i>
        </a>
      </li>
      <li class="text-medium ml-3">
        <a href="javascript:;">
          <i class="icon-settings-new text-gray"></i>
        </a>
      </li>
    </ul>
  </div>
  <!-- Coupon Empty State -->
  <div class="panel-body" id="emptyslip">
    <small class="d-flex align-items-center text-gray">
      <i class="icon-infou mr-2"></i>
      <span>Bir bahis yapmak için, herhangi bir oranın üzerine tıklayınız.</span>
    </small>
  </div>
  <div class="coupon" id="fullslip" style="display:none">
    <div class="coupon-header">
      <div>
        <select class="selectable">
          <option value="1">Tekli</option>
          <option value="2">Kombine</option>
          <option value="3">Sistem</option>
        </select>
      </div>
      <div>
        <a href="#" onclick="clearBetslip()">Temizle <i class="icon-close-cross-pu ml-1"></i></a>
      </div>
    </div>
    <div class="coupon-body">
      <ul class="coupon-list" id="slips">
      </ul>
    </div>
    <div class="coupon-footer">
      <div class="text-align-right pb-2">
        <span>Oran:</span>
        <span class="text-gold ml-1" totalodds></span>
      </div>
      <div class="divider"></div>
      <div class="py-3">
        <input type="number" class="form-control" id="bsamount" oninput="renderBetslip()" placeholder="Bahis...">
      </div>
      <?php if (!isset($us["id"])) { ?>
      <div class="coupon-alert mb-3">
        <p>Lütfen bahisinizi yapınız</p>
        <p>
          <a href="#" onclick="openmodal('signin-modal')">Giriş Yap</a> veya <a href="#" onclick="openmodal('signup-modal')">Kayıt Ol</a> şimdi!
        </p>
      </div>
      <? } ?>
      <button class="btn <?=(!isset($us['id']) ? 'btn-disabled' : '')?> w-100" onclick="loginoralert()">Bahis Yap! </button>
    </div>
  </div>
</div>
