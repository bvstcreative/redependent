<?php get_header(); ?>
<div id="single">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template_part/common/menubar', get_post_format() ); ?>

	<div id="content">
		
		<div class="header">
			<div class="tittle">
				<h2><?php the_title(); ?></h2>
				<div class="sinopsis"><?php the_excerpt(); ?></div>
			</div>

			<div class="client-logo">
				<img src="<?php the_field( "client-logo" ); ?>" alt="Client Logo">
			</div>

		</div>
		
		<div class="thumbnail">
			<img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url();} ?>" alt="">
		</div>

		<div id="content-body">

			<?php the_content(); ?>

		</div>

		<a href="<?php echo home_url(); ?>" class="btn">Return To Home</a>
	</div>


	<?php endwhile; ?>
</div>
<?php get_footer(); ?>