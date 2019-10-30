<?php
/**
 * Template Name: galeria
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_galeria.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_galeria.webp');
}

.banner-interno {
  height: 240px;
  position: relative;
}

.banner-interno h1 {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.banner-interno h1 ion-icon {
  color: #fff;
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_galeria@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_galeria@2x.webp');
  }
}
</style>

<section class="galeria">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Fotos
    </h2>

    <h3 data-animar>CONHEÇA NOSSO ESPAÇO</h3>

    <div class="galeria-wrapper">
      <div class="galeria-left">
        <ion-icon name="arrow-dropleft"></ion-icon>
      </div>

      <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?=the_content()?>
      <?php endwhile; ?>
      <?php endif; ?>

      <div class="galeria-right">
        <ion-icon name="arrow-dropright"></ion-icon>
      </div>
    </div>
  </div>
</section>

<section class="videos">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Vídeos
    </h2>

    <h3 data-animar>CONHEÇA NOSSAS HISTÓRIAS</h3>

    <div class="video-wrapper">
    </div>
  </div>
</section>

<?php get_footer();