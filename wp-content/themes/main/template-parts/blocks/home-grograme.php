<?php
$progarme_section = get_field('progarme_section');
if($progarme_section):
?>
<div class="programe">
    <div class="container">
        <div class="programe__wrapper">
            <h3 class="title wow fadeInUp" data-wow-duration="2s"><?=$progarme_section['title']?></h3>
            <?php if($progarme_section['programes']): ?>
            <div class="programe__main">
                <?php
                    foreach($progarme_section['programes'] as $key => $item):
                        $delay = ($key+1)/5;
                ?>
                <a href="<?=$item['link']?>" class="programe__item">
                    <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="<?=$delay?>s">
                        <div class="image">
                            <img src="<?=$item['image']['sizes']['service-thumb']?>" alt="<?=$item['title']?>">
                        </div>
                        <h4><?=$item['title']?></h4>
                        <p><?=$item['sub_title']?></p>
                    </div>
                </a>
                <?php
                    endforeach;
                ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <img src="<?=ASSETS_PATH?>/images/tron-bg.png" class="icon_bg" alt="">
</div>
<?php endif;