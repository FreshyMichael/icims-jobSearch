<?php
/**
* Plugin Name: iCIMS Job Search
* Plugin URI: https://github.com/FreshyMichael/icims-jobSearch
* Description: Add Shortcodes for Advantus Federal iCIMS Job Search
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* iCIMS Job Search Start */
//______________________________________________________________________________
//WP Enqueue Styles
function icims_styles() {
    $dir = plugin_dir_url(__FILE__);
    wp_enqueue_style('icims-styles', $dir . 'includes/css/style.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts','icims_styles' );

function include_the_JobSearch_shortcode(){
	
	define('PLUGIN_DIR' , dirname(__FILE__).'/');

	include 'includes/icimsFullSearch.php';
	include 'includes/icimsSimpleSearch.php';
	
}
add_action('after_setup_theme' , 'include_the_JobSearch_shortcode');

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/icims-jobSearch',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'icims-jobSearch'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* iCIMS Job Search End */
?>
