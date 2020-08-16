<?php
$logo = get_field('header_logo', 'option');
?>
<div class="logo">
    <?php
        if(is_front_page()){
    ?>
            <h1>
                <span><?php
	                echo get_bloginfo('name');
	                ?>
                </span>
                <a href="<?=home_url()?>"><img src="<?=$logo['url']?>" alt="Gái Pro - Nguồn cảm hứng vô tận"></a>
            </h1>
    <?php
        }else {
            ?>
            <a href="<?=home_url()?>"><img src="<?=$logo['url']?>" alt="Gái Pro - Nguồn cảm hứng vô tận"></a>
            <?php
        }
    ?>
</div>