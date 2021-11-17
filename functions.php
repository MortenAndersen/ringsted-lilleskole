<?php


// CSS
function web_child_enqueue_styles() {
    wp_enqueue_style( 'web', get_template_directory_uri() . '/style.css' , array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'web' ), filemtime(get_template_directory() . '/style.css'), false);
}
add_action( 'wp_enqueue_scripts', 'web_child_enqueue_styles' );


// Header style
function web_header_style() {
    echo 'a-center';
}

// Menu desktop align
function web_menu_pos()
    {
        echo 'left-align';
    }


    

function ringsted_intra_link() {
    echo '<nav class="intranet-menu">';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Li" target="_blank" class="intra">PersonaleIntra</a>';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Fi" target="_blank" class="intra">ForældreIntra</a>';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Pi" target="_blank" class="intra">ElevIntra</a>';

     

        echo '<div class="top-search">';
        get_search_form();
        echo '</div>';

        echo '<div class="social">';
        echo '<a href="https://www.facebook.com/ringstedlilleskole" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/facebook.svg" alt="Facebook"></a>';
        echo '</div>';

    echo '</nav>';
}

// Social Icon

function web_social_menu()
    { }

// Google fonts
add_action( 'wp_enqueue_scripts', 'my_google_fonts' );
function my_google_fonts() {
    wp_enqueue_style( 'my-google-fonts', 'https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400;600&display=swap', false ); 
}