<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto:400,400i,700&display=swap"
    rel="stylesheet">


  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/rsc/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
  <?php include "funcoesSalt.php"; ?>

  <style>
  /* .no-webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner.jpg');
  }

  .webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp');
  } */

  .no-webp .home-historias {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-bebe.jpg');
  }

  .webp .home-historias {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-bebe.webp');
  }

  .no-webp .home-imprensa {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-imprensa.jpg');
  }

  .webp .home-imprensa {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-imprensa.webp');
  }

  .no-webp .home-mildias {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-mil.jpg');
  }

  .webp .home-mildias {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-mil.webp');
  }

  @media screen and (min-width: 650px) {
    /* .no-webp .banner {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg');
    }

    .webp .banner {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp');
    } */

    .no-webp .home-historias {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-bebe@2x.jpg');
    }

    .webp .home-historias {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-bebe@2x.webp');
    }

    .no-webp .home-imprensa {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-imprensa@2x.jpg');
    }

    .webp .home-imprensa {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-imprensa@2x.webp');
    }

    .no-webp .home-mildias {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax-mil@2x.jpg');
    }

    .webp .home-mildias {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax-mil@2x.webp');
    }
  }
  </style>

</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header" data-animar>
    <div class="header-wrapper">
      <div class="header-left">
        <a href="<?=site_url()?>"><img src="<?=get_template_directory_URI()?>/img/rsc/logo.png"
            alt="Logotipo Instituto Nascer" /></a>

        <div class="search-header">
          <form action="<?=site_url()?>" method="get">
            <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
            <button type="submit">
              <ion-icon name="search"></ion-icon>
            </button>
          </form>
        </div>
      </div>

      <div class="header-right">
        <a href="tel:3132623538" target="_blank">
          <ion-icon name="call"></ion-icon>
          <span>(31) 3262-3538</span>
        </a>

        <a href="https://wa.me/+553992790010" target="_blank">
          <ion-icon name="logo-whatsapp"></ion-icon>
          <span>(31) 9 9279-0010</span>
        </a>

        <ul class="midias-header">
          <li>
            <a href="https://instagram.com/" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://facebook.com/" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtube.com/" target="_blank">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>

      <div class="menu-hamb">
        <ion-icon name="menu"></ion-icon>
      </div>
    </div>

    <nav class="menu">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
  </header>

  <? if (!is_front_page()) { ?>
  <section class="banner-interno" data-animar>
    <div class="container">
      <? if (is_page(20)) { ?>
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        CUIDADO E AMOR NOS PRIMEIROS DIAS
      </h2>
      <? } ?>

      <h1>
        <?=the_title()?>
        <?if(is_page(17)){?>
        <ion-icon name="logo-youtube"></ion-icon>
        <?}?>
      </h1>
    </div>

    <?if(is_page(17)){?>
    <a href="https://youtu.be/" class="yt-acc">
      <ion-icon name="logo-youtube"></ion-icon> Youtube/institutonascer
    </a>
    <?}?>
  </section>
  <? } ?>