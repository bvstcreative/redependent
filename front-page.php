<?php get_header(); ?>

<div id="main">
	<div id="cover">
		
		<div id="cover-inf">
			<?php get_template_part( 'template_part/common/menubar', get_post_format() ); ?>
			<div id="notice">
				<h2>Our Site Is Under Maintenance</h2>
				<h5>
					We are upgrading our site for your best experience <br />
					Scroll down for see our recent project
				</h5>
				<div class="arrow">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/icon/arrow.svg" alt="">
				</div>
			</div>
			<div id="get-in-touch">
				<a href="https://wa.me/6285156111709" class="btn input">Get In Touch</a>
				<div class="social-icon">
					<a href="https://instagram.com/bvstcreative" class="btn input redicon-instagram"></a>
					<a href="https://wa.me/6285156111709" class="btn input redicon-whatsapp"></a>
					<a href="mailto:bvstcreative@gmail.com" class="btn input redicon-email"></a>
				</div>
				<div class="barcode">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/qrcode1.svg" alt="">
				</div>
			</div>
		</div>
		
		<div id="cover-figure">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo/logo.svg" alt="">	
		</div>
		
	</div>
	
	<div id="portfolio">
		<h2 class="tcenter">Our Recent Works</h2>

		<div class="grid">
			<?php
				$args = array( 'cat' => '3' );
				$loop = new WP_Query( $args );
			?>
		
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
				<div class="item" onclick="location='<?php echo get_permalink(); ?>'" style="background-image: url('<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url();} ?>') ">
					<div class="item-inf">
						<div class="post-inf">
							<h4><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
						</div>

						<div class="post-btn">
							<a href="<?php echo get_permalink(); ?>" class="btn input tcenter">View Project</a>

							<div class="arrow">
							<svg width="40" height="16" viewBox="0 0 40 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="svg-arrow" d="M1 7.99988L39 7.99988M39 7.99988L31 1.00012M39 7.99988L31 14.9999" stroke="#DA291C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile;?>

		</div>

		<?php 
		while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; 
		?>
	</div>

</div>


<?php get_footer(); ?>