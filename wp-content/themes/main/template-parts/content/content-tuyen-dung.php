<?php
    $image = get_the_post_thumbnail_url(get_the_ID(), 'post-image-thumbnail');
?>
<div class="post__item">
    <div class="image">
        <img src="<?=$image?>" alt="<?php the_title(); ?>">
    </div>
    <div class="post__item--content">
        <h2><?php the_title(); ?></h2>
    </div>
    <a href="<?php the_permalink(); ?>">Đọc thêm</a>
</div>