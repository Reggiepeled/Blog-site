<?php get_header(); ?>

	<div class="row">
		<div class="nine columns">
			<div class="wrapper">
				<?php 
					if (have_posts()) :			
						while (have_posts()) : the_post(); ?> 
							<h2><?php the_title(); ?></h2>
							<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail');
								  }?>
					  		<?php the_content(); 
						endwhile;
					endif; ?>
			</div> <!-- end wrapper -->
		</div>

		<!-- SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>