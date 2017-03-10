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
							<?php if ( has_post_thumbnail() ) { ?>
									<figure class="animated fadeIn"> 
										<?php		
										the_post_thumbnail('thumbnail');
								  }?> </figure>
						</div>
						<div class="eight columns">
							<h5><?php the_date(); ?></h5>
							<?php		
								the_excerpt();?>	
							<a href="<?php the_permalink(); ?>">Read More</a>	
						</div>
					</div>
					<div class="row aligncenter">
						<img src="<?php echo get_theme_file_uri('images/divider.png');?>" alt="Divider" title="Divider" />
					</div>
				<?php	
				}
			} ?>
			<!---- end loop ---->
		</div>
	</section>

<?php get_footer(); ?>		<!--link to the footer file-->