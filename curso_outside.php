<div class="home-cursos-item" data-animar>
  <div class="home-cursos-img">
    <ion-icon name="bookmark"></ion-icon>
    <img src="<?=catch_that_image(1)?>" />
  </div>
  <div class="home-cursos-txt">
    <h4><?=the_title()?></h4>
    <p><?=custom_excerpt2(210)?></p>
    <div class="price">
      <div><span><?=the_field('tipo')?></span><strong><?=the_field('valor')?></strong></div>
      <a href="<?=the_permalink()?>" class="cta" data-animar>saiba mais</a>
    </div>
  </div>
</div>