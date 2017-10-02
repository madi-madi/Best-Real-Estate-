<?php

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
   // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

include 'include/rew-script.php';



require_once('include/rew-custom-post.php');

require_once ('include/menu-nav.php');

require_once ('include/rew-widget.php');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


// Register YAMM Navigation Walker
///require_once('yamm-nav-walker.php');

/*

************************************************
  support featur Image : add image main post or cover 

************************************************
*/
add_theme_support( 'post-thumbnails' ); 

/* end image */



/***********************************************
 Mail
***********************************************/



// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 587;
    $phpmailer->Username = 'shoppingt277@gmail.com';
    $phpmailer->Password = 'shop123456';

    // Additional settings…
    $phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
  //  $phpmailer->From = 'shoppingt277@gmail.com';
   // $phpmailer->FromName = "3karatcom";
}

//print_r(my_phpmailer_example($phpmailer));
/*
add_action( 'phpmailer_init', 'mailer_config', 10, 1);
function mailer_config(PHPMailer $mailer){
  $mailer->IsSMTP();
  $mailer->Host = get_option('admin_email'); // your SMTP server
  $mailer->Port = 587;
  $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
  $mailer->CharSet  = "utf-8";
}
 */


/*

************************************************

query var Search   /// return value for input  filde

************************************************
*/

function add_query_vars_filter( $vars ){
  $vars[] = "search_name";
  $vars[] = "address";
  $vars[] = "district";
  $vars[]="category";
  $vars[]="property_type";
  $vars[]="min_room";
  $vars[]="max_room";
  $vars[]="min_price";
  $vars[]="max_price";
  $vars[]="min_area";
  $vars[]="max_area";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

///// end function search return  value with form 




/*

************************************************

function return just 20 chart in p 

************************************************
*/

function pargraph_custom_excerpt_length( $lenght){

  return 9;
}
add_filter('excerpt_length','pargraph_custom_excerpt_length',999);

// end  function  excerpt length

 
/*

************************************************
   functiion Excerpt More 
   filter the excerpt "read more " string 

************************************************
*/

function paragraph_excerpt_more($more)
{
  return '';/// return read more default [...] -> change to null or link  read more
}

add_filter('excerpt_more', 'paragraph_excerpt_more');

// End Function  Excerpt more 

/*

************************************************

query var Search   /// return value for input  filde

************************************************
*/



/*************************************************************

Custom logo

*************************************************************/

//add_theme_support( 'custom-logo' ); 1

/*add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
) ); 2*/

function theme_prefix_setup() {
  
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-width' => true,
  ) );

}

add_action( 'after_setup_theme', 'theme_prefix_setup' );



/*************************************************************

pagintation Site function  ibrahim-

*************************************************************/


function rew_pagination(){

  global $wp_query;


  $all_pages = $wp_query->max_num_pages;


  $current_page = max(1, get_query_var('page'));

  if ($all_pages > 1) {
    # code...
    return paginate_links(array(

      'base'    => get_pagenum_link(). '%_%',
      'format'  => 'page/%#%',
      'current' => $current_page,
      'total'   => $all_pages

      ));
  }
}




/**************************************************

change logo login

**************************************************/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/#.png);
    height:80px;
    width:80px;
    border-radius: 50%;
    /*background-size: 320px 65px;*/
    background-repeat: no-repeat;
          /*padding-bottom: 30px;*/
        }


    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/***************************************************
remove logo  admin bar

***************************************************/

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
  $wp_admin_bar->remove_node( 'wp-logo' );
}


//



//register



add_action('register_form' , 'rew_registration_form_estat');

function rew_registration_form_estat(){

  ?>
  <p>
  <label for="phone"> Phone</label>
  <input type="number" name="phone" id="phone" required class="input" value size="10" />
  </p>

  <?php


}



/***************************************

    rew update_user_meta

***************************************/





add_action('user_register' , 'rew_user_register');

function rew_user_register( $rew_user_id){

   if (! empty($_POST['phone'])) {
    # code...


    update_user_meta($rew_user_id , 'phone', trim($_POST['phone']));
   }

}



