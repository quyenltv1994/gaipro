<!DOCTYPE html>
<html class="wide wow-animation" <?php language_attributes(); ?>>
<head>
	<meta charset="<?= get_bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="VOUiVRoz3RniovMtO1_I9XEci-XfmqaMcglM7hC-DCA" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?= ASSETS_PATH ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= ASSETS_PATH ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS_PATH ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= ASSETS_PATH ?>/favicon/site.webmanifest">
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
<body <?php body_class(); ?>>

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
