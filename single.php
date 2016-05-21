<?php get_header(); ?>
    <section class="row">
        <div class="twelve columns">
<!-- BEGIN SINGLE PHP -->
			<?php if (have_posts()) :
			    while (have_posts()) : the_post(); ?>
			        <h2><?php the_title(); ?></h2>
			        <?php the_content();
			    endwhile;
			endif; ?>
<!-- END SINGLE PHP -->
    </section>
<?php get_footer(); ?>
