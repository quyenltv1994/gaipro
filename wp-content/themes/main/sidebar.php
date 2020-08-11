<?php
    $image = get_field('image_tuyen_sinh', 'option');
    $url = get_field('sidebar_image_link', 'option')
?>
<aside class="sidebar">
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'sidebar_menu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'link_before' => '',
        'link_after' => '',
    ));
    ?>
    <div class="image">
        <a href="<?=$url?>">
            <img src="<?=$image['url']?>" alt="">
        </a>
    </div>
</aside>