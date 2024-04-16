<?php get_header(); ?>

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

<?php get_footer(); ?>