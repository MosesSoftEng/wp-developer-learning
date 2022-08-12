<?php
// Plugin header
/**
 * Plugin Name: Bets Tickets
 * Description: A custom bets post plugin
 * Version: 1.0.0
 * Author: MosesSoftEng
 * Author URI: https://twitter.com/MosesSoftEng
 */

/**
 * Function called when plugin is activated
 */
function btpmse_activate() { 
    error_log("Oracle database not available!", 0);
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}

/**
 * Function called when plugin is deactivated
 */
function btpmse_deactivate() {
    error_log("Oracle database not available!", 0);
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}

/**
 * Plugin activatation hook.
 */
register_activation_hook( 
    __FILE__,
    'btpmse_activate' // Method to be called on action
);

/**
 * Plugin deactivation hook.
 */
register_deactivation_hook( __FILE__, 'btpmse_deactivate' );