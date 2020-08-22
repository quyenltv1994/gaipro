<?php
get_header();
$queried_object = get_queried_object();
?>
	<!--Start Pull HTML here-->
    <div class="tax_title">
        <div class="container">
            <h1 class="title"><?=__('Gái gọi ', DOMAIN)?><span><?=$queried_object->name?></h1>
        </div>
    </div>
    <?php get_template_part('template-parts/blocks/tax/lists'); ?>
    <?php get_template_part('template-parts/blocks/tax/khu-vuc'); ?>
	<!--END  Pull HTML here-->
<?php get_footer();