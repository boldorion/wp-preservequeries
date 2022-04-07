<?php
/*
Plugin Name: Preserve Queries
Description: Preserve and parse URL parameter queries through to links on the site.
Version: 1.0.1
Author: BoldOrion
Author URI: https://www.boldorion.com
Text Domain: boldorion
License: GNU
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/boldorion/wp-preservequeries',
    __FILE__,
    'preservequeries'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


function load_kq_script(){
    wp_register_script(
        'preserve',
        plugin_dir_url( __FILE__ ) . 'js/preserve.js',
        array( 'jquery' ),'',true
    );
    wp_enqueue_script( 'preserve' );
}
add_action('wp_enqueue_scripts', 'load_kq_script');
