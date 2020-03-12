<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <img src="<?=get_template_directory_URI()?>/img/rsc/logo_white.png" alt="Logotipo Instituto Nascer"
      class="logo-footer" data-animar />

    <div class="footer-wrapper">
      <div class="footer-instituto">
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          O INSTITUTO
        </h2>

        <p data-animar>O Instituto Nascer é uma equipe multidisciplinar que presta assistência à saúde materno-infantil.
          Tem como
          valores o atendimento humanizado e personalizado, excelência técnica e medicina baseada em evidências
          científicas.</p>

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

          <!-- <li data-animar>
            <a href="tel:3132623538" target="_blank">
              <ion-icon name="call"></ion-icon>
              <p>(31) 3262-3538</p>
            </a>
          </li> -->

          <li data-animar>
            <a href="mailto:contato@institutonascer.com.br" target="_blank">
              <ion-icon name="mail"></ion-icon>
              <p>contato@institutonascer.com.br</p>
            </a>
          </li>

          <li data-animar>
            <a href="https://goo.gl/maps/XQoWSuEqkBdVQvgG7" target="_blank">
              <ion-icon name="pin"></ion-icon>
              <p>Avenida Raja Gabaglia, 665, Cidade Jardim - Belo Horizonte</p>
            </a>
          </li>

          <li class="wpp-footer" data-animar>
            <a href="https://api.whatsapp.com/send?phone=+553131810823" target="_blank">
              <ion-icon name="logo-whatsapp"></ion-icon>
              <p>Agendamento, consultas e ultrassom via whatsapp</p>
            </a>
          </li>

          <li class="midias-footer" data-animar>
            <a href="https://instagram.com/institutonascer" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://facebook.com/institutonascer" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://youtube.com/channel/UC8pgjcVQowTYNmrkQA7owUg" target="_blank">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>

      <div class="tire-duvidas">
        <h2 class="title" data-animar>
          <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
            <use xlink:href="#logo-simbolo"></use>
          </svg>
          FALE CONOSCO
        </h2>

        <?php echo do_shortcode('[contact-form-7 id="29" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>

  <div class="map" data-animar>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.5924509596703!2d-43.95598618508532!3d-19.941571886597316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6977784d449a7%3A0x4f4b6a695541a96b!2sAv.%20Raja%20Gab%C3%A1glia%2C%20665%20-%20Cidade%20Jardim%2C%20Belo%20Horizonte%20-%20MG%2C%2030380-103!5e0!3m2!1spt-BR!2sbr!4v1568210606764!5m2!1spt-BR!2sbr"
      frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>

  <div class="rodape">
    <p>Todos os direitos reservados ao Instituto Nascer. Desenvolvido por <a href="https://agenciasalt.com.br"
        target="_blank">Agência Salt.</a></p>
    <a href="https://agenciasalt.com.br/" target="_blank">
      <img src="<?=get_template_directory_URI()?>/img/rsc/salt.png" alt="Agência Salt" />
    </a>
  </div>
</footer>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>

<?php wp_footer(); ?>

<div id="popup-galeria"></div>

<a class="wpp-dot" href="https://api.whatsapp.com/send?phone=+553131810823" target="_blank">
  <ion-icon name="logo-whatsapp"></ion-icon>
</a>

<div style="display: none">
  <svg xmlns="http://www.w3.org/2000/svg" width="54.779" height="61.199" viewBox="0 0 54.779 61.199" id="logo-simbolo">
    <path
      d="M549.662,341.4a25.463,25.463,0,0,0-12.886-9.8c5.061-2.305,8.263-6.877,8.263-11.951,0-7.425-6.87-13.465-15.311-13.465s-15.312,6.04-15.312,13.465c0,5.118,3.242,9.708,8.366,12a25.491,25.491,0,0,0-12.75,9.754c-6.9,9.621-9.057,16.444-6.59,20.863,1.924,3.446,6.475,5.12,13.913,5.12,1.429,0,2.94-.059,4.752-.186a36.259,36.259,0,0,0,7.74-1.319,36.273,36.273,0,0,0,7.742,1.319c1.811.127,3.321.186,4.75.186,7.438,0,11.988-1.674,13.912-5.12C558.718,357.845,556.562,351.02,549.662,341.4Zm-28.7,11.55a5.307,5.307,0,0,1,3.285-2.189,3.256,3.256,0,0,1,.735-.079,3.762,3.762,0,0,1,3.627,2.742l.059.135a1.293,1.293,0,0,0,1.22.732,1.275,1.275,0,0,0,1.141-.766l.058-.134a3.742,3.742,0,0,1,3.614-2.71,3.289,3.289,0,0,1,.739.079,5.31,5.31,0,0,1,3.282,2.188,2.8,2.8,0,0,1,.368,2.206c-.942,3.87-5.51,6.494-9.248,8.028-3.737-1.534-8.306-4.158-9.249-8.028A2.809,2.809,0,0,1,520.966,352.95ZM541.32,355.7a5.1,5.1,0,0,0-.645-3.955,7.565,7.565,0,0,0-4.72-3.211,5.454,5.454,0,0,0-1.243-.141,6.066,6.066,0,0,0-4.867,2.477,6.066,6.066,0,0,0-4.866-2.477,5.533,5.533,0,0,0-1.243.139,7.559,7.559,0,0,0-4.72,3.215,5.091,5.091,0,0,0-.646,3.953c.8,3.3,3.686,6.257,8.364,8.588a38.317,38.317,0,0,1-4.79.628c-9.333.659-14.72-.576-16.5-3.766-1.963-3.515.208-9.71,6.451-18.408,4.138-5.771,9.749-9.235,15.7-9.758a16.766,16.766,0,0,0,4.268-.008c6.1.479,11.759,3.948,15.935,9.766,6.241,8.7,8.411,14.893,6.45,18.408-1.782,3.19-7.168,4.424-16.5,3.766a38.3,38.3,0,0,1-4.79-.628C537.633,361.955,540.515,359,541.32,355.7Zm-11.592-46.856c6.976,0,12.651,4.848,12.651,10.806s-5.675,10.807-12.651,10.807-12.651-4.849-12.651-10.807S522.752,308.843,529.728,308.843Z"
      transform="translate(-502.457 -306.184)" />
  </svg>
</div>
</body>

</html>