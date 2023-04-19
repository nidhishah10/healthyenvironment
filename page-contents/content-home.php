<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Home page Content
 *
 * @package WordPress
 * @subpackage Healthy Environment
 * @since Healthy Environment 1.0
 */
?>
  <div class="hero-slider-section">
        <div class="wrap">
            <!-- <div class="hero-slider-row">
                <div class="hero-slider owl-carousel">

                    <?php
                       // if( have_rows('slider') ):                      
                         //   while( have_rows('slider') ) : the_row(); 
                          //     $slider_image = get_sub_field('slider_image');
                               ?>
                    <div class="item">
                        <img src="<?php //echo $slider_image; ?>" alt="home-banner-img"/>
                    </div>
                  
                  <?php  // endwhile;    
                       // endif; ?> 
                  
                </div>
                <div class="controls">
                    <span class="play"><i class="icon-pause"></i></span>
                    <span class="stop"><i class="icon-play"></i></span>
                </div>
            </div> -->
            <?php   $slider_video=get_field('slider_video');  ?>
             <div class="banner-slider-video">
                <video id="banner-video" autoplay loop muted preload playsinline="" width="100%" height="600">
                    <source src="<?php echo $slider_video['url'];?>" type="video/mp4">
                    <source src="images/demo.ogg" type="video/ogg">
                </video>
                <div class="controls">
                    <span class="play"><i class="icon-pause"></i></span>
                    <span class="stop"><i class="icon-play"></i></span>
                </div>
            </div>
       
        </div>
    </div>
