<style>
.no-webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_blog.jpg');
}

.webp .banner-interno {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_blog.webp');
}

@media screen and (min-width: 650px) {
  .no-webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/bg_blog@2x.jpg');
  }

  .webp .banner-interno {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_blog@2x.webp');
  }
}
</style>

<section class="bebes-inside">
  <div class="container">

    <div class="bebe-content">
      <img src="<?=catch_that_image(0)?>" alt="<?=the_title()?>">
      <h2><?=the_title()?></h2>
      <div class="bebe-infos">
        <p><strong>Mãe: </strong><?=the_field('mae')?></p>
        <p><strong>Pai: </strong><?=the_field('pai')?></p>
        <p><strong>Data de Nascimento: </strong><?=the_field('data_de_nascimento')?></p>
        <p><strong>Obstetra: </strong><?=the_field('obstetra')?></p>
        <p><strong>Obstetra: </strong><?=the_field('obstetra_2')?></p>
        <p><strong>Doula: </strong><?=the_field('doula')?></p>
        <p><strong>Tipo de parto: </strong><?=the_field('tipo_de_parto')?></p>
        <p><strong>Hospital: </strong><?=the_field('hospital')?></p>
      </div>
    </div>

  </div>
</section>