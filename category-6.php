<?php get_header(); ?>
			
			<section>
				
					<header>
						<h1><?php single_cat_title(); ?></h1>
					</header>
					<?php
				        //global $wp_query;
				    	$category_id = $wp_query->query_vars['cat'];
				    ?>
				    <?php foreach (get_categories(array('child_of'=>$category_id)) as $cat) : ?>
					<article>
				        <header>
				        	<figure><img src="<?php echo z_taxonomy_image_url($cat->term_id, 'thumbnail'); ?>" alt="<?php echo $cat->cat_name; ?>" /></figure>
							<h1><?php
              					$args = 'cat=' . $cat->term_id . '&showposts=1&order=ASC';
              					query_posts( $args );
			  					while ( have_posts() ) : the_post(); ?><a href="<?php the_permalink(); ?>"><?php endwhile;
								wp_reset_query(); echo $cat->cat_name; ?></a></h1>
				        </header>
				        <div class="content">
							<?php echo $cat->description; ?>
						</div>
					</article>
					<?php endforeach; ?>
				
				
			</section>

<?php get_footer(); ?>