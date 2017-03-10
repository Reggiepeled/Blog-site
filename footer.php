	</div> <!-- ends container -->
	<footer>
		<div class="row">
			<div class="four columns">
				<a href="index.php"><img src="<?php echo get_theme_file_uri('images/mylogo.png');?>" alt="Logo" title="Logo" /></a>
			</div>
			<div class="four columns">
				<a class="social" href="mailto:revital.peled@gmail.com" title="gmail">
	               <img src="<?php echo get_theme_file_uri('images/email.png');?>" alt="Email" title="Email" /></a>
	            <a class="social" href="https://www.facebook.com/revital.peled.10" target="_blank" title="facebook">
	                <img src="<?php echo get_theme_file_uri('images/facebook.png');?>" alt="Facebook" title="Facebook" /></a>
	            <a class="social" href="https://www.pinterest.com/revitalpeled/" target="_blank" title="pinterest">
	                <img src="<?php echo get_theme_file_uri('images/pinterest.png');?>" alt="Pinterest" title="Pinterest" /></a>
	            <h5 class="row aligncenter">&copy;Copyright</h5>
	        </div>
			<div class="four columns">
				<?php dynamic_sidebar('footer-widget-one'); ?>
			</div>
	</footer>
	<?php wp_footer(); ?>
     
</body>
</html>