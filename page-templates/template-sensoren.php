<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Sensoren Template
 *
 * Handles to show Sensoren Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Sensoren Page Content template.
	get_template_part('page-contents/content', 'sensoren');
endwhile; //end of while
get_footer();?>