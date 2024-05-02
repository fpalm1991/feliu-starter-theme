<?php

$recent_posts = new WP_Query( [
    'post_type' => 'post',
    'posts_per_page' => 4
] );

?>

<?php if ( $recent_posts->have_posts() ) : ?>
    <div class="teaser-container">
        <h2 class="mb-2"><?php _e( "Our most recent posts" ) ?></h2>
        <div class="teaser-grid">
            <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                <article class="teaser">
                    <a class="teaser-image-link" href="<?php the_permalink(); ?>">
                        <div class="teaser-image debug-border" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
                    </a>
                    <div class="teaser-text">
                        <div class="teaser-text__text">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="teaser-text__link">
                            <a href="<?php the_permalink(); ?>">
                                Learn more
                            </a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
<?php else : ?>
    <p>No posts yet. Get creative! 🤯</p>
<?php endif; ?>