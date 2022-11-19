</div>
<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="pb-4">
      <div class="row">
        <div class="col-sm-2">
          <h5 class="d-block mb-3 text-secondary">Hakkımızda</h5>
          <ul class="footer-nav">
            <li>
              <a href="javascript:;" onclick="openzopim()">İletişim</a>
            </li>
            <li>
              <a href="#/">Firma Bilgileri</a>
            </li>
            <li>
              <a href="#/">Gizlilik Politikası</a>
            </li>
            <li>
              <a href="#/">Sorumlu Oyun</a>
            </li>
            <li>
              <a href="#/">Uluslararası Lisans</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <strong class="d-block mb-3 text-secondary">Yardım</strong>
          <ul class="footer-nav">
            <li>
              <a href="#/faq">Sıkça Sorulan Sorular</a>
            </li>
            <li>
              <a href="#/financial-transactions">Finansal İşlemler</a>
            </li>
            <li>
              <a href="#/dictonary">Bahis Sözlüğü</a>
            </li>
            <li>
              <a href="/livecasino">Canlı Casino</a>
            </li>
            <li>
              <a href="/casino">Casino</a>
            </li>
            <li>
              <a href="#/rulers">Bahis Kuralları</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <strong class="d-block mb-3 text-secondary">İstatistikler</strong>
          <ul class="footer-nav">
            <li>
              <a href="/livesports">Spor Takvimi</a>
            </li>
            <li>
              <a href="javascript:;">Canlı Sonuçlar</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <strong class="d-block mb-3 text-secondary">Promosyonlar</strong>
          <ul class="footer-nav">
            <li>
              <a href="/promotions">Bonuslar</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <strong class="d-block mb-3 text-secondary">Kurallar ve Şartlar</strong>
          <ul class="footer-nav">
            <li>
              <a href="#/">Genel Kurallar ve Şartlar</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <div class="d-flex flex-column align-items-end">
            <small class="text-light">© 2014 - 2020 <?= SYSNAME ?></small>
            <div class="d-flex align-items-center mt-3">
              <div class="adult-symbol mr-3">+18</div>
              <a href="#" class="btn btn-tertiary text-uppercase">Üst Kısıma Geri Dön</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-divider"></div>
    <div class="d-flex align-items-center justify-content-between py-3">
      <small><?= SYSNAME ?> is operated by Vertical Media B.V. (Commercial register of Curacao no. 148792, 45 Pareraweg, Willemstad, Curaçao) under a Curacao e-Gaming License №1668/JAZ. Play responsibly.</small>
      <div class="d-flex">
        <span class="mx-2">
          <img src="/assets/images/android-application-download-casino.png" height="55" alt="">
        </span>
        <span class="mx-2">
          <img src="/assets/images/android-application-download-sportsbook.png" height="55" alt="">
        </span>
      </div>
    </div>
  </div>
  <div class="bg-secondary">
    <div class="container">
      <img src="/assets/images/footer-logos.png" class="w-100" alt="" draggable="false">
    </div>
  </div>
</footer>
<!-- Modals -->
<?php include 'modals.php'; ?>
<!-- Javascript -->
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.counter.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>
<script type="text/javascript" src="/assets/js/app.js"></script>
<?= $main['sources'] ?>
<?php if ($_GET["show"] === "deposit") { ?>
  <script>
    opendashboard('deposit');
  </script>
<?php } ?>
</body>

</html>