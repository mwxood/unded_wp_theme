<?php
defined("ABSPATH") || exit();

function create_portfolio_post_type() {
    register_post_type("portfolio", array(
        "labels" => array(
            "name" => "Portfolio",
            "singular_name" => "Portfolio"
        ),
        "public" => true,
        "has_archive" => true,
        "supports" => array("title", "editor", "thumbnail"),
        "menu_position" => 5,
        "menu_icon" => "dashicons-admin-customizer",
    ));
}
add_action("init", "create_portfolio_post_type");