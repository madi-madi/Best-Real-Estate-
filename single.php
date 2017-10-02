
<?php 





get_header();


  get_search_form();

?>



<!-- Start Content-->
<main class="container  " >

<div class="row">



      <?php
      /* Start the Loop */
      while ( have_posts() ) {
       the_post();


     
      ?>
      <div class="col-xs-12">
          <h2> <?php the_title() ?> </h2>
        <ol class="breadcrumb">
  <li><a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> <?php echo ucfirst( get_post_meta(get_the_ID(),'main_address' , true)); ?></a> </li>
    <li><a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> <?php echo ucfirst( get_post_meta(get_the_ID(),'district_address' , true)); ?></a> </li>
  <li><a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i> <?php the_author_posts_link()?></a> </li>
  <li class=""><a href="<?php echo get_post_type_archive_link(get_post_type()) ?>"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> <?php echo ucfirst(get_post_type());   ?></a></li>
   <li class=""><a href="#"><span class="fa fa-tags fa-fw"></span> <?php the_category(' ')   ?></a></li>
    <li class=""><a href="#"><i class="fa fa-plus-square-o fa-fw" aria-hidden="true"></i> <?php echo get_post_meta(get_the_ID(), 'Apartment_area' , true);?> <sup>m<sup>2</sup></sup> </a></li>
     <li class="">      <?php if (get_post_type() != 'land') {
        # code...

          ?>
                <a href="#"><i class="fa fa-columns fa-fw" aria-hidden="true"></i> Rooms : <?php echo get_post_meta(get_the_ID(), 'rew_rooms' , true);?> </a>
          <?php

      }

       ?></li>
</ol>
      </div>
      <div class="col-xs-12">
	<div class="col-sm-4 col-xs-12 pull-right">
		<!-- start Slider info-->
<div id="map" ></div>
		<!-- End Slider info-->
	</div>

	<div class="col-sm-8 col-xs-12 more-info">
		<h3> <?php the_title() ?>  <span class="pull-right price">  <?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?> <sup>$</sup></span></h3>

     <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
		<div class="Description-rew col-sm-12 ">
<?php the_content();
 ?>
		</div>



		</div>
</div>
<?php
}

  ?>



	</div>








	<div class="row page-info ">

<div class="col-xs-12 similar-rew text-center"> Similar Real Estate </div>

	 <div class="col-lg-12 col-md-12 col-sm-12 all-post">

<?php
  

 //print_r(wp_get_post_categories(get_queried_object_id()));
   // print_r(get_post_type(get_the_ID()));
   // exit();

  $arrgs_rand = array(
                    
                      'post_type'=>get_post_type(get_the_ID()),
                    'orderby'      => 'rand',
                    'category__in' => wp_get_post_categories(get_queried_object_id()),
                    'post__not_in' => array(get_queried_object_id()),
                    'posts_per_page'=>3,

    );


      $article_array_rand = new WP_Query($arrgs_rand);
 /*    echo "<pre>";
print_r($article_array_rand);
echo "</pre>";
exit();*/
      if ($article_array_rand->have_posts()) {
      while ( $article_array_rand->have_posts() ) {
       $article_array_rand->the_post();


     
      ?>


               <!-- start content-rew-post-->
     <article class="col-sm-4">
           <div class="thumbnail img-thumb-bg">
           <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
               <div class="overlay"></div>
               <div class="caption">

                   <div class="title"><a href="#"><?php the_title();?></a></div>

                   <div class="content">
                      <?php strip_tags(the_excerpt(""));?>
                   <div class="tag"><a href="<?php the_permalink();?>" class="more-details ">more-details..</a></div>
                   </div>


                                      <div class="clearfix meta">
                       <span class="meta-data"> 
                       <i class="fa fa-map-marker" aria-hidden="true"></i> <?php get_the_author_link()?></span>
                       <span class="meta-data"><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>  <?php echo get_post_meta(get_the_ID(), 'main_address' , true);?></a></span> 
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-ok-circle">
                       </i> Villa </a></span> 
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-usd"></i>
                        <?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?>
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
      <style>
      #map {
        width: ;
        height: 400px;
        background-color: grey;
      }
    </style>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAk-adYligmF_feOPJdXXQDYCfGpE1NJco &callback=initMap">
    </script>
  <script>
  var labels = 'Gaza';
      function initMap() {
        //var uluru = {lat: 31.529396, lng: 34.479741};
                var uluru = {lat: <?php echo get_post_meta(get_the_ID(), 'address_map' , true)['lat']; ?> ,
         lng: <?php echo get_post_meta(get_the_ID(), 'address_map' , true)['lng']; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: uluru,



        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,


        });
      }
    </script>

<?php get_footer();?>
