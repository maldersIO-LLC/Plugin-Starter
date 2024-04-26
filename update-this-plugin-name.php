<?php
/**
* Plugin Name: Add PluginName
* Plugin URI: https://github.com/maldersIO/Plugin-Starter
* Description: This is the maldersIO plugin starter complete with Admin Dash Update Fucntionality
* Version: 1.0.0
* Author: maldersIO
* Author URI: https://malders.io/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* PluginName Start */
//______________________________________________________________________________


//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/Plugin-Starter',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'Plugin-Starter'
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
/* PluginName End */
?>
