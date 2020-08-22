<?php
    wp_reset_postdata();
    $title = get_field('sg_title');
    $sgTax = get_field('sg_tax');
    $sgNumber = get_field('sg_number');

    $args = array(
        'post_type' => 'gai_goi',
        'posts_per_page' => $sgNumber,
        'post_status' => 'publish',
	    'orderby'  => array( 'meta_value_num' => 'DESC', 'date' => 'DESC' ),
	    'meta_key' => 'status',
        'tax_query' => array(
            array(
                'taxonomy' => 'khu_vuc',
                'field' => 'term_id',
                'terms' => $sgTax
            )
        )
    );

	$query = new WP_Query($args);
?>
<div class="products__lists">
	<div class="container">
		<div class="products__lists--container">
            <h2 class="title"><span><?=$title?></span></h2>
			<div class="row">
				<?php
					if($query->have_posts()):
						while($query->have_posts()): $query->the_post();
						$name = get_field('nghe_danh');
						$birthDay = get_field('sinh_nam');
						$price = get_field('gia_di_khach');
						$address = get_field('address');
						$image = get_the_post_thumbnail_url(get_the_ID(), 'product_thumb');
						$status = get_field('status');
				?>
				<div class="product__item">
					<div class="product__item--main">
                        <?php
                            if($status):
                        ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php
                        else:
                        ?>
                            <div class="disable">
                                <p>Tạm nghỉ</p>
                            </div>
                        <?php
                        endif;
                        ?>
						<div class="img">
							<img src="<?=$image?>" alt="<?php the_title(); ?>">
						</div>
						<div class="info">
                            <h3><?=$name?> - <?=$birthDay?></h3>
							<p class="price"><span><i class="fas fa-money-bill-wave"></i></span><?=$price?></p>
							<p class="address"><span><i class="fas fa-street-view"></i></span><?=$address?></p>
						</div>
					</div>

				</div>
				<?php
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>