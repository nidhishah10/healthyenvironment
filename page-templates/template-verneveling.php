<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Verneveling Template
 *
 * Handles to show Verneveling Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Verneveling Page Content template.
	get_template_part('page-contents/content', 'verneveling');
endwhile; //end of while
get_footer();?>