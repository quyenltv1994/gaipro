<?php
get_header();
?>
    <!--Start Pull HTML here-->
    <div class="main__wrapper">
        <header class="entry-header">
            <div class="container">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                endif;
                ?>
            </div>
        </header><!-- .entry-header -->
    <div class="main__content">
        <div class="container">
            <?php the_content(); ?>
            <div class="gallery__wrapper">
                <?php
                    $galleries = get_field('galleries');
                    foreach($galleries as $item):
                ?>
                <div class="item">
                    <a href="<?=$item['url']?>" data-fancybox="gallery" href="javascript:;">
                        <img src="<?=$item['sizes']['gallery']?>" alt="<?php the_title() ?>">
                    </a>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
    </div>
    <!--END  Pull HTML here-->
<?php get_footer();