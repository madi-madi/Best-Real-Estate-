<?php
/// regestir menu
function rew_register_menu_nav(){

	 register_nav_menu( 'rew-top-menu','3karatcom top nav'  );
}

add_action( 'init', 'rew_register_menu_nav' ); // add action 1- init , name function


function rew_register_menu_footer(){

	 register_nav_menu( 'rew-footer-menu','3karatcom footer'  );
}

add_action( 'init', 'rew_register_menu_footer' ); // add action 1- init , name function


//wordpress add add active class
function special_nav_class ($classes, $item) {
	//var_dump($item);
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// add filter 
//1- nav_menu_css_class
// 2- name function
// 3- 10 , 6  

add_filter('nav_menu_css_class' , 'special_nav_class' ,10 , 6); 