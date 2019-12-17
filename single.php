<?php get_header();?>
<main id="main" class="site-main" role="main">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php require_once("inc/jumbotron.php"); ?>

<div class="py-5 container-knugget">
<?php the_content();?>
<?php endwhile; endif;?>
</div>
</main>
<?php get_footer();?>