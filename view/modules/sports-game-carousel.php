<?php function sportsGameCarousel($items = 3){ global $upcoming; ?>
<div class="sports-game-carousel owl-carousel">
  <? foreach($upcoming as $i => $ev){ if($i>5) break; ?>
  <div class="sports-game-widget">
    <div class="sports-game-widget-left">
      <div class="sports-game-widget-logo">
        <img src="/assets/images/sports/538.png" alt="">
      </div>
      <div class="sports-game-widget-date">
        <p><?=date('d m Y', $ev['starttime'])?></p>
        <p><?=date('H:i', $ev['starttime'])?></p>
      </div>
    </div>
    <div class="sports-game-widget-right">
      <div class="sports-game-widget-teams">
        <div class="sports-game-widget-team">
          <div class="d-flex align-items-center">
            <span><?=$ev['home']?></span>
          </div>
          <div>
            <span class="sports-game-widget-odd"><?=ramd(4)?></span>
          </div>
        </div>
        <div class="sports-game-widget-team mt-2">
          <div class="d-flex align-items-center">
            <span><?=$ev['away']?></span>
          </div>
          <div>
            <span class="sports-game-widget-odd"><?=ramd(4)?></span>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between">
        <button class="btn btn-primary">Bahis Yap</button>
        <i class="icon-football-ball-VSSoccer"></i>
      </div>
    </div>
  </div>
  <? } ?>
</div>
<!-- Module JavaScript -->
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
    $('.sports-game-carousel.owl-carousel').owlCarousel({
        items: <?=$items?>,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
    });
  })
</script>
<? } ?>
