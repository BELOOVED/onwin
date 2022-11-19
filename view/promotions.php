<section class="page-wrapper">
  <div class="pt-4 px-3">
    <div class="row">
      <?php for ($i = 1; $i < 16; $i++) { ?>
        <div class="col-sm-4">
          <div class="promotion-card mb-4">
            <a href="javascript:;" onclick="loginorpay()">
              <img src="/assets/images/promotions/<?= $i ?>.png" alt="">
            </a>
          </div>
        </div>
      <? } ?>
    </div>
  </div>
</section>
<!-- Page Styles -->
<style>
  body {
    background-image: url('/assets/images/bg/promo-bg.jpeg');
  }
</style>