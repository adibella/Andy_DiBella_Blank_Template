<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
<!-- BEGIN PAGE PHP -->
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
<!-- END PAGE PHP -->
		</div>
	</section>
<?php get_footer(); ?>
