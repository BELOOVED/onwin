<?php
include 'modules/carousel-widget.php';
include 'modules/sports-game-carousel.php';

$upcoming = json_decode($betapi->getSource('/upcoming'), true);


$carousel = [
  [
    "image" => "/assets/images/carousel/main-1.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/main-2.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/main-3.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/main-4.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/main-5.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/main-6.jpg",
    "url" => "/promotions",
  ],
]
?>
<!-- Page Wrapper -->
<section class="page-wrapper">
  <!-- Slider & Banners -->
  <div class="pt-0">
    <?php carousel($carousel); ?>
  </div>
  <div class="pt-2-5 pb-2-5">
    <ul class="d-flex">
      <li class="pr-2-5" style="flex:1">
        <a href="/sportsbook">
          <img src="/assets/images/banners/main-1.gif" class="w-100" style="height:287px;" alt="">
        </a>
      </li>
      <li class="pr-2-5" style="flex:1">
        <a href="/sportsbook">
          <img src="/assets/images/banners/main-2.gif" class="w-100" style="height:287px;" alt="">
        </a>
      </li>
      <li class="pr-2-5" style="flex:1">
        <a href="/sportsbook">
          <img src="/assets/images/banners/main-3.gif" class="w-100" style="height:287px;" alt="">
        </a>
      </li>
      <li class="pr-2-5" style="flex:1">
        <a href="/sportsbook">
          <img src="/assets/images/banners/main-4.gif" class="w-100" style="height:287px;" alt="">
        </a>
      </li>
      <li style="flex:1">
        <a href="/sportsbook">
          <img src="/assets/images/banners/main-5.gif" class="w-100" style="height:287px;" alt="">
        </a>
      </li>
    </ul>
  </div>
  <!-- Hit Sports -->
  <div class="panel">
    <div class="panel-header">
      <h4 class="panel-title text-uppercase text-main">Popüler Bahisler</h4>
    </div>
    <div>
      <!-- Note: içindeki sports-game-widget elemanı loop olunmalı -->
      <?php sportsGameCarousel(3); ?>
    </div>
  </div>
  <!-- Upcoming Sports -->
  <div class="pt-2-5">
    <div class="row">
      <div class="col-sm-10 pr-1">
        <div class="panel">
          <div class="panel-header">
            <h4 class="panel-title text-uppercase">Yaklaşan Karşılaşmalar</h4>
          </div>
          <div class="panel-body">
            <div class="lmb-sport-wrapper">
              <div class="lmb-sport-tab">
                <ul class="tab-wrapper">
                  <li class="tab-item active">
                    <a href="javascript:;">
                      <i class="icon-football-ball-VSSoccer"></i>
                      <span>Futbol</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_basketball"></i>
                      <span>Basketbol</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_icehockey"></i>
                      <span>Buz hokeyi</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-vbet-sport-icons_tennis"></i>
                      <span>Tenis</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-vbet-sport-icons_volleyball"></i>
                      <span>Voleybol</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_beachvolleyball"></i>
                      <span>Plaj Voleybolu</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_cricket"></i>
                      <span>Kriket</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_tabletennis"></i>
                      <span>Masa Tenisi</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-Allsports_ultimatefighting"></i>
                      <span>MMA</span>
                    </a>
                  </li>
                  <li class="tab-item">
                    <a href="javascript:;">
                      <i class="icon-CyberFootball"></i>
                      <span>E-Futbol</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="lmb-sport-table">
                <table>
                  <thead>
                    <tr>
                      <th>Zaman</th>
                      <th class="text-secondary text-align-right">Takım 1</th>
                      <th class="text-secondary"></th>
                      <th class="text-secondary text-align-left">Takım 2</th>
                      <th class="text-secondary">1</th>
                      <th class="text-secondary">x</th>
                      <th class="text-secondary">2</th>
                      <th class="text-secondary"></th>
                    </tr>
                  </thead>

                  <tbody>
                    <? krsort($upcoming);
                    foreach (array_values($upcoming) as $i => $ev) {
                      if ($i > 10) break; ?>
                      <tr>
                        <td><?= date('H:i', $ev['starttime']) ?></td>
                        <td class="text-align-right">
                          <div class="lmb-sport-team"><?= $ev['home'] ?></div>
                        </td>
                        <td>
                          <span class="text-uppercase px-1">vs</span>
                        </td>
                        <td class="text-align-left">
                          <div class="lmb-sport-team"><?= $ev['away'] ?></div>
                        </td>
                        <td>
                          <button onclick="this.classList.toggle('selected')"><?= ramd(4) ?></button>
                        </td>
                        <td>
                          <button onclick="this.classList.toggle('selected')"><?= ramd(4) ?></button>
                        </td>
                        <td>
                          <button onclick="this.classList.toggle('selected')"><?= ramd(4) ?></button>
                        </td>
                        <td>
                          <button class="text-light font-400">+<?= rand(10, 60) ?></button>
                        </td>
                      </tr>
                    <? } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2 pl-1">
        <img src="/assets/images/banners/main-6.png" class="w-100 h-100" alt="">
      </div>
    </div>
  </div>
</section>
<!-- Page Styles -->
<style>
  body {
    background-image: url('/assets/images/bg/home-bg.png');
  }
</style>