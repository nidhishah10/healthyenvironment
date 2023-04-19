<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Monitoren Template
 *
 * Handles to show Monitoren Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Monitoren Page Content template.
	get_template_part('page-contents/content', 'monitoren');
endwhile; //end of while
get_footer();?>