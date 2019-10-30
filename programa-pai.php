<?php
/**
 * Template Name: programa pai
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
        Programa Pai
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
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
    </div>
  </div>
</section>

<section class="mildias-content">
  <div class="container">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="menu-mildias">
      <button type="button" class="ativo">CUIDADO</button>
      <button type="button">PAI 1</button>
      <button type="button">PAI 2</button>
    </div>

    <div id="mildias-txt" class="ativo">
      <img src="<?=the_field('cuidado_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Programa Pai
        </h2>

        <?=the_field('cuidado')?>
      </div>
    </div>

    <div id="mildias-txt">
      <img src="<?=the_field('pai_1_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Programa Pai
        </h2>

        <?=the_field('pai_1')?>
      </div>
    </div>

    <div id="mildias-txt">
      <img src="<?=the_field('pai_2_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Programa Pai
        </h2>

        <?=the_field('pai_2')?>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();