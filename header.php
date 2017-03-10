<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<?php wp_head(); ?>	
</head>

<body>
	<header>
		<!-- adding the menu -->
		<div class="row">
			<div class="twelve columns">
				<?php wp_nav_menu(array(
					'sort_column' => 'menu_order', 
					'container_class' => 'menu-header'
					));?>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<article>
					<h1><a href="<?php 
						$url = home_url('/'); echo $url; ?>">
						<?php bloginfo('name'); ?></a></h1>		 <!-- dynamically add the header -->
					<h4 id="header"><?php bloginfo('description'); ?></h4> <!-- dynamically add the tagline -->
				</article>
			</div>
		</div>
	</header>
	<div class="container">		