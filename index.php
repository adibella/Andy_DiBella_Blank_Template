<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
<!-- BEGIN LOOP -->
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
		<!-- Add link to the title -->
					<h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h3>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail');
					}
					the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Read More</a></p>

			<?php	} // end while
				} // end if
			?>
<!-- END LOOP -->
			<p>Body content goes here.</p>
		</div>
	</section>
<?php get_footer(); ?>
