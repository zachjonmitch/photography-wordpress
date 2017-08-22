<?php

add_action( 'wp_ajax_nopriv_load_more', 'load_more');
add_action( 'wp_ajax_load_more', 'load_more');

function load_more() {
    
    $paged = $_POST["page"];
    echo $paged;

    die();

}