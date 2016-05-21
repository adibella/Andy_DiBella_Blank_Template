<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
<!-- BEGIN LOOP -->
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				} // end while
			} // end if
			?>
<!-- END LOOP -->
			<p>Body content goes here.</p>
		</div>
	</section>
<?php get_footer(); ?>
