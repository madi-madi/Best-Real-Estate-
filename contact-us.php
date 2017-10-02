<?php /* Template Name: Contact Us */ 

get_header('contact-us');

?>




<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
        </div>
     
    <div class="col-sm-2"></div>  <div class="col-sm-8  mrgn30 ">
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
      </div>
    </div>
    <!--/.container--> 
  </div>
  </div>


</section>


<?php get_footer(); ?>