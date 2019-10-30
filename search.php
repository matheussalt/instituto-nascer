<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_blog.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_blog.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_blog@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_blog@2x.webp');
  }
}
</style>

<section class="blog-section">
  <div class="container">
    <div class="blog-outside">
      <?php if ( have_posts() ) : ?>
      <h2 data-animar><?php printf( __( 'Resultados da busca por: %s', 'twentythirteen' ), get_search_query() ); ?></h2>

      <div class="blog-outside-wrapper">
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

        <div class="paginas">
          <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { twentythirteen_paging_nav(); } ?>
        </div>
      </div>

      <?php else : ?>
      <h2 data-animar>Nada foi encontrado...</h2>
      <?php endif; ?>
    </div>

    <? include 'barraBlog.php'; ?>
  </div>
</section>

<?php get_footer(); ?>