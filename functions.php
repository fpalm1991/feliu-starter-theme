<?php

class FeliuStarterTheme {

    private static string $theme_version;

    public function __construct(
        private readonly bool $developing = false,
    ) {
        self::$theme_version = wp_get_theme()->version ?? '1.0'; // Reading theme version from style.css
        add_action( 'wp_enqueue_scripts', fn() => FeliuStarterTheme::feliu_enqueue_scripts(
			$this->developing,
	        self::$theme_version
        ) );
    }

    // Enqueue scripts and styling
	public static function feliu_enqueue_scripts( bool $developing, string $theme_version ): void {
		wp_enqueue_style( 'wp-learning-style', get_template_directory_uri() . '/build/style.css', [], self::handle_development_mode( $developing, $theme_version ) );
	}

    private static function handle_development_mode(bool $developing, string $theme_version): int|string {
        return $developing ? time() : $theme_version;
    }

}

// While developing, set bool developing to true for disabling caching of browser.
$feliu_theme = new FeliuStarterTheme( developing: true );