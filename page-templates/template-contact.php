<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Contact Template
 *
 * Handles to show Contact Page Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the contact Page Content template.
	get_template_part('page-contents/content', 'contact');
endwhile; //end of while
get_footer();?>