<?php

namespace feliuTheme;

class ThemeBuilder {

    private static int $excerpt_length = 10;

    public static function enqueue_scripts(bool $developing = false, string $theme_version = '1.0'): void {
        wp_enqueue_style( 'feliu-starter-theme-main-styling', get_template_directory_uri() . '/build/style.css',
            [], ThemeBuilder::handle_development_mode($developing, $theme_version) );
        wp_enqueue_script('feliu-starter-theme-js', get_template_directory_uri() . '/build/main.js',);
    }

    public static function handle_development_mode(bool $developing = false, string $theme_version = '1.0'): int|string {
        return $developing ? time() : $theme_version;
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
        add_theme_support( 'custom-logo', [
            'width'      => 200,
            'height'     => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ] );
    }

    public static function get_excerpt_length(): int {
        return self::$excerpt_length;
    }

    // Remove special characters after excerpt
    public static function handle_special_characters_excerpt( string $excerpt_ending, bool $start_with_blank ): string {
        if ( $start_with_blank ) {
            return " " . $excerpt_ending;
        }

        return $excerpt_ending;
    }

}
