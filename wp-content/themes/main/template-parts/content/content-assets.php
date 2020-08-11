<?php
$assets = get_field('assets');
foreach($assets as $asset){
    $image = get_the_post_thumbnail_url($asset->ID, 'post-image-thumbnail');
?>
    <div class="post__item">
        <div class="image">
            <img src="<?=$image?>" alt="<?= get_the_title($asset->ID); ?>">
        </div>
        <div class="post__item--content">
            <h2><?= get_the_title($asset->ID); ?></h2>
        </div>
        <a href="<?php the_permalink($asset->ID); ?>">Đọc thêm</a>
    </div>
<?php
}
?>