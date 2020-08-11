<?php
$developmentSection = get_field('development_section');
if($developmentSection):
    $background = $developmentSection['background'];
?>
<div class="development" style="background-color: <?=$background?>">
    <div class="container">
        <div class="development__main">
            <h3 class="title wow bounceInUp" data-wow-duration="2s"><?=$developmentSection['title']?></h3>
            <div class="development__content">
                <?php
                    foreach($developmentSection['list'] as $key => $item):
                        $delay = ($key+1)/5;
                ?>
                <div class="development__item wow fadeInUp" data-wow-duration="2s" data-wow-delay="<?=$delay?>s">
                    <div class="image">
                        <img src="<?=$item['icon']['url']?>" alt="<?=$item['text']?>">
                    </div>
                    <div class="description">
                        <?=$item['text']?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>

        </div>
    </div>
</div>
<?php endif;