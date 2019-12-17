<?php get_header();?>
<main id="main" class="site-main" role="main">
<div class="bg-faded py-4 page-jumbo d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4"><?php echo get_bloginfo('name');?></h1>
                <p class="lead"><?php echo get_bloginfo('description');?></p>
            </div>
        </div>
    </div>
</div>
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<div class="py-5 container">
<?php the_content();?>
<?php endwhile; endif;?>
</div>
</main>
<?php get_footer();?>