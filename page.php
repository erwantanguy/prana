<?php get_header(); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<article>
					<header>
						<figure>
							<?php the_post_thumbnail(''); ?>
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/prana/images/bande_haut.png" class="bande" />
						</figure>
						<h1><?php the_title(); ?></h1>
						<nav><?php wp_nav_menu( array( 'theme_location' => 'compagnie' ) ); ?></nav>
					</header>
					<div class="content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</section>

<?php get_footer(); ?>