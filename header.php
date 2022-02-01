<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	
	<title>Bvst Creative</title>

	<!-- Google Meta -->
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="keywords" content="bvst Studio, Creative Studio, Creative Design, bvst, Graphics Designer, Logo Designer, Branding, Web Designer">
	<meta name="robot" content="noindex, nofollow">
	<meta name="author" content="Brvi Studio">

	<!-- General Meta -->
	<link rel="icon" href="<?php	$custom_logo_id = get_theme_mod( 'custom_logo' );
									$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
									echo $image[0];?>" />
	
	<!-- Plugin JS -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/app/jQ/2.02.0/jquery.min.js"></script>
	<!-- General JS -->

	<!-- General CSS -->
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_bloginfo('template_directory'); ?>/visual/common.css" rel="stylesheet" type="text/css" />

	<!-- Typeface -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/fonts/redicon/redicon.css" rel="stylesheet" type="text/css" />

	<!-- Plugin CSS -->

</head>
<body>