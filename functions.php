<?php

require __dir__ . '/lib/ThemeBuilder.php';

use feliuTheme\ThemeBuilder;

class FeliuStarterTheme {

	private static string $theme_version;

    public function __construct(private readonly bool $developing = false) {
	    self::$theme_version = wp_get_theme()->version ?? '1.0'; // Reading theme version from style.css
        add_action( 'wp_enqueue_scripts',
	        fn() => FeliuStarterTheme::feliu_enqueue_scripts($this->developing) );
		register_nav_menus( ThemeBuilder::nav_menus() );
    }

	// Enqueue scripts and styling
	public static function feliu_enqueue_scripts(bool $developing): void {
		wp_enqueue_style( 'wp-learning-style', get_template_directory_uri() . '/build/style.css', [], 
            ThemeBuilder::handle_development_mode($developing));
	}

	public function get_theme_version(): string {
		return self::$theme_version;
	}

}

// While developing, set bool developing to true for disabling caching of browser.
$feliu_theme = new FeliuStarterTheme( developing: true );
