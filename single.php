<?php

defined('ABSPATH') || exit;

get_header(); ?>

<?php if(have_posts ()):  the_post (); ?>

    <div class="container-md inner-page">
        <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        <?php the_content(); ?>
    </div>

<?php endif; ?>

<?php get_footer(); ?>