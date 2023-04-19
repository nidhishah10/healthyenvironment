<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Partners Page Template
 *
 * Handles to show partners Page Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Partners Page Content template.
	get_template_part('page-contents/content', 'partners');
endwhile; //end of while
get_footer();?>