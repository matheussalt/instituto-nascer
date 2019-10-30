<?php
/**
 * Template Name: partos
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

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_mildias@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_mildias@2x.webp');
  }
}
</style>

<section class="bebes-outside">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Bebês
    </h2>

    <h3 data-animar>CONHEÇA NOSSOS BEBÊS</h3>

    <div class="bebes-wrapper">
      <? query_posts( array( 'post_type' => 'bebes', 'posts_per_page' => '12', 'paged' => $paged ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'bebes_outside', get_post_format() ); ?>

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


<div class="relatos-outside">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Relatos de parto
    </h2>

    <h3 data-animar>VEJA OS RELATOS</h3>

    <div class="relatos-wrapper">
      <? query_posts( array( 'post_type' => 'relatos_de_parto', 'posts_per_page' => '12', 'paged' => $paged ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'relatos_outside', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <!--Paginacao -->
    <div class="paginas">
      <?php if(function_exists('wp_paginate')) { wp_paginate(); }
        else { twentythirteen_paging_nav(); } ?>
    </div>
  </div>
</div>

<?php get_footer();