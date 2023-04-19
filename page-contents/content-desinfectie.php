<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Desinfectie page Content
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
    </div><!--/.inner-page-banner-->
    <div class="top-product-sec">
        <div class="wrap">
            <div class="product-inner">
                <div class="owl-carousel top-product-slider">
                    <?php $product_info = get_field('product_info');?>
                    <?php foreach ($product_info as $key => $info) {?>
                    <div class="item">
                        <div class="product-info">
                            <div class="icon-box">
                                <i class="<?php echo $info['icon_class']; ?>"></i>
                            </div>
                            <div class="desc-box">
                                <h4><?php echo $info['product_title']; ?></h4>
                                <p><?php echo $info['product_info']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </div><!--/.wrap-->
    </div><!--/.top-product-sec-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="sol-about-sec">
                    <div class="wrap">
                        <div class="sol-info-block">
                        <?php $info_title = get_field('info_title');?>
                        <?php if (isset($info_title) && !empty($info_title)): ?>
                        <h2><?php echo $info_title; ?></h2>
                        <?php endif; //endif ?>
                            <div class="sol-info-inner">
                                <div class="sol-desc">
                                    <div class="sol-info">
                                        <?php $sol_info = get_field('sol_info');?>
                                        <?php if (isset($sol_info) && !empty($sol_info)): ?>
                                        <p>
                                            <?php echo $sol_info; ?>
                                        </p>
                                        <?php endif; //endif ?>
                                    </div>
                                    <div class="sol-fig">
                                        <figure>
                                            <?php $sol_img = get_field('sol_img');?>
                                            <?php if (isset($sol_img) && !empty($sol_img)): ?>
                                            <img src="<?php echo $sol_img; ?>" alt="Solution">
                                            <?php endif; //endif ?>
                                        </figure>
                                    </div>
                                </div>
                                <?php $sol_info1 = get_field('sol_info1');?>
                                <?php if (isset($sol_info1) && !empty($sol_info1)): ?>
                                <p>
                                    <?php echo $sol_info1; ?>
                                </p>
                                <?php endif; //endif ?>
                                <div class="sol-desc">
                                    <div class="sol-fig">
                                        <figure>
                                            <?php $sol_img1 = get_field('sol_img1');?>
                                            <?php if (isset($sol_img1) && !empty($sol_img1)): ?>
                                            <img src="<?php echo $sol_img1; ?>" alt="Solution">
                                            <?php endif; //endif ?>
                                        </figure>
                                    </div>
                                    <div class="sol-info">
                                        <?php $sol_info2 = get_field('sol_info2');?>
                                        <?php if (isset($sol_info2) && !empty($sol_info2)): ?>
                                        <p>
                                            <?php echo $sol_info2; ?>
                                        </p>
                                        <?php endif; //endif ?>
                                    </div>
                                </div>
                                <?php $sol_info3 = get_field('sol_info3');?>
                                <?php if (isset($sol_info3) && !empty($sol_info3)): ?>
                                <p>
                                    <?php echo $sol_info3; ?>
                                </p>
                                <?php endif; //endif ?>
                            </div>
                        </div>
                    </div><!--/.wrap-->
                </div><!--/.sol-about-sec-->
                    <div class="req-form-sec">
                    <div class="wrap">
                        <?php $req_form_title = get_field('req_form_title');?>
                        <?php if (isset($req_form_title) && !empty($req_form_title)): ?>
                        <h2><i class="icon-quote"></i><?php echo ($req_form_title); ?></h2>
                        <?php endif; //endif ?>
                            <?php $req_form_shortcode = get_field('req_form_shortcode');?>
                            <?php if (isset($req_form_shortcode) && !empty($req_form_shortcode)): ?>
                            <?php echo do_shortcode($req_form_shortcode); ?>
                            <?php endif; //endif ?>

                    </div><!--/.wrap-->
                </div><!--/.req-form-sec-->
                <div class="solution-partner-sec">
                    <div class="wrap">
                        <div class="partnner-row">
                            <?php $partners_title = get_field('partners_title');?>
                            <?php if (isset($partners_title) && !empty($partners_title)): ?>
                            <h2><?php echo ($partners_title); ?></h2>
                            <?php endif; //endif ?>
                            <div class="owl-carousel partner-slider">
                                <?php $partner_row = get_field('partner_row');?>
                                <?php foreach ($partner_row as $key => $row) {?>
                                <div class="item">
                                    <figure>
                                        <img src="<?php echo $row['partner_img']; ?>" alt="Partners">
                                    </figure>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div><!--/.solution-partner-sec-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main -->