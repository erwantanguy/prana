<?php get_header(); ?>
    
			<div id="sousmenu"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Accueil') ) ?>
			<?php wp_nav_menu( array( 
				'theme_location' => 'compagnie',
				'depth' => 1,
				'container' => 'nav',
				'container_id' => 'widget_sidebar'
			) ); ?></div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php query_posts(array('ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), 'showposts'=>1)); while (have_posts()) : the_post(); ?>
        	<li data-target="#myCarousel" data-slide-to="<?php the_ID(); ?>" class="active"></li>
        <?php endwhile; ?>
		
        <?php query_posts(array('ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), 'showposts'=>7,'offset'=>1)); while (have_posts()) : the_post(); ?>
        	<li data-target="#myCarousel" data-slide-to="<?php the_ID(); ?>" class=""></li>
        <?php endwhile; ?>
      </ol>
      <div class="carousel-inner">
      	
       <?php query_posts(array('ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), 'showposts'=>1)); while (have_posts()) : the_post(); ?>
        <div class="item active">
          <?php the_post_thumbnail(''); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="<?php the_permalink(); ?>"><?php
							$category = get_the_category();
							echo $category[0]->cat_name;
						?></a> <?php //the_date('Y-m-d'); ?></h1>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        
        <?php query_posts(array('ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), 'showposts'=>7, 'offset'=>1)); while (have_posts()) : the_post(); ?>
        <div class="item">
          <?php the_post_thumbnail(''); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="<?php the_permalink(); ?>"><?php
							$category = get_the_category();
							echo $category[0]->cat_name;
						?></a> <?php //the_date('Y-m-d'); ?></h1>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

			<section>
				<h2>LES ACTUALITES</h2>
				  <?php query_posts(array(/*'ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'),*/ 'showposts'=>20,'orderby'=>'post_date','order' => 'ASC', 'tag'=>'michel-lestrehan+accueil')); ?>
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
							?></a> <?php //the_date('Y-m-d'); ?></h1>
						</header>
						<div class="content">
							<?php echo $category[0]->description; ?>
						</div>
					</article>
					<?php endwhile;wp_reset_query(); ?>
				</div>
				<!-- query_posts(array('post_in'=>get_option('sticky_posts'), 'showposts'=>7,'orderby'=>rand)); 'tag=brigitte-chataignier&showposts=10'   array('post_in'=>get_option('sticky_posts'), 'showposts'=>10, 'tag'=>'brigitte-chataignier')-->
				<?php query_posts(array(/*'ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), */'showposts'=>20,'orderby'=>'post_date','order' => 'ASC', 'tag'=>'brigitte-chataignier+accueil')); ?>
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
							?></a> <?php //the_date('Y-m-d'); ?></h1>
						</header>
						
						<div class="content">
						<?php echo $category[0]->description; ?>	
						</div>
					</article>
					<?php endwhile;wp_reset_query(); ?>
				</div>
			</section>


      <!-- FOOTER -->
      <?php get_footer(); ?>
      
      
<?php //query_posts(array('ignore_sticky_posts' => 1,'post__in'=>get_option('sticky_posts'), 'orderby'=>rand));?>
<?php //while (have_posts()) : the_post(); ?>
<?php
//$category = get_the_category();
//echo $category[0]->cat_name;
?>
<?php //endwhile;wp_reset_query(); ?>