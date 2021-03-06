<!DOCTYPE html>
<html class="wide wow-animation" <?php language_attributes(); ?>>
<head>
	<meta charset="<?= get_bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        if(is_front_page()):
    ?>
    <meta name="keywords" content="gai goi,gai goi cao cap,gai lam tien,gai goi sinh vien,gai goi zalo,gaigoi com,gai bao,gaigoi net,tim gai goi,gaigoicaocap,tim gai,gai goi online,dien dan gai goi,gai goi tren zalo,goi gai,goi hang,goigai,sdt gai goi,gai goi qua dem,tim gai qua dem,gai di khach,gai goi viet,gaigoi3mien,lam tien,gai goi uy tin,so dien thoai gai di khach,tim gai choi,gai goi 3 mien,gai goi moi,so dien thoai gai goi,dich vu gai goi sinh vien,gai goi 24h,gai goi hang,gia goi,goi goi,sdt gai,gai goi sinh vien cao cap,gai goi thanh pho,so dien thoai gai,www gaigoi com,gai goi bac nam,gai goi khu vuc,gai gou,so dien thoai ca ve,so dt gai goi,so dien thoai cave,gai goi gia,gsi goi,gai hoi,sinh vien gai goi,www gai goi,dia chi gai goi,gai goi ba mien,gai gpi,tim gai di khach,gai goi co hinh,goi hang com,choi gai o dau,gai goi cao,gai goi cao cap sinh vien,gai goi sdt,giai goi,tim sdt gai goi,xem hang gai goi,gai gu rau tuoi,gaigoi co,gai di khach san,sdt gai goi sinh vien,tinh1h net,dien thoai gai goi,gai goi lon tuoi,gai goi co sdt,s">
    <?php
        endif;
    ?>
    <meta name="google-site-verification" content="VOUiVRoz3RniovMtO1_I9XEci-XfmqaMcglM7hC-DCA" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= ASSETS_PATH ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= ASSETS_PATH ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= ASSETS_PATH ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= ASSETS_PATH ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= ASSETS_PATH ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= ASSETS_PATH ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= ASSETS_PATH ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= ASSETS_PATH ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= ASSETS_PATH ?>/favicon/apple-icon-180x180.png">
    <link rel="manifest" href="<?= ASSETS_PATH ?>/favicon/manifest.json">
    <meta name="msapplication-TileImage" content="<?= ASSETS_PATH ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<link rel="icon" type="image/png" sizes="32x32" href="<?= ASSETS_PATH ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS_PATH ?>/favicon/favicon-16x16.png">
	<link rel="mask-icon" href="<?= ASSETS_PATH ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= ASSETS_PATH ?>/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- Stylesheets-->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap">

	<?php wp_head(); ?>

	<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

	<?php
    // Code Tracking within_head
    if ( ACF_SUPPORT && get_field('within_head', 'option') )
        the_field('within_head', 'option');
    ?>
</head>
<body>
	<?php
	// Page Code Tracking
	if ( get_field('page_code_tracking') )
	    the_field('page_code_tracking');

	// Code Tracking
	if ( ACF_SUPPORT && get_field('after_opening_body', 'option') )
	    the_field('after_opening_body', 'option');
	?>
    <div id="main" class="main">
        <header id="header">
            <div class="container">
                <div class="header">
                    <?php get_template_part('template-parts/components/logo'); ?>
                    <?php get_template_part('template-parts/components/main-menu'); ?>
                    <div class="button__menu-container">
                        <button class="button__menu-open">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="button__menu-close"></button>
                </div>
            </div>
        </header>
        <main id="main__content">
