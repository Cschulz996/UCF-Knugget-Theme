<div class="container-fluid ucf-footer-main py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2><?php echo get_bloginfo('name');?></h2>
        </div>
    </div>
    <?php if(has_nav_menu('footer_menu')):?>
    <div class="row mt-2">
        <div class="col-12">
            <?php 
            wp_nav_menu(
                array(
                    'theme_location'    => 'footer_menu',
                    'container'         => '',
                    'depth'             => '2',
                    'menu_class'        => 'nav justify-content-center ucf-footer-nav dropup flex-wrap',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                    )
            );
            ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3 text-center">
        <div class="col-12">
            <p>&copy; <a class="ml-1" href="https://www.ucf.edu/" target="_blank">University of Central Florida</a></p>
        </div>
    </div>
</div>

</div>
<?php wp_footer(); ?>
</body>
</html>