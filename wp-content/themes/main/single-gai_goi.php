<?php get_header();
    global $post;
    $img = get_the_post_thumbnail_url($post->ID, 'single_thumb');
?>
<div class="container">
	<div class="gai__main">
		<h1><?php echo get_the_title($post->ID); ?></h1>
		<div class="content">
			<div class="top">
				<div class="image">
					<img src="<?=$img?>" alt="<?php the_title($post->ID); ?>">
				</div>
				<div class="info">
					<h2>Thông tin cơ bản</h2>
					<div class="info__main">
						<p><span>Nghệ danh: </span><?=get_field('nghe_danh', $post->ID)?></p>
						<p><span>Giá đi khách: </span><?=get_field('gia_di_khach', $post->ID)?></p>
						<p><span>Số điện thoại: </span><?=get_field('sdt', $post->ID)?></p>
						<p><span>Năm sinh: </span><?=get_field('sinh_nam', $post->ID)?></p>
						<p><span>Địa chỉ: </span><?=get_field('address', $post->ID)?></p>
						<p><span>Pass: </span><?=get_field('pass', $post->ID)?></p>
						<p><span>Chiều cao: </span><?=get_field('chieu_cao', $post->ID)?></p>
						<p><span>Xuất xứ: </span><?=get_field('xuat_xu', $post->ID)?></p>
						<p><span>Lông Bím: </span><?=get_field('long_bim', $post->ID)?></p>
						<p><span>Thời gian làm việc: </span><?=get_field('thoi_gian_lam_viec', $post->ID)?></p>
						<p><span>Dịch vụ: </span><?=get_field('dich_vu', $post->ID)?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gai__description">
		<div class="entry-content">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
	            the_post();

	           the_content();

            endwhile; // End of the loop.
            ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>