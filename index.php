<?php get_header(); ?>

<main class="content-container">

    <article>

	    <?php while ( have_posts() ) : the_post(); ?>

            <h1 class="mb-2"><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>

	    <?php endwhile; ?>

    </article>

</main>

<?php get_footer(); ?>