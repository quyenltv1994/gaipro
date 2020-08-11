<?php
$gallerySection = get_field('gallery_section');
if($gallerySection['enable']):
?>
<div class="gallery">
    <div class="container">
        <h3 class="title"><?=$gallerySection['title']?></h3>
        <div class="gallery__wrapper">
            <?php
            foreach($gallerySection["galleries"] as $item):
            ?>
            <div class="gallery__item">
                <a href="<?=$item['url']?>" data-fancybox="gallery">
                    <img src="<?=$item['sizes']["gallery"]?>" alt="">
                </a>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
<?php endif;