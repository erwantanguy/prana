<?php get_header(); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<article>
					<header>
						<figure>
							<?php the_post_thumbnail('vignette'); ?>
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/prana/images/bande_haut.png" class="bande" />
						</figure>
						<h1><?php the_title(); ?></h1>
						<h2><?php
							$category = get_the_category();
							echo $category[0]->cat_name;
						?></h2>
					</header>
					
					<div id="content">
						<?php the_content(); ?>
					</div>
					
					<menu>
						<?php
						  //Obtenir la catégorie
						  global $wp_query;
						$cats = get_the_category();
						  $postAuthor = $wp_query->post->post_author;
						$tempQuery = $wp_query;
						  $currentId = $post->ID;
						 
						// La catégorie du billet affiché
						  $catlist = "";
						  forEach( $cats as $c ) {
						  if( $catlist != "" ) { $catlist .= ","; }
						  $catlist .= $c->cat_ID;
						  }
						  $newQuery = "posts_per_page=100&order=ASC&cat=" . $catlist;
						//Choisir un nombre qui sera le nombre moins un (10 pour afficher 9 titres)
						  query_posts( $newQuery );
						$categoryPosts = "";
						  $count = 0;
						if (have_posts()) {
						  while (have_posts()) {
						  the_post();
						  if( $count<100 && $currentId!=$post->ID) {
						  // maximum 100 titres mais vous pouvez adapter
						  $count++;
						  $categoryPosts .= '<li><a href="' . get_permalink() . '">' . the_title( "", "", false ) . '</a></li>';
						  }
						  }
						  }
						  $wp_query = $tempQuery;
						  ?>
						 
						  <img src="<?php echo get_option('home'); ?>/wp-content/themes/prana/images/cil1.png" alt="séparateur" />
						<ul class="widget-container">
						<?php echo $categoryPosts; ?>
						</ul>
					</menu>
					
				</article>
				<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</section>

<?php get_footer(); ?>