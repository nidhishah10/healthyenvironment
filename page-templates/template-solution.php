<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Solution Template
 *
 * Handles to show Verneveling Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Verneveling Page Content template.
	get_template_part('page-contents/content', 'solution');
endwhile; //end of while
get_footer();?>