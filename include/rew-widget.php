<?php
/**************************************************

Widget Register 

****************************************************/

//add_action('widgets_init','rew_register_footer_widgets');

    function rew_register_footer_widgets_contact_us(){
      $args=array(
         'name'=>'Contact us',
         'id'=>'contact_us',
         'before_widget' => '<div class="col">',
         'after_widget' => '</div>',
         'before_title' => "<h4>",
         'after_title'=>"</h4>"
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets_contact_us');


    ////

        function rew_register_footer_widgets_follow_us(){
      $args=array(
         'name'=>'Follow us',
         'id'=>'follow_us',
         'before_widget' => '<div class="col col-social-icons">',
         'after_widget' => '</div>',
         'before_title' => "<h4>",
         'after_title'=>"</h4>"
        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets_follow_us');



////

         function rew_register_footer_widgets_latest_news(){
      $args=array(
         'name'=>'Latest News',
         'id'=>'latest_news',
         'before_widget' => '<div class="col">',
         'after_widget' => '</div>',
         'before_title' => "<h4>",
         'after_title'=>"</h4>"

      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_widgets_latest_news');


////

// Copyrights Footer
            function rew_register_footer_Copyrights(){
      $args=array(
         'name'=>'Copyrights Footer',
         'id'=>'copyrights_footer',
         'before_widget' => '<div class="col-sm-12 text-center">',
         'after_widget' => '</div>',
         'before_title' => "",
         'after_title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_register_footer_Copyrights');

    //end Copyrights footer

/***********************************************

About us- widget  

************************************************/

// widget Description Team 
         function rew_about_us_description(){
      $args=array(
         'name'=>'About Us Description',
         'id'=>'about_us_description',
         'before_widget' => '',
         'after_widget' => '',
        'before-title' => "<h2>",
         'after-title'=>"</h2>"

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_description');
// end about us description 

  //Clean and Modern Design

         function rew_about_us_clean_modern_design(){
      $args=array(
         'name'=>'Clean and Modern Design',
         'id'=>'clean_modern_design',
         'before_widget' => '<p>',
         'after_widget' => '</p>',
                  'before-title' => "<h3>",
         'after-title'=>"</h3>"

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_clean_modern_design');

    // end Clean and Modern Design



  //Clean and Modern Design Image

         function rew_about_us_clean_modern_design_image(){
      $args=array(
         'name'=>'Clean and Modern Design Image',
         'id'=>'clean_modern_design_image',
         'before_widget' => '<div class="area2 columns feature-media left">',
         'after_widget' => '</div>',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_clean_modern_design_image');

    // end Clean and Modern Design Image 


    //What We Do? 


       function rew_about_us_what_we_do(){

      $args=array(
         'name'=>'What We Do?',
         'id'=>'what_we_do',
         'before_widget' => '<p>',
         'after_widget' => '</p>',
        'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_what_we_do');

    //end  What We Do? 


      //Why Choose Us ?

       function rew_about_us_why_choose_us(){

      $args=array(
         'name'=>'Why Choose Us ?',
         'id'=>'why_choose_us',
         'before_widget' => '<ul class="listArrow">',
         'after_widget' => '</ul>',
        'before-title' => "<p>",
         'after-title'=>"</p>"

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_why_choose_us');

    //end  What We Do? 


          //Why Choose Us ?

       function rew_about_us_why_choose_us_what_we_do_image(){

      $args=array(
         'name'=>'Why Choose Us , What We Do Image ?',
         'id'=>'about_us_why_choose_us_what_we_do_image',
         'before_widget' => '<div class="col-md-4 col-sm-6">',
         'after_widget' => '</div>',
        'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_why_choose_us_what_we_do_image');

    //end  What We Do? 

// widget Description Team 
         function rew_about_us_team_description(){
      $args=array(
         'name'=>'Team Description',
         'id'=>'team_description',
         'before_widget' => '',
         'after_widget' => '',
                  'before-title' => "<h2>",
         'after-title'=>"</h2>"

      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_description');

// widget  Team Leader  Name 

         function rew_about_us_team_leader_name(){
      $args=array(
         'name'=>'Team Leader Name',
         'id'=>'team_leader_name',
         'before_widget' => '<h4> ',
         'after_widget' => '</h4>',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_leader_name');

// widget  Team  leader image 
         function rew_about_us_team_leader(){
      $args=array(
         'name'=>'Team Leader Image ',
         'id'=>'team_leader_img',
         'before_widget' => '<div class="member-img"> ',
         'after_widget' => '</div',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_leader');

// widget Team Leader Socials

         function rew_about_us_team_leader_socials(){
      $args=array(
         'name'=>'Team Leader Socials ',
         'id'=>'team_leader_socials',
         'before_widget' => '',
         'after_widget' => '',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_leader_socials');


    //end leader


    // eman 


// widget  Team Leader  Name 

         function rew_about_us_team_eman_name(){
      $args=array(
         'name'=>'Team - Eman',
         'id'=>'team_eman',
         'before_widget' => '<h4> ',
         'after_widget' => '</h4>',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_eman_name');

// widget  Team  leader image 
         function rew_about_us_team_eman(){
      $args=array(
         'name'=>'Team -Eman Image ',
         'id'=>'team_eman_img',
         'before_widget' => '<div class="member-img"> ',
         'after_widget' => '</div',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_eman');

// widget Team Leader Socials

         function rew_about_us_team_eman_socials(){
      $args=array(
         'name'=>'Team - Eman Socials ',
         'id'=>'team_eman_socials',
         'before_widget' => '',
         'after_widget' => '',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_eman_socials');

    //end eman 


    // eman 


// widget  Team Nancy  

         function rew_about_us_team_nancy_name(){
      $args=array(
         'name'=>'Team - Nancy',
         'id'=>'team_nancy',
         'before_widget' => '<h4> ',
         'after_widget' => '</h4>',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_nancy_name');

// widget  Team  Nancy image 
         function rew_about_us_team_nancy(){
      $args=array(
         'name'=>'Team -Nancy Image ',
         'id'=>'team_nancy_img',
         'before_widget' => '<div class="member-img"> ',
         'after_widget' => '</div',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_nancy');

// widget Team Nancy Socials

         function rew_about_us_team_nancy_socials(){
      $args=array(
         'name'=>'Team - Nancy Socials ',
         'id'=>'team_nancy_socials',
         'before_widget' => '',
         'after_widget' => '',
                  'before-title' => "",
         'after-title'=>""

        );
      register_sidebar($args);
    } 


    add_action('widgets_init','rew_about_us_team_nancy_socials');