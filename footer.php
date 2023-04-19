<!--/#main -->
<footer id="footer">
    <div class="wrap">
        <div class="footer-top">
            <div class="cols cols4">
                <div class="col">
                    <div class="footer-info">
                        <?php $contact_heading = get_field('contact_heading', 'option');?>
                        <?php if (isset($contact_heading) && !empty($contact_heading)): ?>
                            <h5><?php echo $contact_heading; ?></h5>
                        <?php endif; //endif
?>

                        <div class="contact-link">
                            <?php $contact_address = get_field('contact_address', 'option');?>
                            <?php if (isset($contact_address) && !empty($contact_address)): ?>
                                <address>
                                    <?php echo $contact_address; ?>
                                </address>
                            <?php endif; //endif
?>

                            <?php $contact_email = get_field('contact_email', 'option');?>
                            <?php if (isset($contact_email) && !empty($contact_email)): ?>
                                <a href="mailto:info@airinscare.com"><?php echo $contact_email; ?></a>
                            <?php endif; //endif
?>

                            <?php $contact_number = get_field('contact_number', 'option');?>
                            <?php if (isset($contact_number) && !empty($contact_number)): ?>
                                <a href="tel:+31(0)880233360"><?php echo $contact_number; ?></a>
                            <?php endif; //endif
?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-info">
                        <?php $partners_heading = get_field('partners_heading', 'option');?>
                        <?php if (isset($partners_heading) && !empty($partners_heading)): ?>
                            <h5><?php echo $partners_heading; ?></h5>
                        <?php endif; //endif
?>
                        <ul class="fmenu">
                            <?php
if (has_nav_menu('footer-menu')): // Check Footer Menu Set or Not
	wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '%3$s'));
endif; //endif

?>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-info">
                        <?php $informatie_heading = get_field('informatie_heading', 'option');?>
                        <?php if (isset($informatie_heading) && !empty($informatie_heading)): ?>
                            <h5><?php echo $informatie_heading; ?></h5>
                        <?php endif; //endif
?>
                        <ul class="fmenu">
                            <?php

if (has_nav_menu('footer-menu1')): // Check Footer Menu Set or Not

	wp_nav_menu(array('theme_location' => 'footer-menu1', 'container' => '', 'container_class' => '', 'items_wrap' => '%3$s'));
endif; //endif

?>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <?php $logo = get_field('footer_logo', 'option');?>
                    <?php if (isset($logo) && !empty($logo)): //to check site Logo
	?>
																                        <a href="<?php bloginfo('url');?>" id="footer-logo"><img src="<?php echo $logo; ?>" alt="Logo"></a>
																                    <?php endif; //endif
?>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-row">
                <ul class="footer-links">
                    <?php $healthy_environment_link = get_field('healthy_environment_link', 'option');?>
                    <?php if (isset($healthy_environment_link) && !empty($healthy_environment_link)): ?>
                        <li>
                            <p class="copyright"><?php echo $healthy_environment_link; ?></p>
                            <!--/.copyright -->
                        </li>
                    <?php endif; //endif
?>

                    <?php $footer_links = get_field('footer_links', 'option');?>
                                         <?php if (is_array($footer_links)): ?>
                    <?php foreach ($footer_links as $key => $footer_link) {?>
                        <li><a href="<?php echo $footer_link['url']; ?>"><?php echo $footer_link['name']; ?></a></li>
                    <?php }?>
                <?php endif;?>
                </ul>
                <?php $create_by_name = get_field('create_by_name', 'option');?>
                <?php if (isset($create_by_name) && !empty($create_by_name)): ?>
                    <p class="create-by"><?php echo $create_by_name; ?></p>
                <?php endif; //endif
?>
            </div>
        </div>
    </div>
    <!--/.wrap -->
</footer>
<!--/#footer -->
</div>
<!--/#wrapper-->
<?php wp_footer();?>
</body>

</html>