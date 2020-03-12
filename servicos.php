<?php
/**
 * Template Name: serviços
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
$GLOBALS["link2"] = get_the_permalink(wp_get_post_parent_id(get_the_ID()));
$GLOBALS["nome2"] = get_the_title(wp_get_post_parent_id(get_the_ID()));
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_servicos.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_servicos.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_servicos@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_servicos@2x.webp');
  }
}
</style>

<?php
$pai = wp_get_post_parent_id(get_the_ID());

if(has_children())
{
$mypages2 = get_pages( array( 'child_of' => get_the_ID(), 'sort_order' => 'desc' ) );
foreach( $mypages2 as $page2 ) { $linkpage = get_page_link( $page2->ID ); } ?>

<section class="servicos-intro">
  <div class="container">
    <div class="servicos-intro-txt">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        SERVIÇOS
      </h2>

      <h3 data-animar>CONHEÇA NOSSOS SERVIÇOS</h3>

      <p data-animar>Com estrutura moderna e equipe multidisciplinar altamente qualificada, o
        Instituto Nascer oferece, em um só lugar, tudo que a família precisa para
        vivenciar um parto seguro, respeitoso e inesquecível. espaço concentra todos
        os serviços necessários para o planejamento da gravidez, o pré-natal, o parto e
        o pós-parto, além dos primeiros cuidados com o bebê. São ministrados, ainda,
        cursos preparatórios práticos e teóricos para os futuros papais e mamães.
      </p>
    </div>

    <div class="servicos-intro-img" data-animar>
      <picture>
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/webp/servicos.webp"
          type="image/webp" />
        <source media="(max-width: 600px)" srcset="<?=get_template_directory_URI()?>/img/rsc/servicos.jpg"
          type="image/jpg" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/servicos@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/servicos@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/servicos@2x.jpg" type="image/jpg" alt="Instituto Nascer" />
      </picture>
    </div>
  </div>
</section>

<section class="servicos">
  <div class="container">
    <ul>
      <?php $mypages = get_pages( array( 'child_of' => get_the_ID(), 'sort_order' => 'asc' ) ); 
      foreach( $mypages as $page ) { ?>
      <li>
        <a href="<?=get_page_link( $page->ID );?>" class="" data-animar>
          <?php if (has_post_thumbnail( $page->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>
          <img src="<?=$image[0]?>" alt="Obstetrícia" />
          <?php endif; ?>
          <h3><?=$page->post_title;?></h3>
        </a>
      </li>
      <? } ?>
    </ul>
  </div>
</section>

<? } else { ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="servico-interna">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      SERVIÇOS
    </h2>

    <h3 data-animar><?=the_title()?></h3>

    <div class="servico-img" data-animar>
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
    </div>

    <div class="servico-content" data-animar>
      <?=the_content()?>
    </div>

    <div class="servico-contact" data-animar>
      <a href="<?=site_url()?>/contato" class="btn">SOLICITE UM ORÇAMENTO</a>

      <a href="https://api.whatsapp.com/send?phone=+553131810823" target="_blank" class="wpp">
        <ion-icon name="logo-whatsapp"></ion-icon>
        <p>CONTATO VIA WHATSAPP</p>
      </a>
    </div>
  </div>
</section>

<?php endwhile; ?>

<? } ?>

<?php get_footer();