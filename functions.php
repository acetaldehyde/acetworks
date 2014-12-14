<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function my_styles() {
    wp_enqueue_style( 'bootstrap', get_bloginfo( 'stylesheet_directory') . '/css/fixed.css', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'my_styles');