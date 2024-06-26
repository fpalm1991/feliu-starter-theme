<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'grid-main-layout' ); ?>>

<header class="mb-2 header-area">
    <nav class="navbar sub-navigation">
        <?php
            if ( has_nav_menu( 'sub_menu') ) {
                wp_nav_menu( [
                    'theme_location' => 'sub_menu',
                ]);
            }
        ?>
    </nav>
    <nav class="navbar main-navigation">

        <div class="main-navigation__logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="main-navigation__menu">
            <?php
                if ( has_nav_menu( 'main_menu' ) ) {
                    wp_nav_menu([
                        'theme_location' => 'main_menu'
                    ]);
                }
            ?>
        </div>

        <div class="main-navigation__burger">
            <span class="main-navigation__burger__toggle toggle--one"></span>
            <span class="main-navigation__burger__toggle toggle--two"></span>
            <span class="main-navigation__burger__toggle toggle--three"></span>
        </div>
    </nav>
</header>

<div class="main-navigation__mobile">
    <?php
        if ( has_nav_menu( 'main_menu' ) ) {
            wp_nav_menu([
                'theme_location' => 'main_menu'
            ]);
        }
    ?>
</div>