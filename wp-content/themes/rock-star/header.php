<?php
/**
 * The default template for displaying header
 *
 * @package Catch Themes
 * @subpackage Rock Star
 * @since Rock Star 0.3
 */

	/**
	 * rock_star_doctype hook
	 *
	 * @hooked rock_star_doctype -  10
	 *
	 */
	do_action( 'rock_star_doctype' );?>

<head>
<?php
	/**
	 * rock_star_before_wp_head hook
	 *
	 * @hooked rock_star_head -  10
	 *
	 */
	do_action( 'rock_star_before_wp_head' );

	wp_head(); ?>
	

	<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/dd4960d31b.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<script>
	
		$(document).ready(function () {
			
			$(".fa.fa-chevron-right").click(function () {
					if($(".hover-container-2").is(":visible")) {
						$(".hover-container-3").css("display", "block");
						$(".hover-container").css("display", "none");
						$(".hover-container-1").css("display", "none");
						$(".hover-container-2").css("display", "none");
						 $('html, body').animate({scrollTop:0}, 'slow');
						
					}
				}); 
			
				$(".fa.fa-chevron-right").click(function () {
					if($(".hover-container-1").is(":visible")) {
						$(".hover-container-2").css("display", "block");
						$(".hover-container-1").css("display", "none");
						$(".hover-container").css("display", "none");
						$(".hover-container-3").css("display", "none");
						$('html, body').animate({scrollTop:0}, 'slow');
					}
				});
			
			
				$(".fa.fa-chevron-right").click(function () {
					if($(".hover-container").is(":visible")) {
						$(".hover-container").css("display", "none");
						$(".hover-container-1").css("display", "block");
						$(".hover-container-2").css("display", "none");
						$(".hover-container-3").css("display", "none");
						 $('html, body').animate({scrollTop:0}, 'slow');
					}
				}); 
			
				$(".fa.fa-chevron-left").click(function () {
					if($(".hover-container-1").is(":visible")) {
						$(".hover-container").css("display", "block");
						$(".hover-container-1").css("display", "none");
						$(".hover-container-2").css("display", "none");
						$(".hover-container-3").css("display", "none");
						 $('html, body').animate({scrollTop:0}, 'slow');

					}
				});
			
			
				$(".fa.fa-chevron-left").click(function () {
					if($(".hover-container-2").is(":visible")) {
						$(".hover-container").css("display", "none");
						$(".hover-container-1").css("display", "block");
						$(".hover-container-2").css("display", "none");
						$(".hover-container-3").css("display", "none");
						 $('html, body').animate({scrollTop:0}, 'slow');
					}
				});
			
			$(".fa.fa-chevron-left").click(function () {
					if($(".hover-container-3").is(":visible")) {
						$(".hover-container").css("display", "none");
						$(".hover-container-1").css("display", "none");
						$(".hover-container-2").css("display", "block");
						$(".hover-container-3").css("display", "none");
						$('html, body').animate({scrollTop:0}, 'slow');
						
					}
				});
			
				var wWidth = $(window).width();
			if(wWidth > 1025){
			$(".hover-img-container").click(function(){
			$(".div1nevidljivo").css("display", "block");
		});
			$(".hover-img-container-1").click(function(){
			$(".div2nevidljivo").css("display", "block");
		});
			$(".hover-img-container-2").click(function(){
			$(".div3nevidljivo").css("display", "block");
		});
			$(".hover-img-container-3").click(function(){
			$(".div4nevidljivo").css("display", "block");
		});
			$(".hover-img-container-4").click(function(){
			$(".div5nevidljivo").css("display", "block");
		});
			$(".hover-img-container-5").click(function(){
			$(".div6nevidljivo").css("display", "block");
		});
			$(".hover-img-container-6").click(function(){
			$(".div7nevidljivo").css("display", "block");
		});
			$(".hover-img-container-7").click(function(){
			$(".div8nevidljivo").css("display", "block");
		});	
			$(".hover-img-container-8").click(function(){
			$(".div9nevidljivo").css("display", "block");
		});
			$(".hover-img-container-9").click(function(){
			$(".div10nevidljivo").css("display", "block");
		});
			$(".hover-img-container-10").click(function(){
			$(".div11nevidljivo").css("display", "block");
		});
			$(".hover-img-container-11").click(function(){
			$(".div12nevidljivo").css("display", "block");
		});
			$(".hover-img-container-12").click(function(){
			$(".div13nevidljivo").css("display", "block");
		});
			$(".hover-img-container-13").click(function(){
			$(".div14nevidljivo").css("display", "block");
		});
			$(".hover-img-container-14").click(function(){
			$(".div15nevidljivo").css("display", "block");
		});
			$(".hover-img-container-15").click(function(){
			$(".div16nevidljivo").css("display", "block");
		});		
			$(".hover-img-container-16").click(function(){
			$(".div17nevidljivo").css("display", "block");
		});
			$(".hover-img-container-17").click(function(){
			$(".div18nevidljivo").css("display", "block");
		});
			$(".hover-img-container-18").click(function(){
			$(".div19nevidljivo").css("display", "block");
		});
			$(".hover-img-container-19").click(function(){
			$(".div20nevidljivo").css("display", "block");
		});
			$(".hover-img-container-20").click(function(){
			$(".div21nevidljivo").css("display", "block");
		});
			$(".hover-img-container-21").click(function(){
			$(".div22nevidljivo").css("display", "block");
		});
			$(".hover-img-container-22").click(function(){
			$(".div23nevidljivo").css("display", "block");
		});
			$(".hover-img-container-23").click(function(){
			$(".div24nevidljivo").css("display", "block");
		});
			$(".hover-img-container-24").click(function(){
			$(".div25nevidljivo").css("display", "block");
		});
			$(".hover-img-container-25").click(function(){
			$(".div26nevidljivo").css("display", "block");
		});
			$(".hover-img-container-26").click(function(){
			$(".div27nevidljivo").css("display", "block");
		});
			$(".hover-img-container-27").click(function(){
			$(".div28nevidljivo").css("display", "block");
		});
			}
		
			var wWidth = $(window).width();
			if(wWidth > 1025){
			$("span.belikruzic").click(function(){
			    $(".div1nevidljivo").css("display", "none");
				$(".div2nevidljivo").css("display", "none");
				$(".div3nevidljivo").css("display", "none");
				$(".div4nevidljivo").css("display", "none");
				$(".div5nevidljivo").css("display", "none");
				$(".div6nevidljivo").css("display", "none");
				$(".div7nevidljivo").css("display", "none");
				$(".div8nevidljivo").css("display", "none");
				$(".div9nevidljivo").css("display", "none");
				$(".div10nevidljivo").css("display", "none");
				$(".div11nevidljivo").css("display", "none");
				$(".div12nevidljivo").css("display", "none");
				$(".div13nevidljivo").css("display", "none");
				$(".div14nevidljivo").css("display", "none");
				$(".div15nevidljivo").css("display", "none");
				$(".div16nevidljivo").css("display", "none");
				$(".div17nevidljivo").css("display", "none");
				$(".div18nevidljivo").css("display", "none");
				$(".div19nevidljivo").css("display", "none");
				$(".div20nevidljivo").css("display", "none");
				$(".div21nevidljivo").css("display", "none");
				$(".div22nevidljivo").css("display", "none");
				$(".div23nevidljivo").css("display", "none");
				$(".div24nevidljivo").css("display", "none");
				$(".div25nevidljivo").css("display", "none");
				$(".div26nevidljivo").css("display", "none");
				$(".div27nevidljivo").css("display", "none");
				$(".div28nevidljivo").css("display", "none");
		});
				
	}			
});
			</script>
		
