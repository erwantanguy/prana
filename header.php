<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<title><?php if ( is_404() ) : ?><?php _e('Not Found') ?> - <?php bloginfo('name') ?><?php elseif ( is_home() ) : ?><?php bloginfo('name') ?> - <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
  

		

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/carousel.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/font/stylesheet.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class( $class); ?>>
			<header>
				<figure><a href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></figure>
				<h1 id="header"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<nav>
				<span>spectacles</span>
				<?php wp_nav_menu( array( 'theme_location' => 'gauche' ) ); ?>
				</nav>								
				<nav><span>pédagogie</span><?php wp_nav_menu( array( 'theme_location' => 'droite' ) ); ?></nav>
			</header>
			