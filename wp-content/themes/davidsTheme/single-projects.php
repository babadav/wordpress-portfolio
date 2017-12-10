

<?php get_header(); ?>

	

<div class="single-page-wrap">
	<h1> <?php the_title(); ?> </h1>
	
	<div class="large-thumb">
		<img src="<?php the_field('project_thumbnail'); ?>" alt="...">
	</div>
	
	<p>
		<?php 
		if ( have_posts() ) {
		    while ( have_posts() ) {
		        the_post(); 
		        the_content();
		    } // end while
		} // end if
	?>
	</p>

	<a href="<?php the_field('project_url'); ?> " class="single-page-url">click to see full site</a>

	
</div>









<?php get_footer(); ?>