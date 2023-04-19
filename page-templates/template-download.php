<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Download Page Template
 *
 * Handles to show download Page Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Download Page Content template.
	get_template_part('page-contents/content', 'download');
endwhile; //end of while
get_footer();?>