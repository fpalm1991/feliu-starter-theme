<?php

namespace feliuTheme;

class HomeHeroImage {

    public static function get_hero_image(): string|bool {
        return wp_get_attachment_url(get_theme_mod( 'define_hero_background_image' ));
    }

    public static function get_hero_image_height(): mixed {
        return get_theme_mod( 'define_hero_image_height' );
    }

    public static function get_hero_title(): mixed {
        return get_theme_mod( 'define_hero_title' );
    }

    public static function get_hero_text(): mixed {
        return get_theme_mod( 'define_hero_text' );
    }

    public static function get_hero_button_text(): mixed {
        return get_theme_mod( 'define_hero_button_text' );
    }

    public static function get_hero_button_link(): mixed {
        return get_theme_mod( 'define_hero_button_link' );
    }

    public static function get_hero_image_overlay_color(): string {
        $hero_overlay_color = get_theme_mod( 'define_overlay_color' );
        list($r, $g, $b) = sscanf($hero_overlay_color, "#%02x%02x%02x");
        $rgba = "rgba($r, $g, $b, 0.6)";
        return "linear-gradient($rgba, $rgba)";
    }

    public static function hero_image_overlay_is_active(): bool {
        return get_theme_mod( 'activate_header_image_overlay' );
    }

}