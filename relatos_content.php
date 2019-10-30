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

<section class="relatos-inside">
  <div class="container">

    <div class="relatos-content">
      <img class="relato-img" src="<?=catch_that_image(0)?>" alt="<?=the_title()?>" />

      <div>
        <?=the_content()?>
      </div>
    </div>

  </div>
</section>