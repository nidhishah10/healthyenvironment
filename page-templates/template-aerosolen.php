<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Aerosolen Template
 *
 * Handles to show Aerosolen Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Aerosolen Page Content template.
	get_template_part('page-contents/content', 'aerosolen');
endwhile; //end of while
get_footer();?>