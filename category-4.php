<?php get_header(); ?>
			
			<section>
				
					<header>
						<h1><?php single_cat_title(); ?></h1>
					</header>
					<?php
					$category_id = $wp_query->query_vars['cat'];
					// The Query
					query_posts( 'order=ASC&cat='.$category_id );
					
					// The Loop
					while ( have_posts() ) : the_post(); ?>
					<article>
				        <header>
				        	<figure>
								<?php the_post_thumbnail('thumbnail'); ?>
							</figure>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				        </header>
				        <div class="content">
							<?php the_excerpt(); ?> 
						</div>
					</article>
					<?php endwhile;
						
						// Reset Query
						wp_reset_query();
					?>
							
				
			</section>

<?php get_footer(); ?>