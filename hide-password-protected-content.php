<?php

/**
 * @link              https://scottwyden.com
 * @since             1.1
 * @package           hide_password_protected_content
 *
 * @wordpress-plugin
 * Plugin Name:       Hide Password Protected Content
 * Plugin URI:        https://scottwyden.com/
 * Description:       Hide password protected content from displaying in recent posts.
 * Version:           1.1
 * Author:            Scott Wyden Kivowitz
 * Author URI:        https://scottwyden.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hide-password-protected-content
 */


// Hide password protected content
add_action( 'pre_get_posts', 'swk_password_post_filter' );
function swk_password_post_filter( $query ) {
    if ( ! $query->is_singular() && ! is_admin() ) {
        $query->set( 'has_password', false );
    }
}

?>