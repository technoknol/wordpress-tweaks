<?php

/***************************************

This is simple code to register another menu in your wordpress theme.

Read instructions.


*****************************************/


// Add below code In your theme's function.php 
    function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );


// For registering Multiple Menus 
    function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
          'extra-menu' => __( 'Extra Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );


//  To call your registered menu put below code wherever you want to call menu.
//  Note that second argument in wp_nav_menu() is same exact used in register_nav_menus()
    
    if ( has_nav_menu( 'primary-menu' ) ) {    /* if menu location 'primary-menu' exists then use custom menu */
      wp_nav_menu( array( 'theme_location' => 'primary-menu') ); 
    }
    
    
//  More Customization to Menus 
//  Different Menus for Logged in Users.
    if ( is_user_logged_in() ) {
         wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) );
    } else {
         wp_nav_menu( array( 'theme_location' => 'logged-out-menu' ) );
    }
    
    
//   Remove the <UL> wrap around <LI>
    wp_nav_menu( array( 'items_wrap' => '%3$s' ) );

Sources : http://codex.wordpress.org/Navigation_Menus
          http://www.paulund.co.uk/how-to-register-menus-in-wordpress
          http://codex.wordpress.org/Function_Reference/wp_nav_menu





//  Source : http://codex.wordpress.org/Navigation_Menus
