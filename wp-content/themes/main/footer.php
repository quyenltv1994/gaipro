<?php
$logo = get_field('footer_logo', 'option');
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

                </div>
                <div class="footer__form">

                </div>
            </div>

        </div>
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