<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
			<?php 
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<h5>Fake Date, 2017</h5>
					<?php the_content();
				endwhile;
			endif; ?>
		</div>
	</section>
	
<?php get_footer(); ?>