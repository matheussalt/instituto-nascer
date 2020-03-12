<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.footer {
  padding: 0;
}

.footer .container,
.footer .map {
  display: none;
}

.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_contato.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_contato.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_contato@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_contato@2x.webp');
  }
}
</style>

<section class="contato">
  <div class="container">
    <div class="footer-instituto">
      <img src="<?=get_template_directory_URI()?>/img/rsc/logo_white.png" alt="Logotipo Instituto Nascer"
        class="logo-contato" data-animar />

      <div class="footer-hemmerson" data-animar>
        <p data-animar>
          Hemmerson H. Magioni <br />
          Diretor Técnico Médico <br />
          CRM-MG 34455
        </p>
      </div>
    </div>

    <div class="fale-conosco">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        FALE CONOSCO
      </h2>

      <ul>
        <li data-animar>
          <a href="tel:3132623538" target="_blank">
            <ion-icon name="call"></ion-icon>
            <p>(31) 3262-3538</p>
          </a>
        </li>

        <li data-animar>
          <a href="tel:3132623538" target="_blank">
            <ion-icon name="call"></ion-icon>
            <p>(31) 3262-3538</p>
          </a>
        </li>

        <li data-animar>
          <a href="mailto:contato@institutonascer.com.br" target="_blank">
            <ion-icon name="mail"></ion-icon>
            <p>contato@institutonascer.com.br</p>
          </a>
        </li>

        <li data-animar>
          <a href="https://google.maps" target="_blank">
            <ion-icon name="pin"></ion-icon>
            <p>Avenida Raja Gabaglia, 665, Cidade Jardim - Belo Horizonte</p>
          </a>
        </li>

        <li class="wpp-footer" data-animar>
          <a href="https://api.whatsapp.com/send?phone=+553131810823" target="_blank">
            <ion-icon name="logo-whatsapp"></ion-icon>
            <p>CONTATO VIA WHATSAPP</p>
          </a>
        </li>

        <li class="midias-footer" data-animar>
          <a href="https://instagram.com/" target="_blank">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
          <a href="https://facebook.com/" target="_blank">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="https://youtube.com/" target="_blank">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="map" data-animar>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.5924509596703!2d-43.95598618508532!3d-19.941571886597316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6977784d449a7%3A0x4f4b6a695541a96b!2sAv.%20Raja%20Gab%C3%A1glia%2C%20665%20-%20Cidade%20Jardim%2C%20Belo%20Horizonte%20-%20MG%2C%2030380-103!5e0!3m2!1spt-BR!2sbr!4v1568210606764!5m2!1spt-BR!2sbr"
      frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</section>

<section class="contato-form">
  <div class="container">
    <div class="tire-duvidas">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        FALE CONOSCO
      </h2>

      <? echo do_shortcode('[contact-form-7 id="29" title="Contact form 1"]'); ?>
    </div>
  </div>
</section>

<?php get_footer();