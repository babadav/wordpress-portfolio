
<?php get_header(); ?>

<h1> <?php the_title(); ?> </h1>



<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		
	} // end while
} // end if
?>

<a href="<?php the_permalink(); ?>" > The Link</a>

<?php get_footer(); ?>

