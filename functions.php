<?php

require get_template_directory() . '/lib/ThemeBuilder.php';
require get_template_directory() . '/lib/Customizer.php';
require get_template_directory() . '/lib/Navigation.php';

use feliuTheme\ThemeBuilder;
use feliuTheme\Customizer;
use feliuTheme\Navigation;

class FeliuStarterTheme {

    private static string $theme_version;

    public function __construct(private readonly bool $developing = false) {
        // Reading theme version from style.css
        self::$theme_version = wp_get_theme()->version ?? '1.0';

        // Enqueue scripts and styling
        add_action( 'wp_enqueue_scripts', fn() => ThemeBuilder::enqueue_scripts($this->developing, self::$theme_version) );

        // Registering navigation menus
        register_nav_menus( Navigation::nav_menus() );

        // Theme support
        ThemeBuilder::theme_support();

        // Excerpt length
        add_filter( 'excerpt_length', fn() => ThemeBuilder::get_excerpt_length() );

        // Additional settings in customizer
        new Customizer();

        // Handle special characters at end of excerpt text
        add_filter('excerpt_more', fn() => ThemeBuilder::handle_special_characters_excerpt( "...", true ));
    }

}

// While developing, set bool developing to true for disabling caching of browser.
$feliu_theme = new FeliuStarterTheme( developing: true );
