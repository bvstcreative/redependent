<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	

	<div id="content">
		<h2><?php the_title(); ?></h2>

		<div id="content-body">

		<?php the_content(); ?>

		</div>
	</div>


<?php endwhile; ?>

<?php get_footer(); ?>