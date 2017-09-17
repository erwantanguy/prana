<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>
<div id="sousmenu"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Accueil') ) ?>
			<?php wp_nav_menu( array( 
				'theme_location' => 'compagnie',
				'depth' => 1,
				'container' => 'nav',
				'container_id' => 'widget_sidebar'
			) ); ?></div>
			<h1>Calendrier</h1>
	<div id="tribe-events-pg-template">
		<?php tribe_events_before_html(); ?>
		<?php tribe_get_view(); ?>
		<?php tribe_events_after_html(); ?>
	</div> <!-- #tribe-events-pg-template -->
<?php get_footer(); ?>