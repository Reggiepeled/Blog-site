<?php get_header(); ?>		<!--link to the header file-->
	<section class="row">		<!--Grid system -->
		<div class="twelve columns">
			<!---- begin loop ---->
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="row">		
						<div class="four columns">
							<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail');
								  }?>
						</div>
						<div class="eight columns">
							<h5>Fake Date, 2017</h5>
							<?php		
								the_excerpt();?>	
							<a href="<?php the_permalink(); ?>">Read More</a>	
						</div>
					</div>
				<?php	
				}
			} ?>
			<!---- end loop ---->
		</div>
	</section>

<?php get_footer(); ?>		<!--link to the footer file-->