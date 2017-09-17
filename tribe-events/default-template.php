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

get_header();
?>
<section>
	<header>
	<?php if(is_single()){?>
		<figure>
			<?php the_post_thumbnail('vignette'); ?>
			<img src="<?php bloginfo('url'); ?>/wp-content/themes/prana/images/bande_haut.png" class="bande" />
		</figure>
	<?php }?>
		<h1>Calendrier</h1>
		<?php if(is_single()){?><?php the_title( '<h2 class="tribe-events-single-event-title summary entry-title">', '</h2>' ); ?><?php }?>
	</header>
</section>
<div id="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div> <!-- #tribe-events-pg-template -->
<?php
get_footer();
