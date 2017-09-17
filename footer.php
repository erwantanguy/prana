<footer>
				<?php //if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer') ) ?>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</footer>
			<?php wp_footer(); ?>
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
   			<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
    		<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/docs.min.js"></script>
    		<script src="<?php echo get_template_directory_uri(); ?>/monjs.js""></script>
		<script>
			//jQuery(document).ready(function(){
				//$(".carousel-indicators > li:first-child").addClass('active');
				//$(".carousel-inner .item").addClass('active');
			//});
		</script>
	</body>
</html>
