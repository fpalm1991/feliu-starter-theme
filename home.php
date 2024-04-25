<?php get_header(); ?>

    <?php
        require get_template_directory() . '/lib/HeroImage.php';
        use feliuTheme\HeroImage;
    ?>

    <div class="main-area">
        <div class="header-image mb-4"
             style="background: <?php echo HeroImage::hero_image_overlay_is_active() ? esc_attr(HeroImage::get_hero_image_overlay_color()) . ', ' : '' ?>
                     url('<?php echo esc_url(HeroImage::get_hero_image()) ?>');
                     height: <?php echo esc_attr(HeroImage::get_hero_image_height()) ?>px;">
            <div class="hero-image-container">
                <h1><?php esc_html_e(HeroImage::get_hero_title()); ?></h1>
            </div>

            <div class="hero-image-container mb-4">
                <p>
                    <?php esc_html_e(HeroImage::get_hero_text()) ?>
                </p>
            </div>

            <div class="hero-image-container">
                <?php if ( !empty( HeroImage::get_hero_button_text() ) ) : ?>
                    <a href="<?php echo esc_url(HeroImage::get_hero_button_link()) ?>" class="btn btn-main-cta">
                        <?php esc_html_e(HeroImage::get_hero_button_text()); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <main class="teaser-container">
            <h2 class="mb-2"><?php _e( "Our most recent posts" ) ?></h2>
            <?php get_template_part( 'template-parts/content', 'teasers' ) ?>
        </main>
    </div>

<?php get_footer(); ?>