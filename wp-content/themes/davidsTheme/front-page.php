

<?php get_header(); ?>
  <!-- content goes here -->


<div class="thumbnail-wrap">
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
      $the_query->the_post(); 
      $bgi = get_field('background_image');
      ?>
        <div class="thumbnail <?php the_field('class'); ?>" style="background-image: url(<?php echo $bgi; ?>); ">

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

</div>

<?php get_footer(); ?>

