<?php
/**
 * Template Name: Full Width Developer
 * Template Post Type: page, post
 */
?>
<?php get_header();?>
<main id="main" class="site-main" role="main">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php require_once("inc/jumbotron.php"); ?>

<main class="py-5">
<?php the_content();?>
<?php endwhile; endif;?>
</main>
<?php get_footer();?>