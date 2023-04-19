<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Alert Page Template
 *
 * Handles to show alert Page Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Home Page Content template.
	get_template_part('page-contents/content', 'alert');
endwhile; //end of while
get_footer();?>