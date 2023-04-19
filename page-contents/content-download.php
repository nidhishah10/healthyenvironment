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
   <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="download-inner-sec">
                    <div class="wrap">
                        <div class="cols cols2">
                            <div class="col">
                                <div class="cols cols2 dwn-info-row">
                                    <?php $dwn_info_box = get_field('dwn_info_box');?>
                                    <?php foreach ($dwn_info_box as $key => $dwn_info) {?>
                                    <div class="col">
                                        <div class="dwn-info-box">
                                            <div class="fig-block">
                                                <i class="icon-download"></i>
                                            </div>
                                            <h6><?php echo $dwn_info['dwn_title']; ?></h6>
                                            <p>
                                                <?php echo $dwn_info['dwn_info']; ?>
                                            </p>
                                            <a href="<?php echo $dwn_info['btn_url']; ?>" class="button btn-outline"><?php echo $dwn_info['btn_title']; ?></a>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col">
                                <?php $dwn_fig_info = get_field('dwn_fig_info');?>
                                <?php if (isset($dwn_fig_info) && !empty($dwn_fig_info)): ?>
                                <div class="dwn-fig-sec" style="background-image: url(<?php echo $dwn_fig_info ?>);">
                                <?php endif; //endif ?>

                                    <div class="dwn-fig-info">
                                        <?php $dwn_fig_title = get_field('dwn_fig_title');?>
                                        <?php if (isset($dwn_fig_title) && !empty($dwn_fig_title)): ?>
                                        <h3><?php echo $dwn_fig_title ?></h3>
                                        <?php endif; //endif ?>

                                        <?php $dwn_fig_content = get_field('dwn_fig_content');?>
                                        <?php if (isset($dwn_fig_content) && !empty($dwn_fig_content)): ?>
                                        <?php echo $dwn_fig_content ?>
                                        <?php endif; //endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.download-inner-sec-->
                <div class="health-banner-sec">
                    <?php $health_banner_img = get_field('health_banner_img');?>
                    <?php if (isset($health_banner_img) && !empty($health_banner_img)): ?>
                    <div class="bg-img" style="background-image: url(<?php echo $health_banner_img ?>);">
                    <?php endif; //endif ?>

                        <?php $health_banner_title = get_field('health_banner_title');?>
                        <?php if (isset($health_banner_title) && !empty($health_banner_title)): ?>
                        <h3><?php echo $health_banner_title ?></h3>
                        <?php endif; //endif ?>
                    </div>
                </div>
                <div class="alert-partner-sec">
                    <div class="wrap">
                        <div class="partnner-row">
                            <?php $partners_title = get_field('partners_title');?>
                            <?php if (isset($partners_title) && !empty($partners_title)): ?>
                            <h2><?php echo $partners_title ?></h2>
                            <?php endif; //endif ?>
                            <div class="owl-carousel partner-slider">
                                <?php $partners_img = get_field('partners_img');?>
                                <?php foreach ($partners_img as $key => $partner_img) {?>
                                <div class="item">
                                    <figure>
                                        <img src="<?php echo $partner_img['img']; ?>" alt="Partners">
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