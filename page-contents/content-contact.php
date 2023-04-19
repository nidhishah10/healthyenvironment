<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Contact page Content
 *
 * @package WordPress
 * @subpackage Healthy Environment
 * @since Healthy Environment 1.0
 */
?>
<div id="main">
    <div id="primary" class="content-area one-column">
        <div id="content" class="site-content">
            <div class="contact-inner-sec">
                <div class="wrap">
                    <div class="cols cols2">
                        <div class="col">
                            <div class="contact-info-sec">
                                <?php $contact_title = get_field('contact_title');?>
                                <?php if (isset($contact_title) && !empty($contact_title)): ?>
                                <h2><?php echo $contact_title ?></h2>
                                <?php endif; //endif ?>
                                <ul>
                                    <li>
                                    <?php $address = get_field('address');?>
                                    <?php if (isset($address) && !empty($address)): ?>
                                        <a href="#"><i class="icon-home"></i><?php echo $address ?></a>
                                    <?php endif; //endif ?>
                                    </li>
                                    <li>
                                    <?php $email = get_field('email');?>
                                    <?php if (isset($email) && !empty($email)): ?>
                                        <a href="mailto:info@airinscare.com"><i class="icon-call"></i><?php echo $email ?></a>
                                    <?php endif; //endif ?>
                                    </li>
                                    <li>
                                    <?php $phone_number = get_field('phone_number');?>
                                    <?php if (isset($phone_number) && !empty($phone_number)): ?>
                                        <a href="tel:+310880233360"><i class="icon-email"></i><?php echo $phone_number ?></a>
                                    <?php endif; //endif ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-form-sec">
                                <form action="#">
                                    <?php $contact_form_short_code = get_field('contact_form_short_code');?>
                                    <?php if (isset($contact_form_short_code) && !empty($contact_form_short_code)): ?>
                                         <?php echo do_shortcode($contact_form_short_code); ?>
                                         <?php endif; //endif ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--/.wrap-->
            </div><!--/.contact-inner-sec-->
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
                            <?php foreach ($partners_img as $key => $img) {?>
                            <div class="item">
                                <figure>
                                    <img src="<?php echo $img['image']; ?>" alt="Partners">
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