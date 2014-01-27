<?php

/********************************

This code will allow you to create your own shortcode.


*************************************/

//  SHORTCODE FOR GOOGLE ADSENSE
        function google_adsense() {  
            return '<script type="text/javascript"><!-- 
            google_ad_client = "<em>your client id</em>"; 
            google_ad_slot = "<em>your ad slot id</em>"; 
            google_ad_width = <em>width</em>; 
            google_ad_height = <em>height</em>; 
            //--> 
            </script> 
            <script type="text/javascript" 
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> 
            </script> 
            ';  
        }  
          
        add_shortcode('adsense', 'google_adsense');
        
        // USE THIS CODE WHERE YOU WANT TO DISPLAY GOOGLE AD
        [adsense]
        
        
//  SHORT CODE FOR GIT
        function show_git($atts) {  
            extract(shortcode_atts(array('id' => null), $atts));
          
          	if( $id != null)   {
                return '<script src="http://gist.github.com/'.$id.'.js"></script>';
          	}
            }  
          
        add_shortcode('gist-git', 'show_git');
        
        // USE THIS CODE WHERE YOU WANT TO DISPLAY GIT | Real GIT Example
        [gist-git id=8559021]
        
