<?php get_header(); ?>

    <?php
        $hero_image = wp_get_attachment_url(get_theme_mod( 'define_hero_background_image' ));
        $hero_image_height = get_theme_mod( 'define_hero_image_height' );
        $hero_title = get_theme_mod( 'define_hero_title' );
        $hero_text = get_theme_mod( 'define_hero_text' );
        $hero_button_text = get_theme_mod( 'define_hero_button_text' );
        $hero_button_link = get_theme_mod( 'define_hero_button_link' );

        // Header image overlay
        $hero_overlay_is_active = get_theme_mod( 'activate_header_image_overlay' );
        $hero_overlay_color = esc_attr(get_theme_mod( 'define_overlay_color' ));
        list($r, $g, $b) = sscanf($hero_overlay_color, "#%02x%02x%02x");
        $rgba = "rgba($r, $g, $b, 0.6)";
        $linear_gradient = "linear-gradient($rgba, $rgba)";
    ?>

    <div class="header-image mb-4"
         style="background: <?php echo $hero_overlay_is_active ? $linear_gradient . ', ' : '' ?> url('<?php echo esc_url($hero_image) ?>'); height: <?php echo esc_attr($hero_image_height) ?>px;">
        <div class="hero-image-container">
            <h1><?php esc_html_e($hero_title); ?></h1>
        </div>

        <div class="hero-image-container mb-4">
            <p>
                <?php esc_html_e($hero_text) ?>
            </p>
        </div>

        <div class="hero-image-container">
            <a href="<?php echo esc_url($hero_button_link) ?>" class="btn btn-main-cta">
                <?php esc_html_e($hero_button_text); ?>
            </a>
        </div>
    </div>

    <main class="content-container">
        <h2 class="mb-2"><?php _e( "Our most recent posts" ) ?></h2>
        <?php get_template_part( 'template-parts/content', 'teasers' ) ?>
    </main>

<?php get_footer(); ?>