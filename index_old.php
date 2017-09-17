<?php get_header(); ?>

			<div id="sousmenu"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Accueil') ) ?></div>
			<?php //wp_nav_menu( array( 'theme_location' => 'compagnie' ) ); ?>
			<div id="sliders">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					<ol class="carousel-indicators">
						 <?php foreach (get_categories() as $cat) : ?>
						 <li data-target="#carousel-example-generic" data-slide-to="<?php echo $cat->term_id; ?>"></li>
						 <?php endforeach; ?>
					</ol>
					
					  <!-- Wrapper for slides -->
					<div class="carousel-inner">
					<?php foreach (get_categories() as $cat) : ?>
						 <div class="item">
						 <img src="<?php echo z_taxonomy_image_url($cat->term_id, array(300, 300)); ?>" alt="<?php echo $cat->cat_name; ?>" />
						 <div class="carousel-caption"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a></div>					 
						 </div>
						 <?php endforeach; ?>
					</div>   
						   
						   
						   <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						  </a>
				</div>
			</div>
			
			
			
			
			<section>
				
				  <?php query_posts('tag=michel-lestrehan&showposts=10'); ?>
				<div id="michel">
				  <?php while (have_posts()) : the_post(); ?>
					<article>
						<header>
							<figure>
								<?php the_post_thumbnail('thumbnail'); ?> <!-- array(100, 100)  -->
							</figure>
							<h1><a href="<?php the_permalink(); ?>"><?php
								$category = get_the_category();
								echo $category[0]->cat_name;
							?></a></h1>
						</header>
						<div class="content">
							<?php echo $category[0]->description; ?>
						</div>
					</article>
					<?php endwhile;wp_reset_query(); ?>
				</div>
				<?php query_posts('tag=brigitte-chataignier&showposts=10'); ?>
				<div id="brigitte">
				  <?php while (have_posts()) : the_post(); ?>
					<article>
						<header>
							<figure>
								<?php the_post_thumbnail('thumbnail'); ?>
							</figure>
							<h1><a href="<?php the_permalink(); ?>"><?php
								$category = get_the_category();
								echo $category[0]->cat_name;
							?></a></h1>
						</header>
						
						<div class="content">
						<?php echo $category[0]->description; ?>	
						</div>
					</article>
					<?php endwhile;wp_reset_query(); ?>
				</div>
			</section>

<?php get_footer(); ?>