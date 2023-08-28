<?php

function regStyles() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('selfCss', get_template_directory_uri(), "./style.css", array('selfCssBootstrap'), $version, 'all');
    
    wp_enqueue_style('selfCssBootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    
    wp_enqueue_style('selfCssIcons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
} 
add_action('wp_enqueue_scripts', 'regStyles');

function regScripts() {

    wp_enqueue_script('regJQS', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);

    wp_enqueue_script('regPopper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);

    wp_enqueue_script('regStackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);

    wp_enqueue_script('regSelfJS', get_template_directory_uri(), "/assets/main.js", array(), '2.4', true);

} 
add_action('wp_enqueue_scripts', 'regScripts');


?>