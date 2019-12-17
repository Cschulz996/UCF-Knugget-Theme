<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
<title><?php echo get_bloginfo('name') . ' - ' . get_the_title();?></title>
</head>
<body <?php body_class();?>>
<?php wp_body_open(); ?>
<div class="w-100 ucf-main-header" id="ucf-main-header-bg">
    <div class="container-knugget">
        <span class="ucf-main-header-text"><?php echo get_bloginfo('name');?></span>
    </div>
</div>
<?php if(has_nav_menu('top_menu')):?>
<nav class="navbar navbar-toggleable-lg navbar-light bg-primary">
    <div class="container-knugget">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu( array(
        'theme_location'    => 'top_menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
    </div>
</nav>
<?php endif; ?>