<!DOCTYPE html>
<html>
	<head>
		<title>Wordpress Template</title>
		<?php wp_head(); ?>
		<!-- Links to styles.css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>

	<body>
		<div class="container">
			<header class="row">
    			<div class="nine columns">
        			<h1>Blank WordPress Template</h1>
        			<p>This is my WordPress template.</p>
    			</div>
				<!-- Add Search Form -->
    			<div class="three columns">
        			<?php get_search_form(); ?>
    			</div>
			</header>
			<div class="twelve columns">
				<?php wp_nav_menu(array(
					'sort_column' => 'menu_order',
					'container_class' => 'blank-menu-header'
				));?>
			</div>
			<!-- END OF HEADER - BEGIN SECTION CONTENT -->
