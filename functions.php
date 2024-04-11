<?php

require __dir__ . '/lib/ThemeBuilder.php';

use feliuTheme\ThemeBuilder;

class FeliuStarterTheme {

	private static string $theme_version;

	public function __construct(private readonly bool $developing = false) {
		// Reading theme version from style.css
		self::$theme_version = wp_get_theme()->version ?? '1.0';

		// Enqueue scripts and styling
		add_action( 'wp_enqueue_scripts', fn() => FeliuStarterTheme::feliu_enqueue_scripts($this->developing) );

		// Registering navigation menus
		register_nav_menus( ThemeBuilder::nav_menus() );

		// Theme support
		ThemeBuilder::theme_support();

		// Excerpt length
		add_filter( 'excerpt_length', fn() => ThemeBuilder::get_excerpt_length() );
	}

	// Method for enqueuing scripts and styling
	public static function feliu_enqueue_scripts(bool $developing): void {
		wp_enqueue_style( 'feliu-starter-theme-main-styling', get_template_directory_uri() . '/build/style.css',
			[], ThemeBuilder::handle_development_mode($developing, self::$theme_version) );
		wp_enqueue_script('feliu-starter-theme-js', get_template_directory_uri() . '/build/main.js',);
	}

}

// While developing, set bool developing to true for disabling caching of browser.
$feliu_theme = new FeliuStarterTheme( developing: true );
