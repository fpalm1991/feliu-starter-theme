<?php get_header(); ?>

    <?php
        $hero_image = wp_get_attachment_url(get_theme_mod( 'define_hero_background_image' ));
        $hero_title = get_theme_mod( 'define_hero_title' );
        $hero_image_height = get_theme_mod( 'define_hero_image_height' );
    ?>

    <div class="header-image mb-4"
         style="background-image: url('<?= $hero_image ?>'); height: <?= $hero_image_height ?>px;">

        <h1><?php echo esc_html($hero_title); ?></h1>
    </div>

	<main class="content-container">
		<h2 class="mb-2">Our most recent posts</h2>
		<?php get_template_part( 'template-parts/content', 'teasers' ) ?>
	</main>

<?php get_footer(); ?>