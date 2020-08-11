<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package Wordpress
 * @since wpdance
 *
 **/
?>
<?php get_header(); ?>
    <div class="main__wrapper">
        <header class="entry-header">
            <div class="container">
                <?php
                if ( is_sticky() && is_home() && ! is_paged() ) {
                    printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
                }
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
                <div class="main__content--wrapper">
                    <?php

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content/content', 'page' );
                    endwhile; // End of the loop.
                    ?>
                    <?php
                    $galleries = get_field('galleries');
                    if(!empty($galleries)):
                    ?>
                        <div class="galleries">
                            <?php
                                foreach($galleries as $item):
                            ?>
                            <div class="item">
                                <a href="<?=$item['url'];?>" data-fancybox="gallery">
                                    <img src="<?= $item['sizes']["gallery"]; ?>" alt="">
                                </a>
                            </div>
                            <?php
                                endforeach;
                            ?>
                        </div>
                    <?php endif;
                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
<?php get_footer(); ?>