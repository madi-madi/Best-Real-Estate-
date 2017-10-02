<?php /* Template Name: About Us */ 


	get_header();

?>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
            <?php
             dynamic_sidebar('about_us_description');

             ?>
    </div>
    <div class="row feature design">
      <div class="area1 columns right">
      <!-- Heading -->
            <?php
             dynamic_sidebar('clean_modern_design');

             ?>
      </div>
            <?php
             dynamic_sidebar('clean_modern_design_image');

             ?>
    </div>
    <div class="row dataTxt">	
						<div class="col-md-4 col-sm-6">
						<h4>What We Do?</h4>
            <?php
             dynamic_sidebar('what_we_do');

             ?>
						</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h4>Why Choose Us?</h4>
            <?php
             dynamic_sidebar('why_choose_us');

             ?>
							<!-- Accordion starts -->
							</div>
						
						
            <?php
             dynamic_sidebar('about_us_why_choose_us_what_we_do_image');

             ?>								
						
					</div>
  </div>
</section> 


<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
            <?php
             dynamic_sidebar('team_description');

             ?>
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <?php
             dynamic_sidebar('team_leader_img');

             ?>
            <!-- Member Details -->
            <div class="team-title">
            <?php
             dynamic_sidebar('team_leader_name');

             ?>
            <!-- Designation --> 
            
			</div>
            <div class="team-socials">
            <?php
             dynamic_sidebar('team_leader_socials');

             ?>            
             

              </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
                       <?php
             dynamic_sidebar('team_eman_img');

             ?>  
            <!-- Member Details -->
                       <?php
             dynamic_sidebar('team_eman');

             ?>  
            <!-- Designation --> 
  
            <div class="team-socials">
                       <?php
             dynamic_sidebar('team_eman_socials');

             ?>  
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
                       <?php
             dynamic_sidebar('team_nancy_img');

             ?>  
            <!-- Member Details -->
                       <?php
             dynamic_sidebar('team_nancy');

             ?>  
            <!-- Designation --> 
  
            <div class="team-socials">
                       <?php
             dynamic_sidebar('team_nancy_socials');

             ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>

<?php get_footer(); ?>