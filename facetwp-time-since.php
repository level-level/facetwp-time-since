<?php
/*
Plugin Name: FacetWP - Time Since
Plugin URI: https://facetwp.com/
Description: "Time Since" facet
Version: 1.3
Author: FacetWP, LLC
GitHub URI: facetwp/facetwp-time-since
*/

defined( 'ABSPATH' ) or exit;

include( dirname( __FILE__ ) . '/github-updater.php' );

/**
 * WordPress init hook
 */
add_action( 'init' , 'fwpts_init' );


/**
 * Intialize facet registration and any assets
 */
function fwpts_init() {
    add_filter( 'facetwp_facet_types', 'fwpts_facet_types' );
}


/**
 * Register the facet type
 */
function fwpts_facet_types( $facet_types ) {
    include( dirname( __FILE__ ) . '/time_since.php' );
    $facet_types['time_since'] = new FacetWP_Facet_Time_Since();
    return $facet_types;
}
