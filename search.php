<?php /* Template Name: Search  */

	get_header();
	get_search_form();
?>



<!-- Start Content-->
<main class="container " id="search-result" style="margin-top: 100px">
	<div class="row ">
    <div class="col-xs-12">
      
       <h2 class="lead">Search Result here  about <span class="search-result" style="color:#0d84ea;"><?php echo ucfirst($property_type); ?></span> ..... </h2>

    </div>



<?php

$search_name = get_query_var('search_name' , null);
$address     = get_query_var('address', null);
$district     = get_query_var('district', null);
$category     = get_query_var('category', null);
$property_type     = get_query_var('property_type',null);
$min_room     = get_query_var('min_room', null);
$max_room     = get_query_var('max_room', null);
$min_price     = get_query_var('min_price', null);
$max_price     = get_query_var('max_price', null);
$min_area     = get_query_var('min_area', null);
$max_area     = get_query_var('max_area', null);



?>



<?php

//echo '<h1>'.is_null($max_price).'</h1> '. '<h1>'.isset($min_price).'</h1> ';

///  check min price and max price with search form
if ($min_price != ''  && $max_price != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
  // echo "Done min";
  // exit();

          $max_min_search =
    array(
      'relation'=>'and',
          array(
   'key'=> 'rew_price',
       'value'=> $min_price,
      'compare'=> '>=',
      'type'=>'NUMERIC'
        ),

          array(
   'key'=> 'rew_price',
       'value'=> $max_price,
      'compare'=> '<=',
      'type'=>'NUMERIC'
        ),
        ); 

}elseif ( $max_price != '') {
  // echo "Done max";
  // exit();
  
  $max_min_search =
    array(
      'relation'=>'and',
          array(
   'key'=> 'rew_price',
       'value'=> $max_price,
      'compare'=> '<=',
      'type'=>'NUMERIC'
        ),
        ); 

}else{
  // echo "Done all";
  // exit();

        $max_min_search =
    array(
      'relation'=>'and',

          array(
   'key'=> 'rew_price',
       'value'=> $min_price,
      'compare'=> '>=',
      'type'=>'NUMERIC'
        ),
        ); 
      }


    //  $search_array = $max_min_search;


///


      

///  check min rooms and max rooms with search form
if ($min_room != ''  && $max_room != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
  // echo "Done min";
  // exit();

          $max_min_rooms =
      array(

        'relation'=>'and',

      array(
   'key'=> 'rew_rooms',
      'value'=> $min_room,
       'compare'=> '>=',
       'type'=>'NUMERIC'
        ),

       array(
 'key'=> 'rew_rooms',
       'value'=> $max_room,
       'compare'=> '<=',
       'type'=>'NUMERIC'
        ),
        ); 

}elseif ( $max_room != '') {
  // echo "Done max";
  // exit();
  
  $max_min_rooms =
      array(

        'relation'=>'and',
       array(
 'key'=> 'rew_rooms',
       'value'=> $max_room,
       'compare'=> '<=',
       'type'=>'NUMERIC'
        ),
        );

}elseif($min_room != ''){
  // echo "Done all";
  // exit();

        $max_min_rooms =
      array(

        'relation'=>'and',

      array(
   'key'=> 'rew_rooms',
      'value'=> $min_room,
       'compare'=> '>=',
       'type'=>'NUMERIC'
        ),


        ); 
      }


    //  $search_array = $max_min_search;

