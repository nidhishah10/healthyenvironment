<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Solution page Content
 *
 * @package WordPress
 * @subpackage Healthy Environment
 * @since Healthy Environment 1.0
 */
?>

    <div class="inner-page-banner">
        <div class="wrap">
            <?php $alert_banner_img = get_field('alert_banner_img');?>
            <?php if (isset($alert_banner_img) && !empty($alert_banner_img)): ?>
            <div class="inner-banner-bg" style="background-image: url(<?php echo $alert_banner_img; ?>);">
            <?php endif; //endif ?>
                <div class="title-info">
                    <?php $alert_title = get_field('alert_title');?>
                    <?php if (isset($alert_title) && !empty($alert_title)): ?>
                    <h1><?php echo $alert_title; ?><i class="icon-alert-box"></i></h1>
                    <?php endif; //endif ?>

                    <?php $alert_info = get_field('alert_info');?>
                    <?php if (isset($alert_info) && !empty($alert_info)): ?>
                    <p><?php echo $alert_info; ?></p>
                    <?php endif; //endif ?>
                </div>
                <div class="icon-block">
                    <i class="icon-que-mark"></i>
                </div>
            </div>
        </div><!--/.wrap-->
    </div><!--/.inner-page-banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="alert-inner-sec">
                    <div class="wrap">
                        <div class="alert-info-block">
                            <div class="main-title">
                                <?php $alert_info_title = get_field('alert_info_title');?>
                                <?php if (isset($alert_info_title) && !empty($alert_info_title)): ?>
                                <h2><?php echo $alert_info_title; ?></h2>
                                <?php endif; //endif ?>
                            </div>
                            <div class="service-sec current-alert-row">
                                <div class="owl-carousel alert-slider">
                                    <?php $service_section = get_field('service_section');?>
                                    <?php foreach ($service_section as $key => $service) {?>
                                    <div class="item">
                                        <div class="service-info">
                                            <div class="title-box">
                                               <h2><?php echo $service['service_title']; ?></h2>
                                            </div>
                                            <figure><img src="<?php echo $service['service_img']; ?>" alt="Alert-image"></figure>
                                            <p>
                                                <?php echo $service['service_info']; ?>
                                            </p>
                                            <div class="btn-block">
                                                <a href="<?php echo $service['btn_url']; ?>" class="button btn-outline"><?php echo $service['btn_title']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.alert-inner-sec-->
                <div class="alert-partner-sec">
                    <div class="wrap">
                        <div class="partnner-row">
                            <?php $alert_partner_title = get_field('alert_partner_title');?>
                            <?php if (isset($alert_partner_title) && !empty($alert_partner_title)): ?>
                            <h2><?php echo $alert_partner_title; ?></h2>
                        <?php endif;?>
                            <div class="owl-carousel partner-slider">
                                <?php $alert_partner_img = get_field('alert_partner_img');?>
                                <?php foreach ($alert_partner_img as $key => $img) {?>
                                <div class="item">
                                    <figure>
                                        <img src="<?php echo $img['partner_img']; ?>" alt="Partners">
                                    </figure>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div><!--/.alert-partner-sec-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main -->