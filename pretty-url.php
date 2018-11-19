<?php
/**
 * MS-Studio Pretty URL
 * Plugin Name: MS-Studio Pretty URL
 * Plugin URI: https://github.com/ms-studio/pretty-url/
 * Description: Helper plugin for ACF URL field
 * Version: 1.0.0+build20181119
 * Author: Manuel Schmalstieg
 * Author URI: https://ms-studio.net
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**

 Usage example: 
 
 if (function_exists('ms_studio_pretty_url')) {
   $url = ms_studio_pretty_url( $url );
 }
 echo '<div><a href="'.get_field('acf_url').'">'.$url.'</a></div>';
 
*/

 /**
 * Make URL Pretty
 *
 * INPUT:
 * @param string $url : the URL to prettify.
 *
 * OUTPUT:
 * Returns the pretty URL.
 * 
 */

function ms_studio_pretty_url( $url = 'http://example.com' ) {
  
  $url = str_replace( array('http://','https://'), '', $url );

  $url = str_replace( 'www.', '', $url );

  // removes trailing slashes:

  $url = rtrim( $url, '/' );

  return $url;

}

/*
 * Other possible methods:
 *
 * parse_url
 *
 * Example:
 * $domain = parse_url($url, PHP_URL_HOST);
 * Docs:
 * http://php.net/manual/en/function.parse-url.php
*/