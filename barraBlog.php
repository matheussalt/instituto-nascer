<aside class="barra-blog">
  <div class="barra-logo">
    <img src="<?=get_template_directory_URI()?>/img/rsc/logo.png" alt="Logotipo Instituto Nascer" />
  </div>

  <form class="barra-search" action="<?=site_url()?>" method="get">
    <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
    <button type="submit">
      <ion-icon name="search"></ion-icon>
    </button>
  </form>

  <ul class="barra-categorias">
    <?php 
      $args = array(
      'show_option_all'    => '',
      'orderby'            => 'name',
      'order'              => 'ASC',
      'style'              => 'list',
      'show_count'         => 0,
      'hide_empty'         => 0,
      'use_desc_for_title' => 0,
      'child_of'           => 1,
      'title_li'           => __( '' )
        );
        wp_list_categories( $args ); 
    ?>
  </ul>
</aside>