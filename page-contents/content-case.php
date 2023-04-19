   <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="case-page-title">
                    <div class="wrap wrap-small">
                        <div class="main-title">

                            <?php $header_title = get_field('header_title');?>
                        <?php if (isset($header_title) && !empty($header_title)): ?>
                            <h2><?php echo $header_title ?></h2>
                        <?php endif; //endif
?>
                           <?php $header_description = get_field('header_description');?>
                        <?php if (isset($header_description) && !empty($header_description)): ?>
                            <p><?php echo $header_description ?></p>
                        <?php endif; //endif
?>
                            <a href="<?php echo get_field('link'); ?>" class="button btn-outline">Neem contact op
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cases-section-inner">
                    <div class="case-img-box cases-box" style="background-image: url('<?php echo get_field('top_section_image');?>');"></div>
                    <div class="case-content-info cases-box">
                        <div class="case-details">
                            <div class="main-title">
                                <?php $top_section_title = get_field('top_section_title');?>
                        <?php if (isset($top_section_title) && !empty($top_section_title)): ?>
                            <h2><?php echo $top_section_title ?></h2>
                        <?php endif; //endif
?>
                            </div>
                           <?php $top_section_description = get_field('top_section_description');?>
                        <?php if (isset($top_section_description) && !empty($top_section_description)): ?>
                            <p><?php echo $top_section_description ?></p>
                        <?php endif; //endif
?>
                        </div>
                    </div>
                </div>
                <div class="cases-history">
                    <div class="wrap wrap-small">
                        <div class="main-title">
                         <?php $middle_section_title = get_field('middle_section_title');?>
                        <?php if (isset($middle_section_title) && !empty($middle_section_title)): ?>
                            <h2><?php echo $middle_section_title ?></h2>
                        <?php endif; //endif
?>
                            </div>
                           <?php $middle_section_description = get_field('middle_section_description');?>
                        <?php if (isset($middle_section_description) && !empty($middle_section_description)): ?>
                            <p><?php echo $middle_section_description ?></p>
                        <?php endif; //endif
?>
                    </div>
                </div>
                <div class="health-banner-sec inner pb-0">
                    <div class="bg-img" style="background-image: url(<?php echo get_field('helth_banner_image'); ?>);">
                        <h3><?php echo get_field('helth_banner_text'); ?></h3>
                    </div>
                </div>
                <div class="partner-section-single">
                    <div class="wrap">
                        <div class="main-title">
                            <h2>Partners</h2>
                        </div>
                        <div class="partner-logo-inner">
                             <?php 
                                  if( have_rows('partners') ):                      
                                     while( have_rows('partners') ) : the_row(); 
                                         $partners_logo = get_sub_field('partners_logo');   
                                        
                            ?>
                            <div class="partner-box">
                                <figure>
                                    <img src="<?php echo $partners_logo; ?>" alt="bungee-logo">
                                </figure>
                            </div>
                        <?php endwhile;
                        endif; ?>
                           
                        
                        </div>
                    </div>
                    <div class="cases-section-inner">
                        <div class="case-content-info cases-box">
                            <div class="case-details">
                                <div class="main-title">
                                <?php $bottom_section_title = get_field('bottom_section_title');?>
                        <?php if (isset($bottom_section_title) && !empty($bottom_section_title)): ?>
                            <h2><?php echo $bottom_section_title ?></h2>
                        <?php endif; //endif
?>
                            </div>
                           <?php $bottom_section_description = get_field('bottom_section_description');?>
                        <?php if (isset($bottom_section_description) && !empty($bottom_section_description)): ?>
                            <p><?php echo $bottom_section_description ?></p>
                        <?php endif; //endif
?>
                            </div>
                        </div>
                        <div class="case-img-box cases-box" style="background-image: url('<?php echo get_field('bottom_section_image'); ?>');"></div>
                    </div>
                </div>
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main -->