<?php

// Priority 15 ensures it runs after Genesis itself has setup.
add_action( 'genesis_setup', 'bsg_genesis_setup', 15 );

function bsg_genesis_setup() {
    // http://my.studiopress.com/snippets/html5/
    // Add HTML5 markup structure
    add_theme_support( 'html5' );

    // Remove item(s) from genesis admin screens
    add_action( 'genesis_admin_before_metaboxes', 'bsg_remove_genesis_theme_metaboxes' );
}

/**
 * Remove selected Genesis metaboxes from the Theme Settings and SEO Settings pages.
 *
 * @param string $hook The unique pagehook for the Genesis settings page
 */

function bsg_remove_genesis_theme_metaboxes( $hook ) {
    /** Theme Settings metaboxes */
    //remove_meta_box( 'genesis-theme-settings-version',  $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-feeds',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-layout',   $hook, 'main' );
    remove_meta_box( 'genesis-theme-settings-header',   $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-nav',      $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-breadcrumb', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-comments', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-posts',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-blogpage', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-scripts',  $hook, 'main' );

    /** SEO Settings metaboxes */
    //remove_meta_box( 'genesis-seo-settings-doctitle',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-homepage',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-dochead',    $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-robots',     $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-archives',   $hook, 'main' );
}

