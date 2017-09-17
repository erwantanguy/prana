<?php get_header(); ?>
<section>
	<header>
		<figure>
			<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" alt="<?php echo $cat->cat_name; ?>" />
			<img src="<?php bloginfo('url'); ?>/wp-content/themes/prana/images/bande_haut.png" class="bande" />
		</figure>
		<h1><?php single_cat_title(); ?></h1>
	</header>
<?php $category_id = $wp_query->query_vars['cat']; ?>
	<div id="description">
		<?php echo category_description(); ?> 
	</div>
	<div id="menu_cat">
		<?php
			// The Query
			query_posts( 'order=ASC&cat='.$category_id );
			
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			    <article>
			    	<header>
			    		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			    	</header>
			    	<div id="content">
						<?php //the_content(); ?>
					</div>
			    </article>
			<?php endwhile;
			
			// Reset Query
			wp_reset_query();
		?>
	</div>
</section>


<?php get_footer(); ?>