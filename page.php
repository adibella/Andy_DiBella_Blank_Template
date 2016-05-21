<?php get_header(); ?>
	<section class="row">
		<div class="nine columns">
<!-- BEGIN PAGE PHP -->
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
<!-- END PAGE PHP -->
		</div>
<!-- BEGIN SIDEBAR -->
		<div class="three columns">
			<?php get_sidebar(); ?>
		</div>
<!-- END SIDEBAR -->
	</section>
<?php get_footer(); ?>
