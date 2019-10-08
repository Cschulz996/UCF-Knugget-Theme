<?php get_header();?>
<main id="main" class="site-main" role="main">
<?php if(have_posts()) : while(have_posts()) : the_post();?>

<div class="bg-faded py-4 page-jumbo d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="heading-underline">Welcome</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac ex tempus nibh pharetra pellentesque id vel ante. Quisque ac est nulla. Etiam elementum bibendum neque sed dictum. Nunc gravida vitae ipsum blandit commodo. Morbi lacinia metus eu metus egestas rutrum. Nullam in blandit quam, eu molestie dui.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="http://placegoat.com/300/300" class="img-fluid shadow-sm rounded" alt="Something">
            </div>
        </div>
    </div>
</div>

<main class="py-5 container">
<?php the_content();?>
<?php endwhile; endif;?>
</main>
<?php get_footer();?>