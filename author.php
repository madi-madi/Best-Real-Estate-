<?php get_header();?>




 <?php //the_author_meta('user_login');

//var_dump(get_currentuserinfo());
//echo get_query_var('author_name');
 ?>


<!-- Start Content-->
<main class="container author ">

	
	<div class="row ">

<div class="col-xs-12 similar-rew text-center"> This post was written by  The <?php echo get_query_var('author_name'); ?>  </div>

<?php 


	$args= array(

		'post_type'=>array('apartment', 'villa', 'store' , 'land'),
		'posts_per_page'=>6,
		//'author_name'=> the_author_meta('nickname'),
		/*'category_name'=>'real-estate-rent',*/
		/*'offset'=>1*/
		//'author'=> get_query_var('author'),
		'author__in '=>array(get_query_var('author')),
		);
$rew_post = new WP_Query($args);
/*
echo "<pre>";
print_r($args);
echo "</pre>";
exit();*/

if ($rew_post->have_posts()) {
	# code...
	while ($rew_post->have_posts()) {

		# code...
		$rew_post->the_post();
		?>

	
               <!-- start content-rew-post-->
     <article class="col-sm-4">
           <div class="thumbnail img-thumb-bg">
           <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-responsive' ) );?>
               <div class="overlay"></div>
               <div class="caption">

                   <div class="title"><a href="#"><?php the_title();?></a></div>

                   <div class="content">
                      <?php the_excerpt("");?>
                   <div class="tag"><a href="<?php the_permalink();?>" class="more-details ">more-details..</a></div>
                   </div>


                                      <div class="clearfix meta">
                       <span class="meta-data"> 
                       <i class="glyphicon glyphicon-user"></i> <?php get_the_author_link()?></span>
                       <span class="meta-data"><a href=""><i class="glyphicon glyphicon-map-marker">
                       </i> <?php echo get_post_meta(get_the_ID(), 'address_flat' , true);?></a></span> 
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

	echo "<h1> Not Found Posts </h1>";
}

/*
if (get_previous_posts_link()) {
	# code...
	previous_posts_link('Prev');
}else{
	echo "No Previous";
}

if (get_next_posts_link()) {
	# code...
	next_posts_link('Next');
}else{
	echo "No Next";
}
*/

 next_posts_link( 'Older Entries »'); 

?>







	</div>

	<!-- end row -->
</main>
<!-- End Content -->
<?php get_footer();?>