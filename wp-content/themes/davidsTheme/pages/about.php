<?php// Template Name: about?>

 <?php wp_head(); ?>
 <?php get_header(); ?>
<div class="about-wrap">
	<div class="about-thumb-wrap">
		<img src="<?php the_field('about-image'); ?>" alt="">
	</div>

	<?php 
		if ( have_posts() ) {
		    while ( have_posts() ) {
		        the_post(); 
		        the_content();
		    } // end while
		} // end if
	?>

	
</div>
 
		
	

	

<?php get_footer(); ?>