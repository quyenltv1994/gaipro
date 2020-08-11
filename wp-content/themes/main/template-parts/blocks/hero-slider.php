<?php
$slider_section = get_field('sliders_section');
if($slider_section['sliders']):
?>
<div class="banner">
    <div class="flexslider">
        <ul class="slides">
            <?php
                foreach($slider_section['sliders'] as $key => $slider):
                    $image = $slider['image'];
                    if(wp_is_mobile() && !empty($slider['image_mobile'])){
                        $image = $slider['image_mobile'];
                    }
            ?>
            <li style="background-image: url(<?=$image['url']?>)">
                <div class="slides__item wrapper container">
                    <?php
                        if(!empty($slider['title'])):
                    ?>
                    <div class="slides__item--content">
                        <h2><?=$slider['title']?></h2>
                        <p class="sub"><?=$slider['sub_title']?></p>
                        <?php
                        if($slider['button_text']):
                            ?>
                            <a href="<?=$slider['button_link']?>"><?=$slider['button_text']?></a>
                        <?php endif; ?>
                    </div>
                            <?php
                        endif;
                            ?>
                </div>
            </li>
            <?php
                endforeach
            ?>
        </ul>
    </div>
</div>
<?php endif;