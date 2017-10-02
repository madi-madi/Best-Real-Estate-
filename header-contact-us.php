<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title><?php 

  bloginfo('name');
  wp_title('|','true','left');

  

    
  ?></title>
<meta name="description" content="">
<meta name="author" content="WebThemez">


<?php wp_head()?>
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="<?php bloginfo('url')?>" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-gaza-2.png" /></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">


       <ul  class="nav navbar-nav navbar-right">
         
         <li><?php wp_loginout(); ?></li>
<?php
         if (!is_user_logged_in()) {
          ?>
         <li> <a href="<?php echo wp_registration_url(); ?>">Register</a> </li>
         <?php
       }
         ?>
       </ul>
              <?php 
      wp_nav_menu( array(
                'theme_location' => 'rew-top-menu',
              //  'container'=>'div',
              //  'container_class'=>'collapse navbar-collapse navbar-right',
              //  'container_id'=>'ournavbar',
                'menu_class'=>'nav navbar-nav',
                'menu_id'=>'mainNav',
                'depth'             => 6,

        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
        'class'=>'pull-left'

  ));

        



       ?>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->

<section id="home">
<div class="banner-container" id="map" style="height: 500px;"> 


</div>
</section>

      <style>
      #map {
        width: ;
        height: 400px;
        background-color: grey;
      }
    </style>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBlfg6uuy4HHIr0-yOPW_qQt0HxinAqt2I &callback=initMap">
    </script>
  <script>
  var labels = 'Gaza';
      function initMap() {
        var uluru = {lat: 31.5129811, lng: 34.44534820000001};
 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru,



        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,


        });
      }
    </script>
