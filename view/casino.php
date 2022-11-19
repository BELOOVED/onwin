<?php
include 'modules/carousel-widget.php';
include 'modules/game-card-widget.php';
$carousel = [
  [
    "image" => "/assets/images/carousel/casino-1.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/casino-2.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/casino-3.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/casino-4.jpg",
    "url" => "/promotions",
  ],
];
$popular_games_list = [
  [
    "image" => "/assets/images/games/02c70a1e0675515d0d695d5ba3dd4f63_casinoGameIcon3.jpg",
    "title" => "Bounty Belles",
  ],
  [
    "image" => "/assets/images/games/e117e54f938e35899b4aa80911188614_casinoGameIcon3.jpg",
    "title" => "PowerPlay: Storms of Ice™",
  ],
  [
    "image" => "/assets/images/games/d238dfb6edf99cd4098c44af7039a91b_casinoGameIcon3.jpeg",
    "title" => "243 Crystal Fruits",
  ],
];
$path = "assets/json/slot.json";
$file = fopen($path, "r");
$games_list = json_decode( fread($file, filesize($path)), true );
fclose($games_list);
?>
<section class="page-wrapper page-wrapper-transparent">
  <div class="pt-0">
    <div class="row">
      <div class="col-sm-9 pr-2">
        <?php carousel($carousel); ?>
        <div class="pt-1">
          <div class="paragraph-line my-3">
            <span>Popüler Oyunlar</span>
          </div>
          <div class="row mx-n1">
            <?php foreach ($popular_games_list as $value) { ?>
              <div class="col-sm-4 px-1">
                <?php gameCard($value); ?>
              </div>
            <? } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pl-0">
        <?php include 'modules/winners-widget.php'; ?>
      </div>
    </div>
  </div>
  <div class="game-list-wrapper mt-3">
    <div class="game-list-nav">
      <ul class="tab-wrapper shuffle-nav">
        <li class="tab-item active">
          <a href="javascript:;">
            <i class="icon-All--icon-new"></i>
            <p>Tüm oyunlar</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-fishing"></i>
            <p>Fishing & Hunting</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-Megaways"></i>
            <p>Megaways</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-trophy1"></i>
            <p>Popüler Oyunlar</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-Instatnt-games"></i>
            <p>Instant Game</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-cards"></i>
            <p>Kartlar</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-Mini-games"></i>
            <p>Mini Oyunlar</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-Buy-Bonus"></i>
            <p>Buy Bonus</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-flash"></i>
            <p>Yeni Oyunlar</p>
          </a>
        </li>
        <li class="tab-item">
          <a href="javascript:;">
            <i class="icon-video_slots"></i>
            <p>Jackpotlar</p>
          </a>
        </li>
      </ul>
    </div>
    <div class="paragraph-line my-3">
      <span>Oyun Sağlayıcıları</span>
    </div>
    <div class="game-list-providers tab-wrapper">
      <a href="javascript:;" class="tab-item btn active">Tüm Sağlayıcılar</a>
      <a href="javascript:;" class="tab-item btn">NetEnt</a>
      <a href="javascript:;" class="tab-item btn">Amatic</a>
      <a href="javascript:;" class="tab-item btn">FAZI</a>
      <a href="javascript:;" class="tab-item btn">PLAYSON</a>
      <a href="javascript:;" class="tab-item btn">Playtech</a>
      <a href="javascript:;" class="tab-item btn">EGT</a>
      <a href="javascript:;" class="tab-item btn">EZUGI</a>
      <a href="javascript:;" class="tab-item btn">ENDORPHINA</a>
      <a href="javascript:;" class="tab-item btn">Hacksaw</a>
      <a href="javascript:;" class="tab-item btn">RCT</a>
      <a href="javascript:;" class="tab-item btn">REELNRG</a>
      <a href="javascript:;" class="tab-item btn">Slot Builder</a>
      <a href="javascript:;" class="tab-item btn">Spadegaming</a>
      <a href="javascript:;" class="tab-item btn">1X2 Network</a>
      <a href="javascript:;" class="tab-item btn">PATAGONIA</a>
      <a href="javascript:;" class="tab-item btn">Betsolutions</a>
      <a href="javascript:;" class="tab-item btn">SPIGO</a>
      <a href="javascript:;" class="tab-item btn">REALISTIC GAMES</a>
      <a href="javascript:;" class="tab-item btn">SPINOMENAL</a>
      <a href="javascript:;" class="tab-item btn">TOM HORN</a>
      <a href="javascript:;" class="tab-item btn">PRAGMATIC PLAY</a>
      <a href="javascript:;" class="tab-item btn">BETCONSTRUCT</a>
      <a href="javascript:;" class="tab-item btn">BOOMING GAMES</a>
      <a href="javascript:;" class="tab-item btn">WORLDMATCH</a>
      <a href="javascript:;" class="tab-item btn">OMI GAMING</a>
      <a href="javascript:;" class="tab-item btn">Revolver Gaming</a>
      <a href="javascript:;" class="tab-item btn">MRSLOTTY</a>
      <a href="javascript:;" class="tab-item btn">MULTISLOT</a>
      <a href="javascript:;" class="tab-item btn">Vela Gaming</a>
      <a href="javascript:;" class="tab-item btn">DLV</a>
      <a href="javascript:;" class="tab-item btn">EVOLUTION</a>
      <a href="javascript:;" class="tab-item btn">Fugaso</a>
      <a href="javascript:;" class="tab-item btn">GAMEART</a>
      <a href="javascript:;" class="tab-item btn">GENII</a>
      <a href="javascript:;" class="tab-item btn">GENESIS</a>
      <a href="javascript:;" class="tab-item btn">HABANERO</a>
      <a href="javascript:;" class="tab-item btn">WAZDAN</a>
    </div>
    <div class="px-2 pb-2">
      <div class="row mx-0 shuffle-content">
        <?php foreach ($games_list as $value) { ?>
          <div class="col-sm-2 px-0">
            <?php gameCard($value, true); ?>
          </div>
        <? } ?>
      </div>
    </div>
  </div>
</section>
<!-- Page JavaScript -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  $("body").css("background-image", "url(/assets/images/bg/home-bg.png)");
})
</script>
