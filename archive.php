<?php get_header(); ?>
<div id="sousmenu"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Accueil') ) ?>
			<?php wp_nav_menu( array( 
				'theme_location' => 'compagnie',
				'depth' => 1,
				'container' => 'nav',
				'container_id' => 'widget_sidebar'
			) ); ?></div>
    
<?php get_footer(); ?>