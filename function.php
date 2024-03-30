<?php

class FeliuStarterTheme {

    private static string $theme_version;

    public function __construct(
        private readonly bool $developing = false,
    ) {
        self::$theme_version = wp_get_theme()->version; // Reading theme version from style.css
        add_action( 'wp_enqueue_scripts', fn() => FeliuStarterTheme::wp_learning_load_scripts(
            $this->developing,
            self::$theme_version
        ) );
    }

    // Enqueue scripts and styling
    public static function wp_learning_load_scripts( bool $developing, string $theme_version ): void {
        wp_enqueue_style( 'wp-learning-style', get_stylesheet_uri(), [], self::hande_development_mode($developing, $theme_version) );
    }

    private static function hande_development_mode(bool $developing, string $theme_version): int|string {
        return $developing ? time() : $theme_version;
    }

}

// While developing, set bool developing to true for disabling caching of browser.
$basic_theme = new FeliuStarterTheme(developing: true);