<!--/.banner-main-->
 <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="feature-sec">
                    <div class="top-product-sec">
                        <div class="wrap">
                                  <div class="product-inner">
            <div class="owl-carousel top-product-slider">
                <?php $product_info = get_field('product_info');?>
                <?php foreach ($product_info as $key => $product_info) {?>
                    <div class="item">
                        <div class="product-info">
                            <div class="icon-box">
                                <i class="<?php echo $product_info['icon_class']; ?>"></i>
                            </div>
                            <div class="desc-box">
                                <h4><?php echo $product_info['product_title']; ?></h4>
                                <p><?php echo $product_info['product_content']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
                        </div><!--/.wrap-->
                    </div><!--/.top-product-sec-->
                    <div class="wrap">
                        <div class="title-block">
                            <?php $about_info_title = get_field('about_info_title');?>
                        <?php if (isset($about_info_title) && !empty($about_info_title)): ?>
                            <h2><?php echo $about_info_title ?></h2>
                        <?php endif; //endif
?> <?php $about_content = get_field('about_content');?>
                        <?php if (isset($about_content) && !empty($about_content)): ?>
                            <p><?php echo $about_content ?></p>
                        <?php endif; //endif
?>
                        </div>
                       <div class="feature-info-row">
                        <div class="cols cols3">
                            <?php $feature_info_section = get_field('feature_info_section');?>
                            <?php foreach ($feature_info_section as $key => $feature_info) {?>
                                <div class="col">
                                    <div class="ft-box">
                                        <i class="<?php echo $feature_info['icon_name']; ?>"></i>
                                        <h6><?php echo $feature_info['icon_title']; ?></h6>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    </div>
                </div>
                 <?php
                    $news_selection =get_field('news_selection');
                    if ($news_selection!='') {
                 ?>   
                 <div class="news-section">
                    <div class="wrap">
                        <h2 class="section-title-large">News & Inspiration</h2>
                    </div>
                    <div class="swiper-row">
                        <div class="swiper-container">
                           
                            <div class="swiper-wrapper">
                                <?php 
                                  foreach($news_selection as $value){
                                      $title=$value->post_title;
                                      $id=$value->ID;
                                      $image = has_post_thumbnail($id) ? get_the_post_thumbnail_url($id) : null; 
                                 ?>
                                <div class="swiper-slide">
                                     <a href="<?php echo get_the_permalink($id); ?>">
                                <img src="<?php echo $image; ?>" alt="slider-img">
                                 </a>
                                <div class="slidetitle"> <a href="<?php echo get_the_permalink($id); ?>"><?php echo $title; ?></a></div>
                                </div>
                                <?php } ?>                               
                            </div>
                        </a>
                        </div>
                        <div class="navrow">
                            <div class="sld-prev">
                                <span class="arrow-img"><img src="<?php bloginfo('url');?>/wp-content/uploads/arrow-left.svg" alt="Prev"></span>
                                <span class="title">Title of the previous blog</span>
                                <span class="number">01</span>
                            </div>
                            <div class="sld-next">
                                <span class="number">02</span>
                                <span class="title">Title of the previous blog</span>
                                <span class="arrow-img"><img src="<?php bloginfo('url');?>/wp-content/uploads/arrow-left.svg" alt="Prev"></span>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>

                <div class="health-banner-sec">
                    <div class="wrap">
                        <div class="bg-img">
                        <?php $health_bnnr_title = get_field('health_bnnr_title');?>
                        <?php if (isset($health_bnnr_title) && !empty($health_bnnr_title)): ?>
                            <h3><?php echo $health_bnnr_title ?></h3>
                        <?php endif; //endif
?>
                    </div>
                        <div class="section-title">
                            <?php $feature_title = get_field('feature_title');?>
                        <?php if (isset($feature_title) && !empty($feature_title)): ?>
                            <h2><?php echo $feature_title ?></h2>
                        <?php endif; //endif
?>

                        <?php $feature_content = get_field('feature_content');?>
                        <?php if (isset($feature_content) && !empty($feature_content)): ?>
                            <p>
                                <?php echo $feature_content ?>
                            </p>
                        <?php endif; //endif
?>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.health-banner-sec-->

            <div class="cases-section">
                <?php if(get_field('section_title') != ""){ ?>
                    <div class="wrap">
                        <h2 class="section-title-large"><?php echo get_field('section_title'); ?></h2>
                    </div>
                <?php } ?>
                    <div class="case-row" style="background-image: url('<?php if(get_field('bg_image') != "") { echo get_field('bg_image'); }?>')">
                        <div class="case-title">
                            <div class="wrap">
                                <div class="case-info">
                                   <a href=" <?php if(get_field('link_url') != "") { echo get_field('link_url');  }?>">
                                      <?php if(get_field('subtitle') != ""){ ?>
                                    <h2> <?php echo get_field('subtitle'); ?></h2>
                                <?php } ?>
                                    <img src="<?php bloginfo('url');?>/wp-content/uploads/arrow-left.svg" alt="arrow-left">
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--   <a href="#" class="arrow-down"><i class="icon-next"></i></a> -->
                </div>

                <!-- <div class="partnner-row">
                    <h2>Partners van de Healthy Environment Group</h2>
                    <div class="owl-carousel partner-slider">
                        <div class="item">
                            <figure>
                                <img src="images/partner-img01.svg" alt="Partners">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/partner-img02.svg" alt="Partners">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/partner-img01.svg" alt="Partners">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/partner-img02.svg" alt="Partners">
                            </figure>
                        </div>
                    </div>
                </div> -->
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
                            </div> <div class="partner-box">
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
    <div class="heg-alert-box-icon-block">    
        <i class="icon-alert-box"></i>
    </div>
        <div class="heg-alert-box">
        <div class="icon-block">
            <i class="icon-alert-box"></i>
        </div>
        <div class="alert-data">
            <h2>HEG - Alert</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut</p>
            <a href="#" class="leer">Lees meer</a>
            <p>Altijd en overal op de hoogte blijven van het laatste nieuws?</p>
        </div>
        <form action="#">
            <div class="form-group">
                <input type="email" placeholder="Your email">
                <div class="subscribe-btn">
                    <input type="submit" value="subscribe">
                </div>
            </div>
        </form>
        <a href="#" class="close-this">
            <i class="icon-close"></i>
        </a>
    </div>