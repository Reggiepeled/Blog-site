<?php 
get_header(); ?>

	<div class="row">
		<div class="nine columns">
			<h3>Not Found</h3>
			<p>This is somewhat embarrassing, isn't it?</p>
			<p>It looks like nothing was found at this location. Maybe try a search?</p>
			
			<h2>Try searching for what you need:</h2>
			<?php get_search_form(); ?>
		</div>
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>