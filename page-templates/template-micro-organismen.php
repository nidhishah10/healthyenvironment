<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Micro-organismen Template
 *
 * Handles to show Micro-organismen Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Micro-organismen Page Content template.
	get_template_part('page-contents/content', 'micro-organismen');
endwhile; //end of while
get_footer();?>