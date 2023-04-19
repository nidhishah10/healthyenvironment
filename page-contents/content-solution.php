 <?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
    exit;
}

/**
 * The Template Used For Displaying Aerosolen page Content
 *
 * @package WordPress
 * @subpackage Healthy Environment
 * @since Healthy Environment 1.0
 */
?>
    <div class="inner-page-banner">
        <div class="wrap">
            <?php $inner_bg_img = get_field('inner_bg_img');?>
            <?php if (isset($inner_bg_img) && !empty($inner_bg_img)): ?>
            <div class="inner-banner-bg" style="background-image: url(<?php echo $inner_bg_img; ?>);">
                 <?php endif; //endif ?>
                <div class="title-info">
                    <?php $inner_title = get_field('inner_title');?>
                    <?php if (isset($inner_title) && !empty($inner_title)): ?>
                    <h1><?php echo $inner_title; ?></h1>
                    <?php endif; //endif ?>

                    <?php $inner_info = get_field('inner_info');?>
                    <?php if (isset($inner_info) && !empty($inner_info)): ?>
                    <p><?php echo $inner_info; ?></p>
                    <?php endif; //endif ?>
                </div>
            </div>
        </div><!--/.wrap-->
    </div>
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="sol-about-sec">
                    <div class="wrap">
                        <div class="sol-info-block">
                            <div class="solution-row">

                                   <?php
                        if( have_rows('solution') ):                      
                            while( have_rows('solution') ) : the_row(); 
                               $title = get_sub_field('title');
                               $description = get_sub_field('description');
                               $image = get_sub_field('image');
                               ?>


                                <div class="image-block">
                                    <h2><?php echo $title; ?></h2>
                                    <figure><img src="<?php echo $image; ?>" width="395" height="277" alt=""></figure>
                                 <p>  <?php echo $description; ?></p>
                                </div>
                                  <?php   endwhile;    
                        endif; ?> 
                                
                               
                                
                                
                               
                            </div>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.sol-about-sec-->
                 <div class="partner-section">
                    <div class="wrap">
                              <div class="partner-logo-row">
                           
                           
                            <?php 


                                  if( have_rows('logo') ):      
                                   $index=0;                
                                     while( have_rows('logo') ) : the_row(); 
                                        
                                         $logo_image = get_sub_field('logo_image');   
                            ?>

                        <?php if($index!=1){ ?>
                            <div class="partner-box">
                                <figure>
                                    <img src="<?php echo $logo_image; ?>" alt="taxi">
                                </figure>

                            </div>
                        <?php } else { ?> <div class="partner-box title-box">
                                   <?php $title = get_field('title');?>
                        <?php if (isset($title) && !empty($title)): ?>
                            <h2><?php echo $title ?></h2>
                        <?php endif; //endif
?>
                            </div><div class="partner-box">
                                <figure>
                                    <img src="<?php echo $logo_image; ?>" alt="taxi">
                                </figure>

                            </div><?php } ?>
                        <?php $index++;endwhile;
                        endif; ?>
                          
                            
                         
                        
                        </div>
                    </div>
                </div>
            </div><!--/#content-->
        </div><!--/#primary-->
    </div><!--/#main -->