<?php
/**
 * Template Name: Trang Chủ
 */
get_header();
?>
    <!--Start Pull HTML here-->
    <?php get_template_part('template-parts/blocks/hero-slider'); ?>
    <?php get_template_part('template-parts/blocks/home-education'); ?>
    <?php get_template_part('template-parts/blocks/home-grograme'); ?>
    <?php get_template_part('template-parts/blocks/home-learning'); ?>
    <?php get_template_part('template-parts/blocks/home-development'); ?>
    <?php get_template_part('template-parts/blocks/home-mission'); ?>
    <?php get_template_part('template-parts/blocks/home-gallery'); ?>
    <!--END  Pull HTML here-->
<?php get_footer();