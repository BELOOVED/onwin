<?php function gameBox($game = []){ ?>
  <div class="game-box">
    <a href="javascript:;" onclick="loginoralert()" class="game-box-content">
      <div class="game-box-image">
        <img src="<?=$game['image']?>" alt="">
      </div>
      <div class="game-box-overlay">
        <div class="game-box-info">
          <strong><?=$game['title']?></strong>
        </div>
        <div class="game-box-buttons">
          <ul class="button-tab justify-content-start">
            <li class="button-tab-item">
              <button class="btn btn-success-invert">Şimdi Oyna</button>
            </li>
            <li class="button-tab-item">
              <button class="btn btn-success-invert">Eğlence için oyna</button>
            </li>
          </ul>
          <button class="btn btn-success-invert btn-icon">
            <i class="icon-eye1"></i>
          </button>
        </div>
      </div>
    </a>
  </div>
<? } ?>
