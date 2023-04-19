<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Case Page Template
 *
 * Handles to show home Page Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Home Page Content template.
	get_template_part('page-contents/content', 'case');
endwhile; //end of while
get_footer();?>