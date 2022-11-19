<?php
$winner_list = [
  [
    "id" => "118574035",
    "title" => "WİLD WEST GOLD™",
    "cost" => "7 try",
    "image" => "94f88a9424e50ea00a69d5dd9ad9c9c4_casinoGameIcon2.jpg",
  ],
  [
    "id" => "238630468",
    "title" => "Crazy Time",
    "cost" => "220 try",
    "image" => "52c09592ed691e5874479e832754f819_casinoGameIcon2.jpg",
  ],
  [
    "id" => "284272506",
    "title" => "COURİER SWEEPER",
    "cost" => "44 try",
    "image" => "0f5bc52783d87fe6c6568788cfb08294_casinoGameIcon2.jpeg",
  ],
  [
    "id" => "139726192",
    "title" => "Three Cards",
    "cost" => "100 try",
    "image" => "525cf3a7b1312d3da337dcfff1879812_casinoGameIcon2.jpeg",
  ],
  [
    "id" => "163117577",
    "title" => "Casino Roulette",
    "cost" => "360 try",
    "image" => "d74d2467df5507ddfed39ac7f458b155_casinoGameIcon2.jpeg",
  ],
  [
    "id" => "139726192",
    "title" => "Three Cards",
    "cost" => "15 try",
    "image" => "525cf3a7b1312d3da337dcfff1879812_casinoGameIcon2.jpeg",
  ],
  [
    "id" => "284272506",
    "title" => "COURİER SWEEPER",
    "cost" => "44 try",
    "image" => "0f5bc52783d87fe6c6568788cfb08294_casinoGameIcon2.jpeg",
  ],
  [
    "id" => "295600447",
    "title" => "Crazy Time",
    "cost" => "30 try",
    "image" => "52c09592ed691e5874479e832754f819_casinoGameIcon2.jpg",
  ],
]
?>
<div class="panel">
  <div class="panel-header px-0">
    <ul class="tab-wrapper material-tab text-uppercase" style="--indicator-color: var(--gold);">
      <li class="tab-item material-tab-item active">
        <a href="javascript:;">
          <span>Son Kazananlar</span>
        </a>
      </li>
      <li class="tab-item material-tab-item">
        <a href="javascript:;">
          <span>En Çok Kazananlar</span>
        </a>
      </li>
    </ul>
  </div>
  <ul class="winners-list">
    <?php foreach ($winner_list as $value) { ?>
      <li class="winners-item">
        <div class="winners-item-icon">
          <img src="/assets/images/games/<?=$value['image']?>" alt="">
        </div>
        <div class="winners-item-info">
          <div>
            <span><?=$value['id']?></span>
            <p><?=$value['title']?></p>
          </div>
          <div>
            <span class="winners-item-cost"><?=$value['cost']?></span>
          </div>
        </div>
      </li>
    <? } ?>
  </ul>
</div>
