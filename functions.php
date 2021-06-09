<?php

// CSS
function stc_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'stc_enqueue_styles' );


// Header style
function web_header_style() {
    echo 'a-center';
}

function ringsted_intra_link() {
    echo '<nav class="intranet-menu">';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Li" target="_blank" class="intra">PersonaleIntra</a>';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Fi" target="_blank" class="intra">ForældreIntra</a>';
        echo '<a href="http://www.ringsted-lilleskole.skoleintra.dk/Pi" target="_blank" class="intra">ElevIntra</a>';
        echo '<div class="social">';
        echo '<a href="https://www.facebook.com/ringstedlilleskole" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/facebook.svg" alt="Facebook"></a>';
    echo '</div>';
    echo '</nav>';
}

// Social Icon

function web_social_menu()
    { }
