<?php

namespace feliuTheme;

use WP_Customize_Media_Control;

class Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'customize_register' ) );
    }

    public function customize_register( $wp_customize ): void {

        // Hero section
        $wp_customize->add_section(
            'section_hero',
            [
                'title' => __( 'Hero Section', 'feliu-starter-theme' ),
            ]
        );

        // Hero section > Hero title
        $wp_customize->add_setting(
            'define_hero_title',
            [
                'type'              => 'theme_mod',
                'default'           => __( 'Title', 'feliu-starter-theme' ),
                'sanitize_callback' => 'sanitize_text_field',
            ]
        );

        $wp_customize->add_control(
            'define_hero_title',
            [
                'label'       => __( 'Section Title', 'feliu-starter-theme' ),
                'description' => __( 'Title', 'feliu-starter-theme' ),
                'section'     => 'section_hero',
                'type'        => 'text',
            ]
        );

        // Hero section > Hero title
        $wp_customize->add_setting(
            'define_hero_text',
            [
                'type'              => 'theme_mod',
                'default'           => __( 'Hero Text', 'feliu-starter-theme' ),
                'sanitize_callback' => 'sanitize_textarea_field',
            ]
        );

        $wp_customize->add_control(
            'define_hero_text',
            [
                'label'       => __( 'Section Hero Text', 'feliu-starter-theme' ),
                'description' => __( 'Hero Text', 'feliu-starter-theme' ),
                'section'     => 'section_hero',
                'type'        => 'textarea',
            ]
        );

        // Hero section > Hero button text
        $wp_customize->add_setting(
            'define_hero_button_text',
            array(
                'type'              => 'theme_mod',
                'default'           => __( 'Button', 'feliu-starter-theme' ),
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'define_hero_button_text',
            array(
                'label'       => __( 'Button Text', 'feliu-starter-theme' ),
                'description' => __( 'Text displayed on the button', 'feliu-starter-theme' ),
                'section'     => 'section_hero',
                'type'        => 'text',
            )
        );

        // Hero section > Hero button link
        $wp_customize->add_setting(
            'define_hero_button_link',
            array(
                'type'              => 'theme_mod',
                'default'           => '#',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'define_hero_button_link',
            array(
                'label'       => __( 'Button Link', 'feliu-starter-theme' ),
                'description' => __( 'URL for the button link', 'feliu-starter-theme' ),
                'section'     => 'section_hero',
                'type'        => 'url',
            )
        );


        // Hero section > Hero image
        $wp_customize->add_setting(
            'define_hero_background_image',
            [
                'type'              => 'theme_mod',
                'sanitize_callback' => 'absint',
            ]
        );

        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
                'define_hero_background_image', [
                    'label'       => __( 'Background Image', 'feliu-starter-theme' ),
                    'section'     => 'section_hero',
                    'mime_type'    => 'image',
                ])
        );

        // Hero section > Hero image height
        $wp_customize->add_setting(
            'define_hero_image_height',
            [
                'type'              => 'theme_mod',
                'default'           => 600,
                'sanitize_callback' => 'absint',
            ]
        );

        $wp_customize->add_control(
            'define_hero_image_height',
            [
                'label'       => __( 'Hero Image Height', 'feliu-starter-theme' ),
                'description' => __( 'Hero image height (px)', 'feliu-starter-theme' ),
                'section'     => 'section_hero',
                'type'        => 'number',
            ]
        );

    }

}
