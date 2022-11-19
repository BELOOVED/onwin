
<?php function carousel($arr = []){ ?>
  <div class="carousel">
    <ul class="owl-carousel">
      <?php foreach ($arr as $value) { ?>
        <li class="carousel-item">
          <a href="<?=$value["url"]?>">
            <img src="<?=$value["image"]?>" alt="">
          </a>
        </li>
      <? } ?>
    </ul>
  </div>
<? } ?>
<!-- Module JavaScript -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(){
  $('.carousel > .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
  });
});
</script>
