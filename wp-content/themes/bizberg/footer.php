<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizberg
 */

do_action( 'bizberg_footer_top' );

bizberg_get_footer(); ?>

<div class="full-screen-search" style="display: none;">
	<div class="search-box-wrap">
		<div class="searchform" role="search">
			<?php get_search_form(); ?>
			<a href="javascript:void(0)" class="close">
				<i class="fas fa-times"></i>
			</a>
		</div>
	</div>
</div>

<!-- start Back To Top -->
<div id="back-to-top">
    <a href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end Back To Top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	var page = location.href.split("/").slice(1)[3]; 
	console.log(page);
	if(page === '' || page === '#'){
		var initialSrc = "http://localhost/wordpress/wp-content/uploads/2021/03/logo.png";
		var scrollSrc = "http://localhost/wordpress/wp-content/uploads/2021/03/logo_blue.png";
	}else{
		var initialSrc = "http://localhost/wordpress/wp-content/uploads/2021/03/logo_blue.png";
		var scrollSrc = "http://localhost/wordpress/wp-content/uploads/2021/03/logo_blue.png";
	}
	

	$(window).scroll(function() {
	var value = $(this).scrollTop();
	if (value > 60)
		$(".site_logo").attr("src", scrollSrc);
	else
		$(".site_logo").attr("src", initialSrc);
	});
</script>
<?php wp_footer(); ?>





</body>
</html>
