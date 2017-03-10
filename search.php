<?php get_header(); ?>

<div class="row">
	<div class="nine columns">
		<?php if( have_posts() ) :?>
			<h3><?php printf(
				__('Search Results for: %s'), 
				'<span>' . get_search_query() . '</span>' );
			?></h3>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
			endwhile;
		 else : ?>
			<h3>Nothing Found</h3>
			<p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
		<?php endif; ?>
	</div>
	<div class="three columns">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>