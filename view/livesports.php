<?php

$live = json_decode($betapi->getSource('/live'), true);

$leagues = [
  [
    "title" => "Türkiye(13)",
    "flag" => "tr",
  ],
  [
    "title" => "Avrupa(54)",
    "flag" => "eu",
  ],
  [
    "title" => "İngiltere(84)",
    "flag" => "gb",
  ],
  [
    "title" => "İspanya(73)",
    "flag" => "es",
  ],
  [
    "title" => "Almanya(42)",
    "flag" => "de",
  ],
  [
    "title" => "İtalya(63)",
    "flag" => "it",
  ],
  [
    "title" => "Fransa(41)",
    "flag" => "fr",
  ],
  [
    "title" => "Hollanda(20)",
    "flag" => "hu",
  ],
  [
    "title" => "Rusya(19)",
    "flag" => "ru",
  ],
  [
    "title" => "Portekiz(17)",
    "flag" => "pt",
  ],
  [
    "title" => "Avustralya(8)",
    "flag" => "au",
  ],
  [
    "title" => "ABD(2)",
    "flag" => "us",
  ],
  [
    "title" => "Arjantin(1)",
    "flag" => "ar",
  ],
  [
    "title" => "Brezilya(23)",
    "flag" => "br",
  ],
  [
    "title" => "Ukrayna(7)",
    "flag" => "ua",
  ],
  [
    "title" => "Cezayir(10)",
    "flag" => "cz",
  ],
  [
    "title" => "Avusturya(15)",
    "flag" => "at",
  ],
  [
    "title" => "Belçika(14)",
    "flag" => "be",
  ],
  [
    "title" => "Bulgaristan(6)",
    "flag" => "bg",
  ],
  [
    "title" => "Şili(3)",
    "flag" => "cl",
  ],
  [
    "title" => "Kolumbia(6)",
    "flag" => "co",
  ],
];
$sport_list = [
  [
    "title" => "POPÜLER KARŞILAŞMALAR",
    "icon" => "icon-trophy1",
    "color" => "yellow",
    "count" => "19",
    "games" => [
      [
        "title" => "UEFA Şampiyonlar Ligi",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "eu",
      ],
      [
        "title" => "UEFA Avrupa Şampiyonası",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "eu",
      ],
      [
        "title" => "UEFA Avrupa Ligi",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "eu",
      ],
      [
        "title" => "Premier Lig",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "ge",
      ],
      [
        "title" => "Championship",
        "icon" => "icon-Allsports_basketball",
        "flag" => "ge",
      ],
      [
        "title" => "La Liga",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "es",
      ],
      [
        "title" => "Segunda Division",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "es",
      ],
      [
        "title" => "Eurocup",
        "icon" => "icon-Allsports_basketball",
        "flag" => "eu",
      ],
      [
        "title" => "FIBA Şampiyonlar Ligi",
        "icon" => "icon-Allsports_basketball",
        "flag" => "eu",
      ],
      [
        "title" => "Bundesliga",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "de",
      ],
      [
        "title" => "DFB Pokal",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "de",
      ],
      [
        "title" => "Serie A",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "it",
      ],
      [
        "title" => "Ligue 1",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "fr",
      ],
      [
        "title" => "Süper Lig",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "tr",
      ],
      [
        "title" => "TFF 1. Ligi",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "tr",
      ],
      [
        "title" => "Primeira Liga",
        "icon" => "icon-football-ball-VSSoccer",
        "flag" => "pt",
      ],
    ]
  ],
  [
    "title" => "Futbol",
    "icon" => "icon-football-ball-VSSoccer",
    "color" => "cyan",
    "count" => "875",
    "games" => $leagues
  ],
  [
    "title" => "Basketbol",
    "icon" => "icon-Allsports_basketball",
    "color" => "orange",
    "count" => "152",
    "games" => $leagues
  ],
  [
    "title" => "Tenis",
    "icon" => "icon-Allsports_tennis",
    "color" => "haki",
    "count" => "349",
    "games" => $leagues
  ],
  [
    "title" => "Voleybol",
    "icon" => "icon-Allsports_volleyball",
    "color" => "haki-light",
    "count" => "38",
    "games" => $leagues
  ],
  [
    "title" => "Masa Tenisi",
    "icon" => "icon-Allsports_tabletennis",
    "color" => "green",
    "count" => "232",
    "games" => $leagues
  ],
  [
    "title" => "Beyzbol",
    "icon" => "icon-Allsports_baseball",
    "color" => "blue-light",
    "count" => "11",
    "games" => $leagues
  ],
  [
    "title" => "Buz Hokeyi",
    "icon" => "icon-Allsports_icehockey",
    "color" => "blue",
    "count" => "198",
    "games" => $leagues
  ],
  [
    "title" => "Hentbol",
    "icon" => "icon-Allsports_handball",
    "color" => "blue-dark",
    "count" => "106",
    "games" => $leagues
  ],
  [
    "title" => "Badminton",
    "icon" => "icon-Allsports_badminton",
    "color" => "green-light",
    "count" => "1",
    "games" => []
  ],
  [
    "title" => "Amerikan Futbolu",
    "icon" => "icon-Allsports_americanfootball",
    "color" => "orange-dark",
    "count" => "55",
    "games" => [["title" => "ABD", "flag" => "us"]]
  ],
  [
    "title" => "Kriket",
    "icon" => "icon-Allsports_cricket",
    "color" => "green-dark",
    "count" => "14",
    "games" => $leagues
  ],
  [
    "title" => "MMA",
    "icon" => "icon-Allsports_ultimatefighting",
    "color" => "gray",
    "count" => "49",
    "games" => $leagues
  ],
  [
    "title" => "Boks",
    "icon" => "icon-Allsports_boxing",
    "color" => "red",
    "count" => "28",
    "games" => $leagues
  ],
];
?>
<section class="page-wrapper page-wrapper-vh px-0 pb-0">
  <div class="classis-view-column">
    <div class="classis-view-left">
      <ul class="tab-switch">
        <li class="tab-switch-item">
          <a href="#" class="px-3">
            <i class="icon-list4"></i>
          </a>
        </li>
        <li class="tab-switch-item active flex-fill">
          <a href="/livesports">Canlı <span class="badge">140</span></a>
        </li>
        <li class="tab-switch-item flex-fill">
          <a href="/sportsbook">Maç Öncesi <span class="badge">2304</span></a>
        </li>
      </ul>
      <div class="bg-sixth p-2">
        <ul class="d-flex align-items-center">
          <li class="pr-2 br-divider">
            <select class="selectable">
              <option value="all">HEPSİ</option>
              <option value="1">1 saat</option>
              <option value="2">2 saat</option>
              <option value="3">3 saat</option>
              <option value="4">6 saat</option>
              <option value="5">12 saat</option>
              <option value="6">24 saat</option>
              <option value="7">48 saat</option>
            </select>
          </li>
          <li class="pl-2 lh-0">
            <a href="javascript:;" class="text-gray">
              <i class="icon-two-arrows-down"></i>
            </a>
          </li>
        </ul>
        <div class="d-flex align-items-center mt-2">
          <div class="sports-search">
            <input type="text" name="" value="" placeholder="müsabala veya takım...">
            <button><i class="icon-search-header-new"></i></button>
          </div>
          <a href="#" class="text-light ml-2 lh-0">
            <i class="icon-hide-left-menu text-large"></i>
          </a>
        </div>
      </div>
      <ul class="sport-list">
        <?php foreach ($sport_list as $key => $value) { ?>
        <li class="sport-list-item <?=$key == 0 ? "active" : ""?> sli-<?=$value['color']?>">
          <a href="#" data-count="<?=$value['count']?>">
            <i class="<?=$value['icon']?>"></i>
            <strong><?=$value['title']?></strong>
          </a>
          <ul class="sport-list-games">
            <?php foreach ($value["games"] as $value) { ?>
            <li>
              <a href="#">
                <?php if ($value["icon"]) { ?>
                  <i class="<?=$value['icon']?>"></i>
                <? } ?>
                <strong><?=$value['title']?></strong>
                <span class="flag-icon">
                  <img src="https://www.countryflags.io/<?=$value['flag']?>/shiny/16.png" alt="">
                </span>
              </a>
            </li>
            <? } ?>
          </ul>
        </li>
        <? } ?>
      </ul>
    </div>
    <div class="classis-view-center">
      <div class="d-flex bg-fifth mb-2">
        <a href="/livesports" class="d-flex align-items-center bg-main text-primary text-small py-2 pl-2 pr-3"><i class="icon-radio-checked1 mr-2"></i>Canlı</a>
        <a href="/sportsbook" class="d-flex align-items-center text-light text-small py-2 pl-2 pr-3"><i class="icon-earth mr-2"></i>Maç Öncesi</a>
      </div>
      <!-- Sports -->
      <div class="sports-accordion active">
        <div class="sports-accordion-header">
          <i class="icon-football-ball-VSSoccer text-secondary mr-2"></i>
          <strong>Futbol</strong>
        </div>
        <div class="sports-accordion-content">
          <div class="sports-sub-accordion active">
            <!-- <div class="sports-sub-accordion-header">
              <strong>Rusya</strong>
            </div> -->
            <div class="sports-sub-accordion-content">
              <!-- Match Item Start -->
              <? foreach($live as $ev){ if($ev['sid']!=1) continue; ?>
              <div class="match-item"  enames="<?=$ev['home'].'|'.$ev['away'].'|'.$ev['time']['minute']."'"?>"b>
                <ul class="bbd">
                  <li>
                    <div class="match-item-team" data-score="<?=$ev['score']['home']?>"><?=$ev['home']?></div>
                    <div class="match-item-team" data-score="<?=$ev['score']['away']?>"><?=$ev['away']?></div>
                    <div class="match-item-info">
                      <small>
                        <span><?=$ev['time']['period']?></span>
                        <span><?=$ev['time']['minute']?></span>
                      </small>
                    </div>
                  </li>
                  <li>
                    <div class="match-item-odd-name">Maçın galibi</div>
                    <ul class="match-item-odd-list">
                      <li>
                        <button class="match-item-odd-button">
                          <span>W1</span>
                          <span><?=ramd(4)?></span>
                        </button>
                      </li>
                      <li>
                        <button class="match-item-odd-button">
                          <span>Beraberlik</span>
                          <span><?=ramd(4)?></span>
                        </button>
                      </li>
                      <li>
                        <button class="match-item-odd-button">
                          <span>W2</span>
                          <span><?=ramd(4)?></span>
                        </button>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="match-item-fav">
                      <i class="icon-star-big"></i>
                    </div>
                    <div class="match-item-more">
                      <a href="javascript:;">+<?=rand(40,120)?></a>
                    </div>
                  </li>
                </ul>
                <div class="bg-fifth p-1">
                  <span><?=$ev['score']['home'].' : '.$ev['score']['away']?>,  <?=$ev['time']['minute']?>`</span>
                </div>
              </div>
              <? } ?>
              <!-- Match Item End -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="classis-view-right">
      <div class="d-flex bg-sixth">
        <div class="flex-fill pr-2 br-divider">
          <select class="selectable w-100" name="theme">
            <option value="1">Klasik</option>
            <option value="2">Modern</option>
          </select>
        </div>
        <div class="flex-fill pr-2 br-divider">
          <select class="selectable w-100">
            <option value="1">Ondalık</option>
            <option value="2">Kesirli</option>
            <option value="3">Amerikan</option>
            <option value="4">HongKong</option>
            <option value="5">Malay</option>
            <option value="6">Indo</option>
          </select>
        </div>
        <div class="d-flex align-items-center">
          <a href="#" class="d-flex text-light px-1">
            <i class="icon-resize-two"></i>
          </a>
        </div>
      </div>
      <!-- Coupon -->
      <?php include 'modules/coupon.php'; ?>
      <!-- Promotions -->
      <ul class="mt-2">
        <li class="mb-2">
          <a href="/promotions">
            <img src="/assets/images/promotions/1.png" class="w-100" alt="">
          </a>
        </li>
        <li class="mb-2">
          <a href="/promotions">
            <img src="/assets/images/promotions/2.png" class="w-100" alt="">
          </a>
        </li>
        <li class="mb-2">
          <a href="/promotions">
            <img src="/assets/images/promotions/3.png" class="w-100" alt="">
          </a>
        </li>
        <li class="mb-2">
          <a href="/promotions">
            <img src="/assets/images/promotions/4.png" class="w-100" alt="">
          </a>
        </li>
        <li>
          <a href="/promotions">
            <img src="/assets/images/promotions/5.png" class="w-100" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- Page Style -->
<style>
.footer,
.info-bar {
  display: none;
}
.page-wrapper {
  background-color: #0e151b;
}
</style>
<!-- Page JavaScript -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  $(".body-wrapper").addClass("body-wrapper-wide")
})
</script>
