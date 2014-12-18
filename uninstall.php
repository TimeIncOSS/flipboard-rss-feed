<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Flipboard_RSS_Feed
 * @author    Jonathan Harris <jonathan.harris@timeinc.com>
 * @license   GPL-2.0+
 * @link      http://www.jonathandavidharris.co.uk/
 * @copyright 2014 Time Inc. (UK) Ltd
*/

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

