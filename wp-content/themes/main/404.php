<?php
get_header();
?>
    <!--Start Pull HTML here-->
    <div class="main__wrapper">
        <header class="entry-header">
            <div class="container">
                <h1>Ooops... Lỗi 404</h1>
            </div>
        </header><!-- .entry-header -->
        <div class="main__content">
            <div class="container">
                <div class="main__content--wrapper">
                    <h3><?php echo __('Xin lỗi, nhưng trang mà bạn đang tìm kiếm không tồn tại.', DOMAIN) ?></h3>
                    <p>Bạn có thể đi đến <a href="<?php echo home_url() ?>">Trang chủ</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--END  Pull HTML here-->
<?php get_footer();