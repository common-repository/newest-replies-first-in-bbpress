<?php
/*
Plugin Name: Newest replies first in bbPress
Description: View the newest replies first in bbPress
Author: jeroenpeters1986
Version: 1.0.2
Author URI: https://jeroenpeters.dev
*/


function bbp_rsdesc_change_reply_order() {
    $args['order'] = 'DESC';
    return $args;
}

add_filter('bbp_before_has_replies_parse_args', 'bbp_rsdesc_change_reply_order');
