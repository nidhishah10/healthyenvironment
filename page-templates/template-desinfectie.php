<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Desinfectie Template
 *
 * Handles to show Desinfectie Content
 * @since Healthy Environment
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Desinfectie Page Content template.
	get_template_part('page-contents/content', 'desinfectie');
endwhile; //end of while
get_footer();?>