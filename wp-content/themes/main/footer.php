<?php
$logo = get_field('footer_logo', 'option');
$contactTitle = get_field('contact_title', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$address = get_field('address', 'option');
$contactDescription = get_field('contact_form_description', 'option');
$contactform = get_field('contact_form', 'option');
$eventName = get_field('event_name', 'option');
$eventDescription = get_field('event_description', 'option');
$eventButtonText = get_field('event_button_text', 'option');
$eventButtonLink = get_field('event_button_link', 'option');
$eventBackground = get_field('event_background', 'option');
$map = get_field('footer_map', 'option');
?>
<?php
if(!empty($eventName)):
?>
<div class="footer__event parallax-window" data-parallax="scroll" data-image-src="<?=$eventBackground['url']?>">
    <div class="container">
        <div class="footer__event--main">
            <div class="content">
                <h3 class="title"><?=$eventName?></h3>
                <div class="description">
                    <?=$eventDescription?>
                </div>
            </div>

            <a href="<?=$eventButtonLink?>">
                <?=$eventButtonText?>
            </a>
        </div>
    </div>
</div>
<?php
endif;
?>
</main>
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer__main">
                <div class="logo">
                    <a href="<?=home_url()?>">
                        <img src="<?=$logo['url']?>" alt="">
                    </a>
                </div>
                <div class="footer__content">
                    <h4><?=$contactTitle?></h4>
                    <ul>
                        <li><span><?=__('Tel', DOMAIN)?>: </span> <a href=""><?=$phone?></a></li>
                        <li><span><?=__('Email', DOMAIN)?>: </span> <a href=""><?=$email?></a></li>
                        <li><span><?=__('Địa chỉ', DOMAIN)?>: </span> <a href=""><?=$address?></a></li>
                    </ul>
                </div>
                <div class="footer__form">
                    <?=$map?>
                </div>
            </div>

        </div>
        <img src="<?=ASSETS_PATH?>/images/tamgiac-bg-footer.png" class="icon_bg1" alt="">
        <img src="<?=ASSETS_PATH?>/images/tron-bg-footer.png" class="icon_bg2" alt="">
        <img src="<?=ASSETS_PATH?>/images/vuong-bg-footer.png" class="icon_bg3" alt="">
    </div>
</footer>
</div>
<!-- Javascript-->
<?php wp_footer(); ?>
<?php
// Code Tracking before_closing_body
if ( ACF_SUPPORT && get_field('before_closing_body', 'option') )
    the_field('before_closing_body', 'option');
?>
</body>
</html>