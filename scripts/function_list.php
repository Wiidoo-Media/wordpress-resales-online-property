<?php
function foo_add_query_var($vars) {
    $vars[] = 'P_RefId';
    return $vars;
}
add_filter('query_vars', 'foo_add_query_var');

function rohsigma_w3css() {

    wp_register_style('rohsigma_w3css', plugins_url('w3.css',__FILE__ ), array(), null, 'all');
    wp_enqueue_style('rohsigma_w3css');
   // wp_enqueue_style( 'rohsigma_w3css', plugins_url('scripts/w3.css', $deps, $ver, $media );
    wp_register_style('wiidoo_jqueryui', plugins_url('../style/jquery-ui.css',__FILE__ ), array(), null, 'all');
    wp_enqueue_style('wiidoo_jqueryui');   // wp_enqueue_style( 'wiidoo_w3css', plugins_url('scripts/w3.css', $deps, $ver, $media );
    
    wp_register_style('wiidoo_multiselect', plugins_url('../style/select2.min.css',__FILE__ ), array(), null, 'all');
    wp_enqueue_style('wiidoo_multiselect');   // wp_enqueue_style( 'wiidoo_w3css', plugins_url('scripts/w3.css', $deps, $ver, $media );
}

add_action('wp_enqueue_scripts','rohsigma_w3css');

function rohsigma_fonta() {

    wp_register_style('rohsigma_fonta', plugins_url('../font-awesome/css/all.css',__FILE__ ), array(), null, 'all');
    wp_enqueue_style('rohsigma_fonta');
   // wp_enqueue_style( 'rohsigma_w3css', plugins_url('scripts/w3.css', $deps, $ver, $media );
}

add_action('wp_enqueue_scripts','rohsigma_fonta');

function wp_lineawesome_fix() {
   wp_dequeue_style( 'line-awesome-vendor' );
}
add_action( 'wp_print_styles', 'wp_lineawesome_fix', 100 );

