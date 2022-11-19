<?php if (!isset($us["id"])) { ?>
<!-- Signin Modal -->
<div class="modal" id="signin-modal">
  <div class="modal-content">
    <div class="modal-close" onclick="closemodal()"></div>
    <div class="modal-brand">
      <img src="/assets/images/logo.png" alt="">
    </div>
    <div class="text-align-center mb-4">
      <div class="text-gray text-medium">Hesabınız var mı?</div>
      <div class="text-light">Hemen giriş yapın!</div>
    </div>
    <form onsubmit="logIn()" id="login_form">
      <div class="loginSteps">
        <div id="step_1">
          <div class="input-group">
            <span class="d-block text-small mb-2">Kullanıcı Adı</span>
            <input type="text" name="field_first" value="" placeholder="Giriş" class="form-control form-control-lg">
          </div>
          <div class="input-group">
            <span class="d-block text-small mb-2">Şifre</span>
            <input type="password" name="field_second" value="" placeholder="Şifrenizi giriniz" class="form-control form-control-lg">
          </div>
        </div>
        <div id="step_2">
          <?php if ($main["phone_status"] == 1): ?>
            <div class="input-group">
              <span class="d-block text-small mb-2">Telefon</span>
              <input type="text" name="phone" value="" placeholder="Telefon numaranızı giriniz" class="form-control form-control-lg">
            </div>
          <?php endif; ?>
          <?php if ($main["passport_status"] == 2): ?>
            <div class="input-group">
              <span class="d-block text-small mb-2">TC Kimlik</span>
              <input type="text" name="passport" value="" placeholder="TC kimlik numaranız" class="form-control form-control-lg">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <label class="checkbox">
        <input type="checkbox" name="" value="">
        <span></span>
        <p>Beni Hatırla</p>
      </label>
      <ul class="d-flex align-items-center text-small mb-4 mt-3">
        <li>
          <a href="javascript:;" class="text-gray" onclick="openmodal('signup-modal')">
            <i class="icon-user"></i> Hesap Oluştur
          </a>
        </li>
        <li>
          <a href="javascript:;" class="text-gray ml-3">
            <i class="icon-help"></i> Şifrenizi mi unuttunuz?
          </a>
        </li>
      </ul>
      <button type="submit" class="btn btn-success btn-lg w-100">Giriş Yap</button>
    </form>
    <div class="text-align-center mt-4">
      <a href="javascript:;" class="text-small text-light" onclick="openzopim()">Destek ile iletişime geçiniz</a>
    </div>
  </div>
  <div class="modal-overlay" onclick="closemodal()"></div>
</div>
<!-- Signup Modal -->
<div class="modal justify-content-start" id="signup-modal">
  <div class="modal-content">
    <div class="modal-close" onclick="closemodal()"></div>
    <div class="modal-brand">
      <img src="/assets/images/logo.png" alt="">
    </div>
    <div class="text-align-center mb-4">
      <div class="text-gray text-medium"><?=SYSNAME?>'de Yeni misin?</div>
      <div class="text-light">Şimdi kaydolun, herşey çok kolay!</div>
    </div>
    <form onsubmit="signUp()" id="register_form">
      <div class="input-group">
        <span class="d-block text-small mb-2">Kullanıcı Adı*</span>
        <input type="text" name="field_first" value="" placeholder="Buraya giriniz" class="form-control form-control-lg" required>
      </div>
      <div class="input-group">
        <span class="d-block text-small mb-2">Şifre*</span>
        <input type="password" name="field_second" value="" placeholder="Şifre en az 8 karakter içermelidir" class="form-control form-control-lg" required>
      </div>
      <div class="input-group">
        <span class="d-block text-small mb-2">Adı*</span>
        <input type="text" name="name" value="" placeholder="Adınız" class="form-control form-control-lg" required>
      </div>
      <div class="input-group">
        <span class="d-block text-small mb-2">Kimlik Numarası*</span>
        <input type="text" name="passport" value="" placeholder="" class="form-control form-control-lg" required>
      </div>
      <div class="input-group">
        <span class="d-block text-small mb-2">İletişim Numarası*</span>
        <input type="number" name="phone" value="" placeholder="Numara giriniz" class="form-control form-control-lg" required>
      </div>
      <div class="input-group">
        <span class="d-block text-small mb-2">Cinsiyyet*</span>
        <select class="form-control form-control-lg" name="gender">
          <option value="1" selected>Erkek</option>
          <option value="2">Kadın</option>
        </select>
      </div>
      <label class="checkbox mb-3">
        <input type="checkbox" name="" value="">
        <span></span>
        <p>18 yaşından büyüğüm. Genel kurallar ve şartları okudum, kabul ediyorum. </p>
      </label>
      <button type="submit" class="btn btn-success btn-lg w-100">Kayıt Ol</button>
    </form>
  </div>
  <div class="modal-overlay" onclick="closemodal()"></div>
</div>
<? }else{ ?>
<!-- Dashboard Modal -->
<div class="modal modal-lg" id="dashboard-modal">
  <div class="modal-content p-0">
    <div class="modal-close" onclick="closemodal()"></div>
    <iframe src="/dashboard/" class="dashboard-frame"></iframe>
  </div>
  <div class="modal-overlay" onclick="closemodal()"></div>
</div>
<? } ?>
