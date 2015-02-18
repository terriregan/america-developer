<?php
/*
Plugin Name: America Developer
Plugin URI: 
Description: Plugin to temporarily house developer tools
Version: 0.1
Author:
Author URI: 
License: GPL2 or later
*/

/* 
Activate jetpacks's "development mode", so that features that do not require a connection to WordPress.com servers can be activated on a localhost WordPress installation for testing.
Activate via a plugin and not in the wp-config file so that it can be easily 
deactivated from remote server.
 */
add_filter( 'jetpack_development_mode', '__return_true' );

/**
* Another var_dump() alternative, for debugging use.
*
* @param mixed $data Data to be dumped on screen.
* @param boolean $exit Whether to terminate script after dump.
*/
function printr($data, $exit = TRUE) {
  if ($data) {
    print '<pre>';
    print_r($data);
    print '</pre>';
  }
  if ($exit) {
    exit;
  }
}
