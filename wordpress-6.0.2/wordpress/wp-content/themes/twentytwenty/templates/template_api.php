<?php
/**
 * Template Name: Api vinos
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>

<main id="site-content">
<?php

 echo get_data_api();
 
 ?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
