<?php
/**
 * Template Name: Full Width
 * Template Post Type: page, post
 */
?>
<?php get_header();?>
<main id="main" class="site-main" role="main">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php 
if( get_field('include_jumbotron') === 'Yes') {
    require_once("inc/jumbotron.php"); 
}
?>

<div class="py-5 container-fluid">
<?php the_content();?>
<?php endwhile; endif;?>
</div>
</main>
<?php get_footer();?>