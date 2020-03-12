<?php
/**
 * Template Name: checkup
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_mildias.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_mildias.webp');
}

.banner-interno {
  height: 240px;
}

.banner-interno .container {
  flex-direction: column;
  align-items: center;
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_mildias@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_mildias@2x.webp');
  }

  .banner-interno {
    height: 380px;
  }
}
</style>

<section class="programa">
  <div class="container">
    <div class="programa-txt">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        <?=the_title()?>
      </h2>

      <h3 data-animar>SOBRE O PROGRAMA</h3>

      <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?=the_content()?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="programa-img">
      <img src="<?=catch_that_image(0)?>" alt="<?=the_title()?>" />
    </div>
  </div>
</section>

<?php get_footer();