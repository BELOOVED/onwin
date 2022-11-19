<?php
include 'modules/game-box-widget.php';
$game_list = [
  [
    "image" => "/assets/images/games/hilo.jpg",
    "title" => "Hi Lo",
  ],
  [
    "image" => "/assets/images/games/talisman.png",
    "title" => "Talisman",
  ],
  [
    "image" => "/assets/images/games/blast.png",
    "title" => "Blast",
  ],
  [
    "image" => "/assets/images/games/keno.png",
    "title" => "Keno",
  ],
  [
    "image" => "/assets/images/games/mines.png",
    "title" => "Mines",
  ],
  [
    "image" => "/assets/images/games/plinko.png",
    "title" => "Plinko",
  ],
  [
    "image" => "/assets/images/games/zeppelin.jpg",
    "title" => "Zeppelin",
  ],
  [
    "image" => "/assets/images/games/big-hilo.png",
    "title" => "Big Hilo",
  ],
  [
    "image" => "/assets/images/games/zonk.png",
    "title" => "Zonk",
  ],
];
?>
<section class="page-wrapper">
  <div class="py-5">
    <div class="container">
      <div class="row mx-n1">
        <?php foreach ($game_list as $value) { ?>
          <div class="col-sm-4 px-1 pb-2">
            <?php gameBox($value); ?>
          </div>
        <? } ?>
      </div>
    </div>
  </div>
</section>
<!-- Page Style -->
<style>
body {
  background-color: var(--forth);
}
.page-wrapper .container {
  max-width: 1164px;
}
.footer {
  margin-top: 0;
}
</style>
<!-- Page JavaScript -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  $(".body-wrapper").addClass("body-wrapper-wide");
})
</script>
