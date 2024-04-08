<?php

namespace feliuTheme;

class ThemeBuilder {

	private static int $excerpt_length = 20;

	public static function handle_development_mode(bool $developing = false, string $theme_version = '1.0'): int|string {
		return $developing ? time() : $theme_version;
	}

	public static function nav_menus(): array {
		return [
			'main_menu' => __( 'Main Menu', 'feliu-starter-theme' ),
			'footer_menu' => __( 'Footer Menu', 'feliu-starter-theme' ),
		];
	}

	// Theme support
	public static function theme_support(): void {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script'
		] );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
	}

	public static function get_excerpt_length(): int {
		return self::$excerpt_length;
	}

}
