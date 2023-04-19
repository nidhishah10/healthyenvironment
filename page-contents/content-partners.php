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

    <div class="inner-page-banner">
        <div class="wrap">
            <?php $inner_banner_img = get_field('inner_banner_img');?>
            <?php if (isset($inner_banner_img) && !empty($inner_banner_img)): ?>
            <div class="inner-banner-bg" style="background-image: url(<?php echo $inner_banner_img; ?>);">
                <?php endif; //endif ?>
                <div class="title-info">
                    <?php $banner_title = get_field('banner_title');?>
                    <?php if (isset($banner_title) && !empty($banner_title)): ?>
                    <h1><?php echo $banner_title; ?></h1>
                    <?php endif; //endif ?>

                    <?php $banner_info = get_field('banner_info');?>
                    <?php if (isset($banner_info) && !empty($banner_info)): ?>
                    <p><?php echo $banner_info; ?></p>
                    <?php endif; //endif ?>
                </div>
            </div>
        </div><!--/.wrap-->
    </div><!--/.inner-page-banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="partner-inner-sec">
                    <div class="wrap">
                        <div class="partner-info-sec">
                            <?php $partner_info = get_field('partner_info');?>
                            <?php foreach ($partner_info as $key => $info) {?>
                            <div class="partner-desc-row">
                                <div class="partner-info">
                                    <div class="title">
                                        <figure><img src="<?php echo $info['info_img']; ?>" alt="AIRINS-CARE"></figure>
                                    </div>
                                    <p>
                                        <?php echo $info['partner_info']; ?>
                                    </p>
                                    <a href="<?php echo $info['info_btn_url']; ?>" class="button btn-outline"><?php echo $info['info_btn_name']; ?></a>
                                </div>
                                <div class="partner-fig">
                                    <figure><img src="<?php echo $info['partner_img']; ?>" alt=""></figure>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.partner-inner-sec-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main -->