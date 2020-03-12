<?php
/**
 * Template Name: quem somos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_sobre.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_sobre.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_sobre@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_sobre@2x.webp');
  }
}
</style>

<section class="sobre-instituto">
  <div class="container">
    <div class="sobre-instituto-txt">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        SOBRE
      </h2>

      <h3 data-animar>INSTITUTO NASCER</h3>

      <p data-animar>Em 2003, inspirados pelo trabalho e pelos sonhos do médico Hemmerson Magioni, um grupo de obstetras
        começou a
        se reunir periodicamente e ansiar um modelo de atenção às mulheres da rede privada. Esses profissionais
        idealizavam um atendimento integrado à saúde da gestante, que oferecesse cuidados médicos baseados em evidências
        científicas. Surgiu daí o “Projeto Nascer”: uma clínica obstétrica humanizada onde a mulher poderia se sentir
        tão tranquila e à vontade como se ela estivesse em sua própria casa, mas contando com toda a segurança e
        estrutura de um hospital.</p>
    </div>

    <div class="sobre-instituto-img" data-animar>
      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/dr_hemmerson.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/dr_hemmerson.jpg"
          type="image/jpg" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/dr_hemmerson@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/dr_hemmerson@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/dr_hemmerson@2x.jpg" type="image/jpg"
          alt="Instituto Nascer" />
      </picture>
    </div>
  </div>
</section>

<section class="sobre-carrossel">
  <div class="container">
    <div class="sobre-carrossel-wrapper">
      <div class="sobre-carrossel-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto5.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto5.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto5@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto5@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto5@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="sobre-carrossel-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto6.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto6.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto6@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto6@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto6@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="sobre-carrossel-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto7.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto7.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto7@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto7@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto7@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>

      <div class="sobre-carrossel-item" data-animar>
        <picture>
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/instituto8.webp"
            type="image/webp" />
          <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/instituto8.jpg"
            type="image/jpg" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/instituto8@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/instituto8@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/instituto8@2x.jpg" type="image/jpg" alt="Instituto Nascer"
            data-foto />
        </picture>
      </div>
    </div>
  </div>
</section>

<section class="sobre-continuacao">
  <div class="container">
    <div>
      <p data-animar>E assim foi até 2009, quando um grupo de médicos que compartilhavam a mesma visão e os mesmos
        valores em
        relação à obstetrícia se reuniram para prestar assistência ao Projeto. Com a evolução e o aperfeiçoamento do
        programa, foi criado o Núcleo Bem-Nascer, co-fundado pelo Dr. Hemmerson Magioni, porém nessa época, cada médico
        ainda atendia em seu próprio espaço. Em janeiro de 2013, o sonho de ter uma clínica integrada e especializada
        nos cuidados à mulher e à criança se concretizou, e assim surgiu o Instituto Nascer.</p>

      <p data-animar>Nosso foco: assistência obstétrica humanizada, incentivo ao parto normal, além do cuidado integral
        e
        personalizado à gestante. Buscamos preparar não só a mulher, mas o casal para a vivência desse momento especial
        que é a gravidez e a chegada de um novo membro na família. Para um atendimento completo, o Instituto
        disponibiliza ainda serviço de ultrassonografia e de coleta de exames laboratoriais.</p>

      <p data-animar>Pensando nos cuidados corporais necessários na gestação o Instituto conta ainda com o Mimo Spa: um
        centro de
        cuidados corporais com procedimentos de hidroterapia, massoterapia e escalda-pés.</p>
    </div>

    <div>
      <p data-animar>Fecham nosso ciclo de cuidados cursos e oficinas de educação perinatal, aleitamento materno, e
        preparo para o
        parto, direcionados às grávidas e suas famílias.</p>

      <p data-animar>Além disso, as crianças trazidas ao mundo pelo Instituto Nascer são acolhidas no Espaço Kids por
        uma equipe de
        pediatras de primeira linha. </p>

      <p data-animar>O Instituto está situado em um novo espaço, mais amplo e confortável. Conta com infraestrutura
        completa,
        moderna e avançada, tudo pensado com muito carinho para o bem-estar e comodidade dos nossos pacientes.</p>

      <p data-animar>O Instituto traz consigo a essência de um novo conceito em serviços obstétricos, tornando-se cada
        vez mais uma
        referência em cuidados à mulher em Minas Gerais.</p>
    </div>
  </div>
</section>

<section class="sobre-equipe">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      EQUIPE
    </h2>

    <div class="equipe-wrapper">

      <?php query_posts( array( 'post_type' => 'funcionario', 'posts_per_page' => '-1', 'category_name'  => 'equipe', 'order' => 'DESC', 'orderby' => 'menu_order' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="profissional">
        <div class="profissional-img">
          <img src="<?=catch_that_image(1)?>" type="image/jpg" alt="<?=the_title()?>" />
        </div>

        <div class="profissional-title">
          <strong><?=the_title()?></strong>
          <em><?=the_field('cargo')?></em>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="sobre-equipe black">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      COLABORADORES
    </h2>

    <div class="equipe-wrapper">

      <?php query_posts( array( 'post_type' => 'funcionario', 'posts_per_page' => '-1', 'category_name'  => 'colaboradores', 'order' => 'DESC', 'orderby' => 'menu_order' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="profissional">
        <div class="profissional-img">
          <img src="<?=catch_that_image(1)?>" type="image/jpg" alt="<?=the_title()?>" />
        </div>

        <div class="profissional-title">
          <strong><?=the_title()?></strong>
          <em><?=the_field('cargo')?></em>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="sobre-equipe">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Profissionais parceiros
    </h2>

    <div class="equipe-wrapper">

      <?php query_posts( array( 'post_type' => 'funcionario', 'posts_per_page' => '-1', 'category_name'  => 'parceiros', 'order' => 'DESC', 'orderby' => 'menu_order' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="profissional">
        <div class="profissional-img">
          <img src="<?=catch_that_image(1)?>" type="image/jpg" alt="<?=the_title()?>" />
        </div>

        <div class="profissional-title">
          <strong><?=the_title()?></strong>
          <em><?=the_field('cargo')?></em>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer();