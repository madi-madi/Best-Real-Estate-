<?php
/// Servises 
/*

************************************************
  Register Taxonomy Servises Tags

************************************************
*/

function rew_genreic_taxonomy(){

	$args= array(
		'label'=>'Services'
		);
	register_taxonomy( 'services', array('apartment', 'villa', 'land', 'store'), $args );
}

	add_action('init','rew_genreic_taxonomy');

/*

************************************************
  Register custom post Apartment

************************************************
*/

function add_rew_apartment()
{
	$lables = array(
			'name' => 'Apartments',
			'singular_name'=>'Apartment',
			'rewrite'  => array( 'slug' => 'apartment' ),
			'all_items'=> 'All Apartments',
			'add_new'=>'Add New Apartment',
			'add_new_item'=>' Add New Apartment',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		//'show_in_admin_bar'=>true,
	//	'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'query_var'          => true,
    'show_in_rest'          => true,
    'rest_base'             => 'apartments',
    'rest_controller_class' => 'WP_REST_Posts_Controller',

		);	
	register_post_type('Apartment', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_apartment');

//


/*************************************************
  Register custom post Villa

************************************************
*/

function add_rew_villa()
{
	$lables = array(
			'name' => 'Villas',
			'singular_name'=>'Villa',
			'rewrite'  => array( 'slug' => 'villa' ),
			'all_items'=> 'All Vills',
			'add_new'=>'Add New Villa',
			'add_new_item'=>' Add New Villa',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,
    'show_in_rest'          => true,
    'rest_base'             => 'villas',

		);	
	register_post_type('Villa', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_villa');

//



/*************************************************
  Register custom post Land

************************************************
*/

function add_rew_land()
{
	$lables = array(
			'name' => 'Lands',
			'singular_name'=>'Land',
			'rewrite'  => array( 'slug' => 'land' ),
			'all_items'=> 'All Lands',
			'add_new'=>'Add New Land',
			'add_new_item'=>' Add New Land',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' , 'custom-fields' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,
    'show_in_rest'          => true,
    'rest_base'             => 'land',

		);	
	register_post_type('Land', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_land');

//


/*************************************************
  Register custom post Store

************************************************
*/

function add_rew_store()
{
	$lables = array(
			'name' => 'Stores',
			'singular_name'=>'Store',
			'rewrite'  => array( 'slug' => 'store' ),
			'all_items'=> 'All Stores',
			'add_new'=>'Add New Store',
			'add_new_item'=>' Add New Store',
    

		 );

	$tax = array(

					'category',

					
		);
	$args = array(
		'labels'=> $lables,
		'public'=>true,
		'show_in_menu'=>true,
		'show_in_admin_bar'=>true,
		'show_in_nav_menus'=>true,
		'description'=>'Enter your Description',
		'menu_position'=>10,
		'menu_icon'=>'dashicons-format-quote',
		'taxonomies'=>$tax,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'query_var'          => true,
    'show_in_rest'          => true,
    'rest_base'             => 'Stores',

		);	
	register_post_type('Store', $args);
	//add_action('init' , 'codex_custom_init');
	
}

add_action('init' , 'add_rew_store');

//



/*
************************************************
  Register custom fielde in post

************************************************
*/


function address_input(){
	$main_address = get_post_meta(get_the_ID(), 'main_address' , true);
	//echo $address_flat;
	//exit;
	?>
	<fieldset>
  <select class="col-xs-12 form-control" id="main_address" name="main_address">

    <option value=""> Main Location</option>
    
    <option data-value="gaza" value="gaza" <?php selected( $main_address, 'gaza' ); ?>>Gaza</option>
    <option data-value="" value="nosirat" <?php selected( $main_address, 'nosirat' ); ?>>Nosirat</option>
    <option data-value="der-Al-balh" value="der-al-ballh"<?php selected( $main_address, 'der-al-ballh' ); ?>>Der Al-ballh</option>
    <option data-value="khanyouns" value="khanyouns"<?php selected( $main_address, 'khanyouns' ); ?>>Khan Youns</option>
    <option data-value="rafah" value="rafah" <?php selected( $main_address, 'rafah' ); ?>>Rafah</option>
  </select>
	<?php
}

function address_district_input(){
	$district_address = get_post_meta(get_the_ID(), 'district_address' , true);
	//echo $address_flat;
	//exit;
	?>
	<fieldset>
		<select class="col-xs-12" id="district_address" name="district_address">

    <option value=""> District</option>
    <option value="" class="gaza"> <b>Gaza : </b></option>
    <option value="sheikh-ajlin" class="gaza" <?php selected( $district_address, 'sheikh-ajlin' ); ?> >Sheikh Ajlin</option>
    <option data-value="tal-al-hawa" value="tal-al-hawa" class="gaza" <?php selected( $district_address, 'tal-al-hawa' ); ?> >Tal Al-Hawa</option>
    <option value="al-ramla" class="gaza" <?php selected( $district_address, 'al-ramla' ); ?> >Al-Ramla</option>
    <option value="al-sahaa" class="gaza" <?php selected( $district_address, 'al-sahaa' ); ?> >Al-Sahaa</option>
    <option value="zaytoun" class="gaza" <?php selected( $district_address, 'zaytoun' ); ?> >Zaytoun</option>
     <option value="jabalia" class="gaza" <?php selected( $district_address, 'jabalia' ); ?> >Jabalia</option>
     <option value="alnasr" class="gaza" <?php selected( $district_address, 'alnasr' ); ?> >Al-Nasr</option>
     <option value="al-shaffa" class="gaza" <?php selected( $district_address, 'al-shaffa' ); ?> >Al-Shaffa</option>
     <option value="al-shajaeia" class="gaza" <?php selected( $district_address, 'al-shajaeia' ); ?> >Al-shajaeia</option>
     <option value="al-mueaskar" class="gaza" <?php selected( $district_address, 'al-mueaskar' ); ?> >Al-mueaskar</option>
     <option value="al-shshati" class="gaza" <?php selected( $district_address, 'al-shshati' ); ?> >Al-shshati</option>
     <option value="sheikh-radwan" class="gaza" <?php selected( $district_address, 'sheikh-radwan' ); ?> >Sheikh Radwan</option>
     <option value="al-jala" class="gaza" <?php selected( $district_address, 'al-jala' ); ?> >Al-jala</option>
    <option value="nosirat" <?php selected( $district_address, 'nosirat' ); ?> >Nosirat</option>
    <option value="der-al-balh" <?php selected( $district_address, 'der-al-balh' ); ?> >Der Al-balh</option>
    <option value="" class="khanyouns"  > <b>Khan Youns : </b></option>
    <option value="al-qarara" class="khanyouns" <?php selected( $district_address, 'al-qarara' ); ?> >Al-Qarara</option>
    <option value="bani-suhaila" class="khanyouns" <?php selected( $district_address, 'bani-suhaila' ); ?> >Bani Suhaila</option>
    <option value="rafah" class="rafah"  ><b>Rafah :</b></option>
    <option value="al-balad" class="rafah" <?php selected( $district_address, 'al-balad' ); ?> >Al-balad</option>
    <option value="musabah" class="rafah" <?php selected( $district_address, 'musabah' ); ?> >Musabah</option>
  </select>
	</fieldset>
	<?php
}


function rew_floors(){
	$rew_floor = get_post_meta(get_the_ID(), 'rew_floor' , true);
	?>

		<fieldset>
		<label for="address_rew" > Floor Number </label>
		<input type="number" name="rew_floor" id="rew_floor" value="<?php echo $rew_floor; ?>">
	</fieldset>
	<?php
}


function rew_rooms(){
	$rew_rooms = get_post_meta(get_the_ID(), 'rew_rooms' , true);
	?>

		<fieldset>
		<label for="address_rew" > Rooms Number </label>
		<input type="number" name="rew_rooms" id="rew_rooms" value="<?php echo $rew_rooms; ?>">
	</fieldset>
	<?php
}



function rew_area(){
	$Apartment_area = get_post_meta(get_the_ID(), 'Apartment_area' , true);
	?>

		<fieldset>
		<label for="address_rew" >  Esatate Area </label>
		<input type="number" name="Apartment_area" id="Apartment_area" value="<?php echo $Apartment_area; ?>">
	</fieldset>
	<?php
}



function rew_price(){
	$rew_price = get_post_meta(get_the_ID(), 'rew_price' , true);
	?>

		<fieldset>
		<label for="address_rew" > Real Estate Price </label>
		<input type="number" name="rew_price" id="rew_price" value="<?php echo $rew_price;  ?>">
	</fieldset>
	<?php
}

/// villa garden 
function rew_garden(){
	$rew_garden = get_post_meta(get_the_ID(), 'rew_garden' , true);
	?>

		<fieldset>
		<label for="address_rew" > Garden </label>
		<input type="radio" name="rew_garden" id="rew_garden" value="Garden" <?php if($rew_garden == 'Garden') echo 'checked';  ?>> 
				<label for="address_rew" > None Garden </label>
		<input type="radio" name="rew_garden" id="rew_garden" value="None-Garden" <?php if($rew_garden == 'None-Garden') echo 'checked';  ?> > 
	</fieldset>
	<?php
}

/*

************************************************
  function  used to add meta box in custom post 

************************************************
*/


function address_meta_box()
{

	add_meta_box('main_address', 'Address Real Estate' , 'address_input',  array('apartment', 'villa','land' , 'store') , 'advanced' , 'high',null);

	add_meta_box('district_address', 'District Real Estate' , 'address_district_input',  array('apartment', 'villa','land' , 'store') , 'advanced' , 'high',null);
		add_meta_box('rew_floor', 'Floor Number' , 'rew_floors', array('apartment', 'villa')  , 'advanced' , 'high',null);
		add_meta_box('rew_rooms', 'Rooms Number' , 'rew_rooms',array('apartment', 'villa')  , 'advanced' , 'high',null);
		add_meta_box('Apartment_area', 'Real Estate Area' , 'rew_area', array('apartment', 'villa','land' , 'store')  , 'advanced' , 'high',null);
	add_meta_box('rew_price', 'Real Estat Price' , 'rew_price', array('apartment', 'villa','land' , 'store')  , 'advanced' , 'high',null);

	/// villa rew_garden
	add_meta_box('rew_garden', 'Garden Real Estate' , 'rew_garden',  array( 'villa') , 'advanced' , 'high',null);

}


add_action('add_meta_boxes' , 'address_meta_box');

/// end function  used to add meta box in custom post 


/*

************************************************
  function  used to add meta box in custom post 

************************************************
*/

function  save_rew_meta_box_input($rew_id)
{

	if (isset($_POST['main_address'])){
		
		update_post_meta($rew_id , 'main_address', $_POST['main_address']);
	}

	if (isset($_POST['district_address'])){
		
		update_post_meta($rew_id , 'district_address', $_POST['district_address']);
	}

	if (isset($_POST['rew_rooms'])){
		
		update_post_meta($rew_id , 'rew_rooms', $_POST['rew_rooms']);
	}


	if (isset($_POST['rew_floors'])){
		
		update_post_meta($rew_id , 'rew_floors', $_POST['rew_floor']);
	}
	if (isset($_POST['Apartment_area'])){
		
		update_post_meta($rew_id , 'Apartment_area', $_POST['Apartment_area']);
	}

	if (isset($_POST['flat_type'])){
		
		update_post_meta($rew_id , 'flat_type', $_POST['flat_type']);
	}

	if (isset($_POST['rew_price'])){
		
		update_post_meta($rew_id , 'rew_price', $_POST['rew_price']);
	}



		// villa rew_garden
	if (isset($_POST['rew_garden'])){
		
		update_post_meta($rew_id , 'rew_garden', $_POST['rew_garden']);
	}

}

add_action('save_post' , 'save_rew_meta_box_input');

//  end function save value with custom post 
