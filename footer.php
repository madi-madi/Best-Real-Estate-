<footer>
<div class="container">
        <div class="row">
            <div class="col-md-4">

<?php 
           
//dynamic_sidebar
dynamic_sidebar('contact_us');



 ?>
                 
            </div>
            
 
            
            <div class="col-md-4">
            <?php
             dynamic_sidebar('follow_us');

             ?>
            </div>

             <div class="col-md-4">
             	<div class="col">
            <?php
             dynamic_sidebar('latest_news');

             ?>
                </div>
            </div>
        </div>
         
    </div>
    <?php wp_footer();?>
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright Rights Save ©  <?php echo date('Y').' ';  bloginfo('name');?>  </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 


</body>
</html>
