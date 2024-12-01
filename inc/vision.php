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
            "name" => "vision",
            "singular_name" => "vision"
        ),
        "public" => true,
        "has_archive" => false, 
        "supports" => array("title", "editor", "thumbnail"),
        "menu_position" => 5,
        "menu_icon" => "dashicons-filter",
    ));

    // register test taxonomy
    register_taxonomy("vision", "vision", array(
        "hierarchical" => true,
        "labels" => array(
            "name" => "vision",
            "singular_name" => "vision"
        ),
        "query_var" => true,
        "rewrite" => array("slug" => "vision")
    ));
}
add_action("init", "create_vision_post_type");