<!-- Start Our Navbar -->


			<nav class="navbar navbar-default navbar-inverse ">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar-right" id="ournavbar">

	    	     	          <ul class="nav navbar-nav pull-right">
	           
	           <?php

	            $user_info = wp_get_current_user();
	           if (is_user_logged_in()) {
	
	           		           	?>
	        
	  	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> <?php echo $user_info->user_login ?> <span class="caret"></span></a>
	           <ul class="dropdown-menu">
	           
	           <li> <a href="<?php echo esc_url( home_url( '/user-profile' ) ); ?>"><?php echo $user_info->user_login ?></a> </li>
	           <li> <?php wp_loginout(); ?> </li>
	           </ul>
	           	<?php
	           

	           }else{

	           		           	?>
	           <li> <?php wp_loginout(); ?> </li>
	           <li> <a href="<?php echo wp_registration_url(); ?>">Register</a> </li>
	           	<?php

	           }

	           ?>
	          </ul>

	    <?php 
	    wp_nav_menu( array(
								'theme_location' => 'rew-top-menu',
							//	'container'=>'div',
							//	'container_class'=>'collapse navbar-collapse navbar-right',
							//	'container_id'=>'ournavbar',
								'menu_class'=>'nav navbar-nav navbar-right',
								'menu_id'=>'',
								'depth'             => 6,

        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
        'class'=>'pull-left'

	));

	      



	     ?>

	     
	     </div>
	  </div>   <!-- End of  Container-->
	</nav>


	    
 <!-- End Our Navbar-->
