<?php
/**
 * Template Name: mil dias
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
        Mil dias
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

      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/servicos.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/servicos.jpg"
          type="image/jpg" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/servicos@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/servicos@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/servicos@2x.jpg" type="image/jpg" alt="Programa Mil Dias" />
      </picture>
    </div>
  </div>
</section>

<section class="calculo">
  <div class="container">
    <div class="calculo-item">
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      <h3>Gravidez</h3>
      <strong>270 dias</strong>
    </div>

    <span> + </span>

    <div class="calculo-item">
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      <h3>0 a 12 meses</h3>
      <strong>365 dias</strong>
    </div>

    <span> + </span>

    <div class="calculo-item">
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      <h3>1 a 2 anos</h3>
      <strong>365 dias</strong>
    </div>

    <span> = </span>

    <div class="calculo-item">
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      <h3>Mil dias</h3>
    </div>
  </div>
</section>

<section class="mildias-content">
  <div class="container">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="menu-mildias">
      <button type="button" class="ativo">GRAVIDEZ</button>
      <button type="button">PRIMEIRO ANO</button>
      <button type="button">SEGUNDO ANO</button>
      <button type="button">INVESTIMENTO</button>
    </div>

    <div id="mildias-txt" class="ativo">
      <img src="<?=the_field('gravidez_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Mil Dias
        </h2>

        <?=the_field('gravidez')?>
      </div>
    </div>

    <div id="mildias-txt">
      <img src="<?=the_field('primeiro_ano_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Mil Dias
        </h2>

        <?=the_field('primeiro_ano')?>
      </div>
    </div>

    <div id="mildias-txt">
      <img src="<?=the_field('segundo_ano_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Mil Dias
        </h2>

        <?=the_field('segundo_ano')?>
      </div>
    </div>

    <div id="mildias-txt">
      <img src="<?=the_field('investimento_img')?>" alt="<?=the_title()?>" />

      <div>
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          Mil Dias
        </h2>

        <?=the_field('investimento')?>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();