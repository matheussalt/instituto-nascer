<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="banner" data-animar>
  <div class="banner-carrossel">
    <picture>
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/banner.webp"
        type="image/webp" />
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/banner.jpg"
        type="image/jpg" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/banner@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg" type="image/jpg" alt="Instituto Nascer"
        class="ativo" />
    </picture>

    <picture>
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto7.webp"
        type="image/webp" />
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto7.jpg"
        type="image/jpg" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto7@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto7@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/instituto7@2x.jpg" type="image/jpg" alt="Instituto Nascer" />
    </picture>

    <picture>
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto2.webp"
        type="image/webp" />
      <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto2.jpg"
        type="image/jpg" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto2@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto2@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/instituto2@2x.jpg" type="image/jpg" alt="Instituto Nascer" />
    </picture>
  </div>

  <button class="banner-control-left">
    <ion-icon name="arrow-dropleft"></ion-icon>
  </button>

  <button class="banner-control-right">
    <ion-icon name="arrow-dropright"></ion-icon>
  </button>

  <div class="banner-img-selector">
    <div class="img-selector">
      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/banner.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/banner.jpg"
          type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/banner.jpg" type="image/jpg" alt="Instituto Nascer" />
      </picture>
    </div>

    <div class="img-selector">
      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto7.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto7.jpg"
          type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/instituto7.jpg" type="image/jpg" alt="Instituto Nascer" />
      </picture>
    </div>

    <div class="img-selector">
      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto2.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto2.jpg"
          type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/instituto2.jpg" type="image/jpg" alt="Instituto Nascer" />
      </picture>
    </div>
  </div>

  <div class="phrase-banner">
    <h1>Instituto Nascer</h1>
    <strong>Um novo jeito de cuidar</strong>
  </div>
</section>

<section class="home-servicos">
  <div class="container">
    <h2 data-animar>Conheça nossos serviços</h2>

    <div class="home-servicos-list">
      <div class="servicos-left">
        <ion-icon name="arrow-dropleft"></ion-icon>
      </div>

      <ul>
        <?php $mypages = get_pages( array( 'child_of' => 11, 'sort_order' => 'asc', 'number' => 13 ) ); 
        foreach( $mypages as $page ) { ?>
        <li>
          <a href="<?=get_page_link( $page->ID );?>" data-animar>
            <?php if (has_post_thumbnail( $page->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>
            <img src="<?=$image[0]?>" alt="Obstetrícia" />
            <?php endif; ?>
            <h3><?=$page->post_title;?></h3>
          </a>
        </li>
        <? } ?>
      </ul>

      <div class="servicos-right">
        <ion-icon name="arrow-dropright"></ion-icon>
      </div>
    </div>

    <a href="<?=site_url()?>/servicos" class="cta" data-animar>ver mais</a>
  </div>
</section>

<section class="home-sobre">
  <div class="container">
    <div class="home-sobre-txt">
      <h2 data-animar class="title">
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        SOBRE
      </h2>
      <h3 data-animar>INSTITUTO NASCER</h3>
      <p data-animar>Clínica de abordagem multidisciplinar, o Instituto Nascer presta assistência à saúde
        materno-infantil.
        Acompanhamos a gestação, o parto e o pós-parto, com foco em práticas saudáveis para toda a família. Nossos
        principais valores são atendimento humanizado e personalizado, excelência técnica e medicina baseada em
        evidências científicas.</p>
      <a href="<?=site_url()?>/quem-somos" class="cta" data-animar>ver mais</a>
    </div>

    <div class="home-sobre-img">
      <div class="home-sobre-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto1.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto1.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto1@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto1@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto1@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="home-sobre-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto2.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto2.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto2@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto2@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto2@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="home-sobre-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto3.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto3.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto3@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto3@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto3@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="home-sobre-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto4.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto4.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto4@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto4@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto4@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>
    </div>
  </div>
</section>

<section class="home-numeros">
  <div class="container">
    <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199" data-animar>
      <use xlink:href="#logo-simbolo"></use>
    </svg>

    <h2 data-animar>NÚMEROS DE BÊBES BEM NASCIDOS</h2>

    <h3 data-animar>+950</h3>
  </div>
</section>

<section class="home-historias parallax">
  <div class="container">
    <div class="home-historias-wrapper parallax-text">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        RELATOS DE PARTO
      </h2>
      <h3 data-animar>NOSSOS BEBÊS E SUAS HISTÓRIAS</h3>
      <a data-animar href="<?=site_url()?>/nossos-bebes-e-suas-historias" class="cta">VER MAIS</a>
    </div>
  </div>
</section>

<section class="home-cursos">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Cursos
    </h2>

    <div class="home-cursos-wrapper">
      <div class="cursos-left">
        <ion-icon name="arrow-dropleft"></ion-icon>
      </div>

      <div class="home-cursos-inside">
        <? query_posts( array( 'post_type' => 'curso', 'posts_per_page' => '6' ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'curso_outside', get_post_format() ); ?>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="cursos-right">
        <ion-icon name="arrow-dropright"></ion-icon>
      </div>
    </div>

    <a href="<?=site_url()?>/cursos" class="cta">ver mais</a>
  </div>
</section>

<section class="home-imprensa parallax">
  <div class="container">
    <div class="home-imprensa-wrapper parallax-text">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        INSTITUTO NASCER NA MÍDIA
      </h2>
      <h3 data-animar>SALA DE IMPRENSA</h3>
      <a href="<?=site_url()?>/sala-de-imprensa/" class="cta" data-animar>VER MAIS</a>
    </div>
  </div>
</section>

<div class="home-blog">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      BLOG
    </h2>

    <div class="home-blog-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <a href="<?=the_permalink()?>" class="home-blog-item" data-animar>
        <div class="home-blog-img">
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        </div>
        <div class="home-blog-txt">
          <h4><?=the_title()?></h4>
          <p><?=custom_excerpt2(100)?></p>
        </div>
      </a>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <a href="<?=site_url()?>/blog" class="cta" data-animar>ver mais</a>
  </div>
</div>

<section class="home-mildias parallax">
  <div class="container">
    <div class="home-mildias-wrapper parallax-text">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        CUIDADO E AMOR NOS PRIMEIROS DIAS
      </h2>
      <h3 data-animar>PROGRAMA MIL DIAS</h3>
      <a href="<?=site_url()?>/programa-mil-dias/" class="cta" data-animar>VER MAIS</a>
    </div>
  </div>
</section>

<section class="home-newsletter">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      <span>INSCREVA-SE PARA RECEBER NOVIDADES</span>
    </h2>

    <? echo do_shortcode('[contact-form-7 id="30" title="Newsletter"]'); ?>
  </div>
</section>

<section class="home-instagram">
  <?php
    $userid = "1354913525";
    $accessToken = "1354913525.1677ed0.0ba5dcf3d30c4b5783bbe83a26f9e233";
  
    function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch); 
      return $result;
    }
  
    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
    $result = json_decode($result);
    
    $xx = "1"; foreach ($result->data as $post): if ($xx < 7) { ?>
  <a href="https://instagram.com/institutonascer" data-animar target="_blank"><img
      src="<?= $post->images->standard_resolution->url ?>" alt="Insta Img"></a>
  <? $xx++; } endforeach ?>

</section>

<?php get_footer();