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

<section class="blog-inside-wrapper">
  <div class="container">
    <div class="blog-inside">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        Blog
      </h2>

      <h3 data-animar><?=the_title()?></h3>

      <!-- <img src="<?=catch_that_image(0)?>" alt="<?=the_title()?>" /> -->

      <div class="blog-content">
        <?=the_content()?>
      </div>

      <div class="comentarios_blog">
        <div class="comentarios">
          <div class="fb-comments" data-colorscheme="light" data-href="<?php the_permalink(); ?>" data-num-posts="5"
            mobile="false"></div>
        </div>
      </div>
    </div>

    <? include 'barraBlog.php'; ?>
  </div>
</section>