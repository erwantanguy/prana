<?php get_header(); ?>

<section>
	<header>
		<figure>
			 <?php foreach (get_the_terms(get_the_ID(), 'post_tag') as $tag) : ?>
			 	<img src="<?php echo z_taxonomy_image_url($tag->term_id, 'medium'); ?>" />
			 <?php endforeach; ?>
 <!--<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(NULL, 'thumbnail'); ?>" />-->
		</figure>
	
		<h1><?php single_tag_title(); ?></h1>
	</header>
<!-- Début de la Boucle. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
 <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
 <!-- Sinon, le bloc div reçoit la classe CSS "post". -->
 <?php if ( in_category('3') ) { ?>
           <div class="post-cat-three">
 <?php } else { ?>
           <article class="post">
 <?php } ?>
<header>
	<figure>
		<?php the_post_thumbnail('thumbnail'); ?>
	</figure>
 <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
 <h1><a href="<?php the_permalink(); ?>"><?php
							$category = get_the_category();
							echo $category[0]->cat_name;
						?></a></h1>
</header>

 <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
 <div class="content">
   <?php echo $category[0]->description; ?>
 </div>
 </article> <!-- Fin du premier bloc div -->

 <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
 <?php endwhile; else: ?>

 <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
 <!-- partie "else" indique que faire si ce n'est pas le cas. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- Fin REELLE de La Boucle. -->
 <?php endif; ?>
 </section>
<?php get_footer(); ?>