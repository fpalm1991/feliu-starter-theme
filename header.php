<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="mb-4">
        <nav class="navbar sub-navigation"></nav>
        <nav class="navbar main-navigation">

            <div class="main-navigation__logo">
	            <?php the_custom_logo(); ?>
            </div>
            <div class="main-navigation__menu">
	            <?php
	            wp_nav_menu([
		            'theme_location' => 'main_menu'
	            ]);
	            ?>
            </div>

        </nav>
    </header>
