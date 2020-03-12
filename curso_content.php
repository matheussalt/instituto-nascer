<style>
.banner-interno {
  background-image: url('<?=catch_that_image(2)?>');
  height: 220px;
  text-align: center;
}

.blog-card {
  display: none;
}

@media screen and (min-width: 650px) {
  .banner-interno {
    height: 320px;
    background-image: url('<?=catch_that_image(1)?>');
  }
}
</style>

<section class="curso">
  <div class="container">
    <div class="curso-descricao">
      <h2 class="title" data-animar>
        <svg width="54.779" height="61.199" viewBox="0 0 54.779 61.199">
          <use xlink:href="#logo-simbolo"></use>
        </svg>
        Cursos
      </h2>

      <!-- <h3 data-animar>Sobre o curso</h3> -->

      <div data-animar class="curso-content"><?=the_content()?></div>

      <h3 data-animar>Inscrições</h3>

      <ul class="dados" data-animar>
        <li>(31) 3262-3538</li>
        <li>(31) 99323-0023</li>
        <li>Email: cursos@institutonascer.com.br</li>
      </ul>

      <a href="https://wa.me/553131810823" target="_blank" class="wpp" data-animar>
        <ion-icon name="logo-whatsapp"></ion-icon>
        <p>CONTATO VIA WHATSAPP</p>
      </a>
    </div>

    <div class="curso-detalhes" data-animar>
      <h3 data-animar>Detalhes do curso</h3>

      <ul>
        <li>
          <ion-icon name="calendar"></ion-icon><span><?=the_field('data')?></span>
        </li>
        <li>
          <ion-icon name="alarm"></ion-icon><span><?=the_field('horario')?></span>
        </li>
        <li>
          <ion-icon name="pin"></ion-icon><span>Instituto Nascer - Avenida Raja Gabáglia 665. Cidade Jardim</span>
        </li>
      </ul>

      <div class="price">
        <?the_field('valor')?>
      </div>

      <strong><?=the_field('tipo')?></strong>
    </div>
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