<?php get_header(); ?>
	<section class="row">
		<div class="nine columns sideborder">
			<div class="wrapper">
				<?php 
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<h2 class="animated rollIn"><?php the_title(); ?></h2>
						<h5><?php the_date(); ?></h5>
						<?php the_content();
					endwhile;?>
					<!--Add the pagination-->
					<div class="row">
						<div class="six columns">
							<div class="pagination"><?php previous_post_link('< %link'); ?></div>
						</div>
						<div class="six columns alignright">
							<div class="pagination"><?php next_post_link('%link >'); ?></div>
						</div>
					</div>
					<?php
				endif; ?>
			</div>
		</div>
		<!-- SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</section>
	
<?php get_footer(); ?>