<?php
$logo = get_field('header_logo', 'option');
?>
<div class="logo">
    <?php
        if(is_front_page()){
    ?>
            <h1>
                <a href="<?=home_url()?>"><img src="<?=$logo['url']?>" alt="Trường mầm non chất lượng cao Monkids"></a>
            </h1>
    <?php
        }else {
            ?>
            <a href="<?=home_url()?>"><img src="<?=$logo['url']?>" alt="Trường mầm non chất lượng cao Monkids"></a>
            <?php
        }
    ?>
</div>