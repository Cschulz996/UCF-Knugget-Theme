<?php @header( 'HTTP/1.1 404 Not found', true, 404 ); ?>

<?php get_header(); ?>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-8">
            <h1 class="display-3 text-primary">Page Not Found</h1>
            <p class="lead">Don't give in to despair, your quest continues here...</p>
            <p>Try double-checking the spelling of the address you requested and that the URL is correct. You can also use the button below to return to the previous page.</p>
            <a role="button" class="btn btn-primary mt-3" onclick="window.history.back()">Go back</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 text-center my-3">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/knightro-searching.jpg' ?>" class="img-fluid">
        </div>
    </div>
</div>
<?php get_footer();?>