///  check min area and max area with search form
if ($min_area != ''  && $max_area != ''   ) {
//echo '<h1>'.$max_price.'</h1> '. '<h1>'.$min_price.'</h1> ';
  // echo "Done min";
  // exit();

          $max_min_area =
      array(

        'relation'=>'and',

      array(
   'key'=> 'Apartment_area',
      'value'=> $min_area,
       'compare'=> '>=',
       'type'=>'NUMERIC'
        ),

       array(
 'key'=> 'Apartment_area',
       'value'=> $max_area,
       'compare'=> '<=',
       'type'=>'NUMERIC'
        ),
        ); 

}elseif ( $max_area != '') {
  // echo "Done max";
  // exit();
  
  $max_min_area =
      array(

        'relation'=>'and',
       array(
 'key'=> 'Apartment_area',
       'value'=> $max_area,
       'compare'=> '<=',
       'type'=>'NUMERIC'
        ),
        );

}elseif($min_area != ''){
  // echo "Done all";
  // exit();

        $max_min_area =
      array(

        'relation'=>'and',

      array(
   'key'=> 'Apartment_area',
      'value'=> $min_area,
       'compare'=> '>=',
       'type'=>'NUMERIC'
        ),

        ); 
      }


    //  $search_array = $max_min_search;

/*
function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', array( 'post', 'movie' ) );
    }
  }
}

add_action('pre_get_posts','search_filter');rew_rooms
*//*
if ($min_room !='' || $max_room !='') {
  $custom_post_search = array('apartment', 'villa', 'store' ,);
}else{
  $custom_post_search = array('apartment', 'villa', 'store' ,'land');
}
*/

//$custom_post_search = array('apartment', 'villa', 'store' ,'land');
if ($property_type =='apartment') {
  $custom_post_search = array('apartment');
}elseif ($property_type =='villa') {
  # code...
  $custom_post_search = array('villa');
}elseif ($property_type =='store') {
  # code...
  $custom_post_search = array( 'store');
}elseif ($property_type =='land') {
  # code...
  $custom_post_search = array('land');
}else{

  $custom_post_search = array('apartment', 'villa', 'store' ,'land');
}


if ($category !='') {

      $tax_query = array(

       // 'relation' => 'AND',
     array(
       'taxonomy' => 'category',
       'field' => 'term_id',
       'terms' => $category,
       'operator' => 'in'
     )
     );
}

$args = array(

    'post_type'=>$custom_post_search,
    //'relation'=> 'AND',
    's'=>$search_name,

  
    'meta_query'=>  array(
      'relation'=>'AND',
      array(
   'key'=> 'main_address',
       'value'=> $address,
      'compare'=> 'LIKE'
        ),

      array(
   'key'=> 'district_address',
       'value'=> $district,
      'compare'=> 'LIKE'
        ),

        $max_min_rooms,
      $max_min_search, 


        $max_min_area,
           



    ),

        $tax_query,

);


$result_search = new WP_Query($args);


/*
echo "<pre>";
print_r($args);
//exit();
echo '</pre>';
exit();
*/


if ($result_search->have_posts()) {


  while ($result_search->have_posts()) {
    $result_search->the_post();
    ?>
               <!-- start content-rew-post-->
     <article class="col-sm-4 col-xs-12">
           <div class="thumbnail img-thumb-bg">
           <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
               <div class="overlay"></div>
               <div class="caption">

                   <div class="title"><a href="#"><?php the_title();?></a></div>

                   <div class="content">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nulla porro qui quo expedita voluptas ab iure dolore.</p>
                   <div class="tag"><a href="<?php the_permalink();?>" class="more-details ">more-details..</a></div>
                   </div>


                                      <div class="clearfix meta">
                       <span class="meta-data"> <a href="">
                      <i class="fa fa-user fa-fw" aria-hidden="true"></i><?php ucfirst(the_author_posts_link());?></a></span>
                       <span class="meta-data"><a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i><?php echo ucfirst(get_post_meta(get_the_ID(), 'main_address' , true));?></a></span> 
                       <span class="meta-data"><a href=""><i class="fa fa-globe fa-fw" aria-hidden="true"></i><?php echo ucfirst(get_post_type());   ?></a></span> 
                       <span class="meta-data"><a href=""><i class="fa fa-usd" aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?>
                        </a></span> 
                   </div>
           
               </div>
           <figcaption class="rent"><?php the_category(' ')?></figcaption>
           </div>

           </article>
<?php
		# code...
	}
	# code...
}else{

	echo "<h1> No Items </h1>";
}

?>



	</div>

	<!-- end row -->
</main>
<!-- End Content -->





<?php get_footer(); ?>