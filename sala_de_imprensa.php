<?php
/**
 * Template Name: sala de imprensa
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

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_galeria@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_galeria@2x.webp');
  }
}
</style>

<section class="imprensa">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Na mídia
    </h2>

    <h3 data-animar>Acompanhe o Instituto Nascer na Mídia</h3>

    <div class="imprensa-wrapper">
      <? query_posts( array( 'post_type' => 'sala_de_imprensa', 'category_name'  => 'na-midia', 'posts_per_page' => '9',  'paged' => $paged ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'imprensa_outside', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <!--Paginacao -->
    <div class="paginas">
      <?php if(function_exists('wp_paginate')) { wp_paginate(); }
        else { twentythirteen_paging_nav(); } ?>
    </div>
  </div>
</section>

<section class="imprensa">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Na Tv
    </h2>

    <h3 data-animar>Acompanhe o Instituto Nascer na Mídia</h3>

    <div class="imprensa-wrapper">
      <? query_posts( array( 'post_type' => 'sala_de_imprensa', 'category_name'  => 'na-tv', 'posts_per_page' => '9',  'paged' => $paged ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'imprensa_outside', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <!--Paginacao -->
    <div class="paginas">
      <?php if(function_exists('wp_paginate')) { wp_paginate(); }
        else { twentythirteen_paging_nav(); } ?>
    </div>
  </div>
</section>

<?php get_footer();