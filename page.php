<?php get_header(); ?>

    <div class="main-area">
        <?php if ( get_the_post_thumbnail() ) : ?>
            <div class="header-image mb-4"
                 style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')">
            </div>
        <?php endif; ?>

        <main class="content-container">

            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h1 class="mb-2"><?php the_title(); ?></h1>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </main>
    </div>

<?php get_footer(); ?>