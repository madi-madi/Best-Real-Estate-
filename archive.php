<?php get_header();?>


<!-- Start Content-->
<main class="container ">

	<div class="row  " >

<div class="col-xs-12 similar-rew text-center"> Real Estate Type  <?php echo ucfirst(get_post_type()); ?>  </div>
		
	
  
	
		 <div class=" col-xs-12">
     <?php


      /* Start the Loop */
      $args = array(
        'post_type'=>get_post_type(),
    //	'category_name'=>'rent',
        'posts_per_page'=>9,


      	);
      $article_array = new WP_Query($args);
   /*   echo "<pre>";
print_r($article_array);
echo "</pre>";
exit();*/
      if ($article_array->have_posts()) {
      while ( $article_array->have_posts() ) {
       $article_array->the_post();


     
      ?>



           		 <!-- start content-rew-post-->
		 <article class="col-sm-4 col-xs-12">
           <div class="thumbnail img-thumb-bg">
           <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
               <div class="overlay"></div>
               <div class="caption">

                   <div class="title"><a href="#"><?php the_title();?></a></div>

                   <div class="content">
                     <?php the_excerpt()?>
                   <div class="tag"><a href="<?php the_permalink();?>" class="more-details ">more-details..</a></div>
                   </div>


                                      <div class="clearfix meta">
                       <span class="meta-data"> <a href="">
                      <i class="fa fa-user fa-fw" aria-hidden="true"></i><?php the_author_posts_link()?></a></span>
                       <span class="meta-data"><a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(), 'main_address' , true);?></a></span> 
                       <span class="meta-data"><a href=""><i class="fa fa-globe fa-fw" aria-hidden="true"></i><?php echo ucfirst(get_post_type());   ?></a></span> 
                       <span class="meta-data"><a href=""><i class="fa fa-usd" aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?>
                        </a></span> 
                   </div>
           
               </div>
           <figcaption class="rent"><?php the_category(' ')?></figcaption>
           </div>

           </article>

           <!-- end content-rew-post-->

           <?php
       }
 wp_reset_postdata();
   }else{

   	echo "<h1> Sorry Not Found  </h1>";
   }
    

    ?>

                   </div>
		






	</div>

	<!-- end row -->

</main>
<!-- End Content -->


<?php get_footer()?>