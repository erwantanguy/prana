/**
 * @author Erwan
 */
jQuery(document).ready( function () {
	//jQuery('body').hide();
	if (window.matchMedia("(min-width: 991px)").matches) {
  		/*jQuery('nav span').css("cursor","pointer");
		jQuery('#main-nav>dt').next('dd').hide();
		jQuery('#main-nav>dt.on').next('dd').show();
		jQuery('#main-nav>dt').css("cursor","pointer");
		jQuery("#main-nav>dt").click(function(){
			jQuery(this).next('dd').toggle().siblings('dd').hide(300);
		});*/
	} else {
	  //jQuery('nav span').css("cursor","pointer");
		//jQuery('nav>span').next('div').hide();
		jQuery("nav>span").click(function(){
			jQuery(this).next('div').toggle();
		});
	}
		
})