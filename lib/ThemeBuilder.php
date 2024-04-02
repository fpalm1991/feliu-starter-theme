<?php

namespace feliuTheme;

class ThemeBuilder {

	public static function handle_development_mode(bool $developing = false, string $theme_version = '1.0'): int|string {
        return $developing ? time() : $theme_version;
    }

	public static function nav_menus(): array {
		return [
			'main_menu' => __( 'Main Menu', 'feliu-starter-theme' ),
			'footer_menu' => __( 'Footer Menu', 'feliu-starter-theme' ),
		];
	}

}
