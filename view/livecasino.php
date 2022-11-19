<?php
include 'modules/carousel-widget.php';
include 'modules/game-card-widget.php';
$carousel = [
  [
    "image" => "/assets/images/carousel/lc-1.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/lc-2.jpg",
    "url" => "/promotions",
  ],
  [
    "image" => "/assets/images/carousel/lc-3.jpg",
    "url" => "/promotions",
  ],
];
$path = "assets/json/livecasino.json";
$file = fopen($path, "r");
$games_list = json_decode(fread($file, filesize($path)), true);
fclose($games_list);
?>
<section class="page-wrapper pb-0 mb-4">
  <?php carousel($carousel); ?>
  <ul class="button-tab shuffle-nav py-3 px-3">
    <li class="button-tab-item active" data-target="playtech">
      <button class="btn text-medium">Playtech</button>
    </li>
    <li class="button-tab-item" data-target="betconstruct">
      <button class="btn text-medium">Betconstruct</button>
    </li>
    <li class="button-tab-item" data-target="vision-casino">
      <button class="btn text-medium">Vision Casino</button>
    </li>
    <li class="button-tab-item" data-target="lucky-streak">
      <button class="btn text-medium">Lucky Streak</button>
    </li>
    <li class="button-tab-item" data-target="evolution">
      <button class="btn text-medium">Evolution</button>
    </li>
    <li class="button-tab-item" data-target="fashion-tv">
      <button class="btn text-medium">Fashion TV</button>
    </li>
    <li class="button-tab-item" data-target="ezugi">
      <button class="btn text-medium">Ezugi</button>
    </li>
    <li class="button-tab-item" data-target="xpro">
      <button class="btn text-medium">XPRO Gaming</button>
    </li>
    <li class="button-tab-item" data-target="portomaso">
      <button class="btn text-medium">Portomaso</button>
    </li>
    <li class="button-tab-item" data-target="pragmatic">
      <button class="btn text-medium">Pragmatic Play</button>
    </li>
    <li class="button-tab-item" data-target="vivo">
      <button class="btn text-medium">Vivo Gaming</button>
    </li>
    <li class="button-tab-item" data-target="fazi">
      <button class="btn text-medium">Fazi</button>
    </li>
  </ul>
</section>
<div class="row shuffle-content">
  <?php foreach ($games_list as $value) { ?>
    <div class="col-sm-3 mb-4">
      <?php gameCard($value, true); ?>
    </div>
  <? } ?>
</div>
<!-- Page JavaScript -->
<style>
  body {
    background-image: url("/assets/images/bg/lc-bg.jpeg");
  }
</style>