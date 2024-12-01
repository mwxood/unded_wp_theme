<?php

/**
 * Navwalker
 *
 * @package StarterTheme
 * @version 1.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


function create_vision_post_type() {
    register_post_type("vision", array(
        "labels" => array(
            "name" => "Vision",
            "singular_name" => "Vision"
        ),
        "public" => true,
        'show_in_rest' => true,
        "has_archive" => false, 
        'supports' => array('title', 'excerpt', 'thumbnail'), 
        "menu_position" => 5,
        "menu_icon" => "dashicons-filter",
    ));

    register_taxonomy("vision", "vision", array(
        "hierarchical" => false,
        "labels" => array(
            "name" => "vision",
            "singular_name" => "vision"
        ),
        "query_var" => true,
        "rewrite" => array("slug" => "vision")
    ));
}
add_action("init", "create_vision_post_type");