/***/

function wpmu_signup_user( $user, $user_email, $meta = array() ) {
    global $wpdb;
 
    // Format data
    $user = preg_replace( '/\s+/', '', sanitize_user( $user, true ) );
    $user_email = sanitize_email( $user_email );
    $key = substr( md5( time() . wp_rand() . $user_email ), 0, 16 );

    $meta = apply_filters( 'signup_user_meta', $meta, $user, $user_email, $key );
 
    $wpdb->insert( $wpdb->signups, array(
        'domain' => '',
        'path' => '',
        'title' => '',
        'user_login' => $user,
        'user_email' => $user_email,
        'registered' => current_time('mysql', true),
        'activation_key' => $key,
        'meta' => serialize( $meta )
    ) );
 

    do_action( 'after_signup_user', $user, $user_email, $key, $meta );
}



/************************************************

Role user and redirect 

*************************************************/


/*
function rew_user_login_redirect( $redirect_to, $request, $rew_user ) {
  //is there a user to check?
  if ( isset( $rew_user->roles ) && is_array( $rew_user->roles ) ) {
    //check for admins
    if ( in_array( 'administrator', $rew_user->roles ) ) {
      // redirect them to the default place
      return $redirect_to;
    } else {
     
    }
  } else {
    return $redirect_to;
  }
}
add_filter( 'login_redirect', 'rew_user_login_redirect', 10, 3 );
*/


/****/

//if ( ! is_user_logged_in() ) { // Display WordPress login form:
 //   $args = array(
   //     'redirect' => home_url('user-profile'), 
      /*  'form_id' => 'loginform-custom',
        'label_username' => __( 'Username custom text' ),
        'label_password' => __( 'Password custom text' ),
        'label_remember' => __( 'Remember Me custom text' ),
        'label_log_in' => __( 'Log In custom text' ),
        'remember' => true*/
  //  );
   // wp_login_form(  );
//} else { // If logged in:
 //   wp_loginout( home_url() ); // Display "Log Out" link.
  //  wp_register('', ''); // Display "Site Admin" link.
//}

/***

add text after or under filde password

****/

/*
add_action( 'login_form', 'login_extra_note' );

function login_extra_note() {

    //Adding the text

    ?>
    <p>You can type a little note to those logging in here.</p>

    <?php
}


add_filter( 'login_errors', function( $error ) {
  global $errors;
  $err_codes = $errors->get_error_codes();

  // Invalid username.
  // Default: '<strong>ERROR</strong>: Invalid username. <a href="%s">Lost your password</a>?'
  if ( in_array( 'invalid_username', $err_codes ) ) {
    $error = '<strong>ERROR</strong>: Invalid username.';
  }

  // Incorrect password.
  // Default: '<strong>ERROR</strong>: The password you entered for the username <strong>%1$s</strong> is incorrect. <a href="%2$s">Lost your password</a>?'
  if ( in_array( 'incorrect_password', $err_codes ) ) {
    $error = '<strong>ERROR</strong>: The password you entered is incorrect.';
  }

  return $error;
} );
*/
/*
function add_login_logout_register_menu( $items, $args ) {
 if ( $args->theme_location != 'primary' ) {
 return $items;
 }
 
 if ( is_user_logged_in() ) {
 $items .= '<li><a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a></li>';
 } else {
 $items .= '<li><a href="' . wp_login_url() . '">' . __( 'Login In' ) . '</a></li>';
 $items .= '<li><a href="' . wp_registration_url() . '">' . __( 'Sign Up' ) . '</a></li>';
 }
 
 return $items;
}
 
add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );*/
/*

add_filter( 'wp_nav_menu_secondary_items','wpsites_loginout_menu_link' );

function wpsites_loginout_menu_link( $menu ) {
    $loginout = wp_loginout($_SERVER['REQUEST_URI'], false );
    $menu .= $loginout;
    return $menu;
}
*/

/*****************

remove or hide admin bar in user 

******************/

/*
if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( true );
}
*/


//ini_set( 'mysql.trace_mode', 0 );