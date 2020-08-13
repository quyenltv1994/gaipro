<?php
    wp_reset_postdata();
    $title = get_field('hot_title');
    $hotNumber = get_field('hot_number');
	$args = array(
		'post_type' => 'gai_goi',
		'posts_per_page' => $hotNumber,
		'post_status' => 'publish'
	);
	$query = new WP_Query($args);
?>
<div class="products__lists hot">
	<div class="container">
		<div class="products__lists--container">
			<h2 class="title"><?=$title?></h2>
			<div class="row">
				<?php
					if($query->have_posts()):
						while($query->have_posts()): $query->the_post();
						$price = get_field('gia_di_khach');
						$address = get_field('address');
						$image = get_the_post_thumbnail_url(get_the_ID(), 'product_thumb');
				?>
				<div class="product__item">
					<div class="product__item--main">
						<a href="<?php the_permalink(); ?>"></a>
						<div class="img">
							<img src="<?=$image?>>" alt="<?php the_title(); ?>">
						</div>
						<div class="info">
							<h3><?php the_title(); ?></h3>
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