<?php /* Template Name: fornt-page */ ?>
<?php get_header()?>
<div id="#top"></div>



<!-- search here -->

<?php get_search_form();?>


<!-- end  search here --> 


<section id="work" class="page-section page">
  <div class="container text-center">

    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active" data-filter="*" href="">All</a> </li>
            <li> <a data-filter=".apartment" href=""> Apartments</a>  </li>
            <li> <a data-filter=".villa" href="">Villas</a> </li>
            <li> <a data-filter=".land" href="">Lands</a> </li>
            <li> <a data-filter=".store" href="">Store</a> </li>
          </ul>
          <div class="  items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">


<?php 

$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
  $args= array(

    'post_type'=>array('apartment', 'villa','land' , 'store'),
    //'posts_per_page'=>2,
    /*'category_name'=>'real-estate-rent',*/
    /*'offset'=>1*/
   // 'paged' => $paged,
    //'page' => $paged,


    );
$rew_post = new WP_Query($args);
/*
echo "<pre>";
print_r($rew_post);
echo "</pre>";
exit();*/
if ($rew_post->have_posts()) {
  # code...
  while ($rew_post->have_posts()) {

    # code...
    $rew_post->the_post();
    ?>




               <!-- start content-rew-post-->
     <article class=" item col-sm-4 col-xs-12

       <?php if (get_post_type()== 'apartment') {
              # code...
          echo "apartment";  }elseif (get_post_type()== 'villa') {
            # code...
            echo "villa";
          }elseif (get_post_type()== 'land') {
            # code...
            echo "land";
          }elseif (get_post_type()== 'store') {
            # code...
            echo "store";
          }?> " style="position: absolute; left: 0px; top: 0px;">
               <!-- start content-rew-post-->
     
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
                      <i class="fa fa-user fa-fw" aria-hidden="true"></i><?php ucfirst(the_author_posts_link());?></a></span>
                       <span class="meta-data"><a href=""><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i><?php echo ucfirst(get_post_meta(get_the_ID(), 'main_address' , true));?></a></span> 
                       <span class="meta-data"><a href="<?php echo get_post_type_archive_link(get_post_type()) ?>"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><?php echo ucfirst(get_post_type());   ?></a></span> 
                       <span class="meta-data"><a href=""><i class="fa fa-usd" aria-hidden="true"></i><?php echo get_post_meta(get_the_ID(), 'rew_price' , true); ?>
                        </a></span> 
                   </div>
           
               </div>
           <figcaption class="rent"><?php the_category(' ')?></figcaption>
           </div>

           </article>     
        <?php
}



          wp_reset_postdata();

}else{

  echo "<h1> Not Found Posts </h1>";
}



        ?>
       
          </div>
        </div>
      </div>

    </div>
  </div>
</section>





<?php get_footer()?>