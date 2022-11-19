<?php function gameCard($game = [], $mini_card = false){ ?>
  <div class="game-card">
    <div class="game-card">
      <div class="game-card-content">
        <div class="game-card-image">
          <img src="<?=$game['image']?>" alt="">
        </div>
        <div class="game-card-overlay">
          <div class="game-card-title"><?=$game['title']?></div>
          <div class="game-card-buttons">
            <a href="javascript:;" onclick="loginoralert()" class="btn btn-primary">Şimdi Oyna</a>
            <a href="javascript:;" onclick="loginoralert()" class="btn btn-secondary">Eğlence için oyna</a>
          </div>
        </div>
      </div>
      <?php if (!$mini_card) { ?>
        <div class="game-card-info">
          <strong><?=$game['title']?></strong>
          <a href="javascript:;">
            <i class="icon-star-big"></i>
          </a>
        </div>
      <? } ?>
    </div>
  </div>
<? } ?>
