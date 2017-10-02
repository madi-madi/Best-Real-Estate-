<?php get_header();?>



<?php

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( have_posts() ) {

  while ( have_posts() ) {
    the_post();
    the_content();
  }
  
  /* Restore original Post Data */
  wp_reset_postdata();
} else {
  // no posts found
}
?>


<?php get_footer();?>