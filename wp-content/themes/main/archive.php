<?php

get_header(); ?>

    <div class="main__wrapper">
        <header class="entry-header">
            <div class="container">
                <h1 class="page-title">
                    <?= post_type_archive_title() ?>
                </h1>
            </div>
        </header><!-- .page-header -->
        <div class="main__content">
            <div class="container">
                <div class="main__content--wrapper">
                    <?php
                    if ( have_posts() ) : ?>

                    <?php
                    // Start the Loop.
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the post format-specific template for the content. If you want
                         * to use this in a child theme, then include a file called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content/content', 'tuyen-dung');

                    endwhile;

                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/content', 'none' );

                    endif;
                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div><!-- #content -->

<?php
get_footer();