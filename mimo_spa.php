<?php
/**
 * Template Name: mimo spa
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_spa.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_spa.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_spa@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_spa@2x.webp');
  }
}
</style>

<section class="spa">
  <div class="container">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <img src="<?=catch_that_image(0)?>" alt="<?=the_title()?>" />
    <?=the_content()?>
    <div class="coluna">
      <div>
        <?=the_field('coluna_1')?>
      </div>

      <div>
        <?=the_field('coluna_2')?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer();