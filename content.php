<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single() && get_post_type() == 'post') { ?>

<? include 'blog_content.php' ?>

<? } else if(is_single() && get_post_type() == 'curso') { ?>

<? include 'curso_content.php' ?>

<? } else if(is_single() && get_post_type() == 'relatos_de_parto') { ?>

<? include 'relatos_content.php' ?>

<? } else if(is_single() && get_post_type() == 'bebes') { ?>

<? include 'bebes_content.php' ?>

<? } else if(is_single() && get_post_type() == 'sala_de_imprensa') { ?>

<? include 'imprensa_content.php' ?>

<? } else { ?>

<a href="<?=the_permalink()?>" class="blog-card">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
  <h3><?=the_title()?></h3>
  <p><?=custom_excerpt2(100)?></p>
</a>

<? } ?>