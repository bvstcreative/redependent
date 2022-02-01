<?php get_header(); ?>

<div id="main">
	<div id="cover">
		
		<div id="cover-inf">
			<div id="menubar">
				<div class="logo">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo/logo.svg" alt="Logo">
				</div>
				<div class="lang-select">
					<span class="input active">EN</span>
					<span class="input">ID</span>
				</div>
			</div>
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