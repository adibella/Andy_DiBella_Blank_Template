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
				<div class="twelve columns">
					<?php wp_nav_menu(array(
						'sort_column' => 'menu_order',
						'container_class' => 'blank-menu-header'
					));?>
				</div>
			<header/>
			<!-- END OF HEADER - BEGIN SECTION CONTENT -->
