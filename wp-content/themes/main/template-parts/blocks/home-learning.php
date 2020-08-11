<?php
$learning_section = get_field('learning_section');
if($learning_section):
    $background = $learning_section['background'];
?>
<div class="learning" style="background-color: <?=$background?>">
    <div class="image">
        <img src="<?=$learning_section['image']['url']?>" alt="<?=$learning_section['title']?>">
    </div>
    <div class="learning__content">
        <h3 class="title wow fadeInUp" data-wow-duration="2s"><?=$learning_section['title']?></h3>
        <?php
            if($learning_section['list']):
        ?>
        <ul>
            <?php
                foreach($learning_section['list'] as $key => $item):
                    $delay = ($key+1)/5;
            ?>
            <li>
                <span><img src="<?=$item['icon']['url']?>" alt="<?=$item['text']?>"></span>
                <span><?=$item['text']?></span>
            </li>
                <?php endforeach ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php endif;