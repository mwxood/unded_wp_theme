<?php

/**
 * Navwalker
 *
 * @package StarterTheme
 * @version 1.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;

function create_services_post_type() {
    register_post_type("services", array(
        "labels" => array(
            "name" => "Services",
            "singular_name" => "Services"
        ),
        "public" => true,
        "has_archive" => false, 
        "supports" => array("title", "editor", "thumbnail"),
        "menu_position" => 5,
        "menu_icon" => "dashicons-format-image",
    ));
}
add_action("init", "create_services_post_type");