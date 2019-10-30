<?php
/**
 * Template Name: cursos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_cursos.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_cursos.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_cursos@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_cursos@2x.webp');
  }
}
</style>

<section class="cursos-outside">
  <div class="container">
    <h2 class="title" data-animar>
      <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
        <use xlink:href="#logo-simbolo"></use>
      </svg>
      Cursos
    </h2>

    <h3 data-animar>Por que fazer os cursos?</h3>

    <p data-animar>Se nascer é algo tão natural, tão ancestral, tão humano, por que uma mulher grávida ou casal que
      espera um filho
      devem fazer “cursos de preparação” ? Por que têm que aprender a parir, amamentar e cuidar de um bebê?<br /><br />

      Crescemos aprendendo tantas coisas, fazendo tantos cursos. Mas quando esperamos por um filho, percebemos que ainda
      faltaram tantas aulas! Natural para o contexto de nossa sociedade contemporânea, em que a mulher rompeu barreiras
      e se inseriu no mercado de trabalho e nos meios acadêmicos. Em contrapartida, se vê frequentemente insegura ao
      saber que será mãe. Sensação parecida com a dos homens. No caso deles, porém, a insegurança se deve ao fato de que
      os novos tempos os convocam cada vez mais a dividir responsabilidades com suas parceiras. Daí a pertinência
      dos“cursos de preparação”. Estudos científicos recentes mostraram que a participação em cursos e grupos durante a
      gravidez melhora os resultados de saúde na gestação, no parto e no primeiro ano do bebê.<br /><br />

      Bem preparados, os casais certamente terão uma vivência mais saudável da chegada de um filho, sem medos e sem
      preconceitos.</p>
  </div>
</section>

<section class="cursos-list">
  <div class="container">
    <? query_posts( array( 'post_type' => 'curso', 'posts_per_page' => '6' ) );  ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'curso_outside', get_post_format() ); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer();