<?php
$mission_section = get_field('mission_section');
if($mission_section):
?>
<div  class="mission parallax-window" data-parallax="scroll" data-image-src="<?=$mission_section['background']['url']?>">
    <div class="container">
        <div class="mission__main">
            <h3 class="title"><?=$mission_section['title']?></h3>
            <div class="description">
                <?=do_shortcode($mission_section['description']);?>
            </div>
        </div>
    </div>
    <img src="<?=ASSETS_PATH?>/images/vuong-bg-footer.png" class="icon_bg" alt="">
</div>
<?php endif;