<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="w-100 ucf-main-header">
    <div class="w-100 px-5">
        <span class="ucf-main-header-text"><?php echo get_bloginfo('name');?></span>
    </div>
</div>

<?php if(has_nav_menu('top_menu')):?>
<nav class="navbar navbar-toggleable-lg navbar-light bg-primary">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
        wp_nav_menu(
            array(
                'theme_location'    => 'top_menu',
                'menu_class'        => 'navbar-nav',
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'list_item_class'   => 'nav-item',
                'link_class'        => 'nav-link'
            )
        );
        ?>
    </div>
</nav>
<?php endif; ?>

<div class="main-site-content">