</head>

<body <?php body_class(); ?>>
<?php
	/**
     * rock_star_before_header hook
     *
     */
    do_action( 'rock_star_before' );

	/**
	 * rock_star_header hook
	 *
	 * @hooked rock_star_page_start -  10
	 * @hooked rock_star_site_inner_start -  20
	 * @hooked rock_star_header_start- 40
	 * @hooked rock_star_site_branding - 50
	 * @hooked rock_star_primary_menu - 80
	 * @hooked rock_star_header_end - 90
	 * @hooked rock_star_header_image_slider_start - 100
	 * @hooked rock_star_featured_image_display (before-slider) - 110
	 * @hooked rock_star_featured_slider - 120
	 * @hooked rock_star_featured_image_display (after-slider) - 130
	 * @hooked rock_star_header_image_slider_end - 140
	 * @hooked rock_star_news_ticker_display (below-slider/header-image) - 150
	 *
	 */
	do_action( 'rock_star_header' );

	/**
     * rock_star_after_header hook
     *
     */
	do_action( 'rock_star_after_header' );

	/**
	 * rock_star_before_content hook
	 * @hooked rock_star_featured_content_display_position - 10
	 * @hooked rock_star_before_content - 20
     * @hooked rock_star_add_breadcrumb - 30
	 * @hooked rock_star_featured_content_display (move featured content above homepage posts - default option) - 40
	 * @hooked rock_star_news_ticker_display - 50
	 */
	do_action( 'rock_star_before_content' );

	/**
     * rock_star_main hook
     *
     * @hooked rock_star_content_start - 10
     * @hooked rock_star_primary_start - 20
     * @hooked rock_star_featured_slider - 30
     * @hooked rock_star_main_start - 40
     */
	do_action( 'rock_star_content' );