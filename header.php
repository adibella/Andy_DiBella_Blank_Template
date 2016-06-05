<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>

	<body>
		<div class="container">
			<header class="row">
    			<div class="nine columns">
			<!-- Add Link to Home_url -->
					<h1><a href="<?php $url = home_url('/');
					echo $url; ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
    			</div>

			<!-- Search Form -->
    			<div class="three columns">
        			<?php get_search_form(); ?>
    			</div>
			</header>

			<!-- Menu -->
			<div class="twelve columns">
				<?php wp_nav_menu(array(
					'sort_column' => 'menu_order',
					'container_class' => 'blank-menu-header'
				));?>
			</div>
		</div>
