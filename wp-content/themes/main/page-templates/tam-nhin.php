<?php
/**
 * Template Name: Tầm nhìn-Sứ mệnh-Giá Trị cốt lõi
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
                <div class="mission__wrapper">
                   <div class="top">
                       <div class="mission__container">
                           <h2><?=__('Sứ mệnh', DOMAIN)?></h2>
                           <?=get_field('su_menh')?>
                           <span></span>
                       </div>
                       <div class="mission__container">
                           <h2><?=__('Tầm nhìn', DOMAIN)?></h2>
                           <?=get_field('tam_nhin')?>
                           <span></span>
                       </div>
                       <div class="mission__container">
                           <h2><?=__('Giá trị cốt lõi', DOMAIN)?></h2>
                           <?=get_field('gia_tri_cot_loi')?>
                           <span></span>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--END  Pull HTML here-->
<?php get_footer();