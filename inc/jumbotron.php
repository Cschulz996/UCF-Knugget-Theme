<div class="bg-faded py-4 page-jumbo d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
        <?php if( get_field('leading_image') ): ?>
            <div class="col-md-6">
                <?php if( get_field('leading_text') ): ?>
                    <h1 class="heading-underline"><?php single_post_title(); ?></h1>
                    <?php the_field('leading_text'); ?>
                <?php else: ?>
                    <h1 class="display-4"><?php single_post_title(); ?></h1>
                <?php endif; ?>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php the_field('leading_image'); ?>" class="img-fluid shadow-sm rounded" alt="Something">
            </div>
        <?php else: ?>
            <div class="col-12">
                <?php if( get_field('leading_text') ): ?>
                    <h1 class="heading-underline"><?php single_post_title(); ?></h1>
                    <?php the_field('leading_text'); ?>
                <?php else: ?>
                    <h1 class="display-3"><?php single_post_title(); ?></h1>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>