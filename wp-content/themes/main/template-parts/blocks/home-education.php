<?php
$education_section = get_field('education');
if($education_section):
    $background = $education_section['background'];
?>
<div class="introduce" style="background-color: <?=$background?>">
    <div class="container">
        <div class="introduce__main">
            <div class="image wow slideInLeft" data-wow-duration="2s">
                <img src="<?=$education_section['image']['url']?>" alt="<?=$education_section['title']?>">
            </div>
            <div class="introduce__main--content wow slideInRight" data-wow-duration="2s">
                <div class="main">
                    <h3 class="title"><?=$education_section['title']?></h3>
                    <p class="description">
                        <?=$education_section['description']?>
                    </p>

                    <ul>
                        <?php
                            foreach($education_section['list'] as $key => $item):
                        ?>
                        <li>
                            <span><img src="<?=$item['icon']['url']?>" alt="<?=$item['text']?>"></span>
                            <span><?=$item['text']?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;