<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
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
      <div class="blog-outside-wrapper">
        <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '9', 'cat' => '1',  'paged' => $paged ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <!--Paginacao -->
      <div class="paginas">
        <?php if(function_exists('wp_paginate')) { wp_paginate(); }
        else { twentythirteen_paging_nav(); } ?>
      </div>
    </div>

    <? include 'barraBlog.php'; ?>
  </div>
</section>

<?php get_footer();