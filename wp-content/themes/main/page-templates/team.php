<?php
/**
 * Template Name: Team
 */
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
                <div class="team__position">
                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'team_member_position',
                        'orderby'                => 'ID',
                        'order'                  => 'ASC',
                        'hide_empty' => false,
                    ]);
                    ?>
                    <div class="filter-button-group button-group js-radio-button-group">
                        <button class="button is-checked" data-filter="*">Tất cả</button>
                        <?php
                            foreach ($terms as $term):
                        ?>
                        <button class="button" data-filter=".<?=$term->slug?>"><?=$term->name?></button>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
                <div class="team__wrapper">
                    <?php
                        $teamMembers = get_field('cac_thanh_vien_trong_team');
                        foreach($teamMembers as $member):
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'service-thumb');
                            $imageFull = wp_get_attachment_image_src(get_post_thumbnail_id($member->ID), 'full');
                            $term_list = get_the_terms($member->ID, 'team_member_position');
                            $classes = '';
                            if(!empty($term_list)){
                                foreach($term_list as $term){
                                    $classes .= $term->slug;
                                }
                            }
                    ?>
                    <div class="item <?=$classes?>">
                        <a href="#<?=$member->ID?>" data-fancybox="gallery" href="javascript:;">
                            <img class="image-thumb" src="<?=$image[0]?>" alt="<?php the_title() ?>">
                        </a>
                        <div class="popup__member" id="<?=$member->ID?>">
                            <div class="main">
                                <div class="image">
                                    <img src="<?=$imageFull[0]?>" alt="">
                                </div>
                                <div class="content">
                                    <h2><?=get_the_title($member->ID)?></h2>
                                    <p class="position">
                                        <?=get_field('detail', $member->ID)?>
                                    </p>
                                    <div class="description">
                                        <?=get_the_content(null, null, $member->ID)?>
                                    </div>
                                </div>
                            </div>
                        </div>
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