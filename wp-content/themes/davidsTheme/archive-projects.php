<?php get_header(); ?>


	

	<?php
$args = array(
	'post_type' => 'projects',
	'post_per_page' => -1,
	'post_status' => 'publish'
);

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); ?>
		<div class=" thumbnail-wrap col-xs-6 col-md-3 ">
		    <a href="<?php the_permalink(); ?>" class="thumbnail">

		      <?php the_title(); ?>
		    </a>
		</div>
	<?php
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
?>	
	
























<?php get_footer(); ?>