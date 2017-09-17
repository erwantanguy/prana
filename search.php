<?php get_header(); ?>
<div id="sousmenu"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Accueil') ) ?>
			<?php wp_nav_menu( array( 
				'theme_location' => 'compagnie',
				'depth' => 1,
				'container' => 'nav',
				'container_id' => 'widget_sidebar'
			) ); ?></div>
<section>
	<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<li>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</ul>
			</section>

<?php get_footer(); ?>