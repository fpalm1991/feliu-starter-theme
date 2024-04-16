<?php

$recent_posts = new WP_Query( [
	'post_type' => 'post',
	'posts_per_page' => 4
] );

?>

<?php if ( $recent_posts->have_posts() ) : ?>
<div class="teaser-grid">
	<?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
		<article class="teaser">
			<div class="teaser-image">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'medium' );  ?>
				</a>
			</div>
			<div class="teaser-text">
				<h4><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">
					Learn more
				</a>
			</div>
		</article>
	<?php endwhile; ?>
</div>
<?php else : ?>
    <p>No posts yet. Get creative! 🤯</p>
<?php endif; ?>