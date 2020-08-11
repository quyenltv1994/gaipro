<div class="menu">
    <?php
    $customMenu = new Monkids_Nav_Walker();
    wp_nav_menu(array(
        'theme_location'  => 'main_menu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'link_before' => '<span>',
        'link_after' => '</span>',
        'walker' => $customMenu
    ));
    ?>
</div>