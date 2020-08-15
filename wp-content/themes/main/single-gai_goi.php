<?php get_header();
    global $post;
    $img = get_the_post_thumbnail_url($post->ID, 'single_thumb');
    $ngheDanh = get_field('nghe_danh', $post->ID);
    $gioDiKhach = get_field('gia_di_khach', $post->ID);
    $phone = get_field('sdt', $post->ID);
    $birthday = get_field('sinh_nam', $post->ID);
    $address = get_field('address', $post->ID);
    $pass = get_field('pass', $post->ID);
    $chieuCao = get_field('chieu_cao', $post->ID);
    $xuatXu = get_field('xuat_xu', $post->ID);
    $longBim = get_field('long_bim', $post->ID);
    $time = get_field('thoi_gian_lam_viec', $post->ID);
    $service = get_field('dich_vu', $post->ID);
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
                        <?php
                        if($ngheDanh):
                        ?>
						<p><span>Nghệ danh: </span><span><?=$ngheDanh?></span></p>
                        <?php
                        endif;
                        ?>

						<?php
						if($gioDiKhach):
							?>
                            <p><span>Giá đi khách: </span><span><?=$gioDiKhach?></span></p>
						<?php
						endif;
						?>

						<?php
						if($phone):
							?>
                            <p><span>Số điện thoại: </span><span><?=$phone?></span></p>
						<?php
						endif;
						?>

						<?php
						if($birthday):
							?>
                            <p><span>Năm sinh: </span><span><?=$birthday?></span></p>
						<?php
						endif;
						?>

						<?php
						if($address):
							?>
                            <p><span>Địa chỉ: </span><span><?=$address?></span></p>
						<?php
						endif;
						?>

						<?php
						if($pass):
							?>
                            <p><span>Pass: </span><span><?=$pass?></span></p>
						<?php
						endif;
						?>

						<?php
						if($chieuCao):
							?>
                            <p><span>Chiều cao: </span><span><?=$chieuCao?></span></p>
						<?php
						endif;
						?>
						<?php
						if($xuatXu):
							?>
                            <p><span>Xuất xứ: </span><span><?=$xuatXu?></span></p>
						<?php
						endif;
						?>
						<?php
						if($longBim):
							?>
                            <p><span>Lông Bím: </span><span><?=$longBim?></span></p>
						<?php
						endif;
						?>
						<?php
						if($time):
							?>
                            <p><span>Thời gian làm việc: </span><span><?=$time?></span></p>
						<?php
						endif;
						?>
						<?php
						if($service):
							?>
                            <p><span>Dịch vụ: </span><span><?=$service?></span></p>
						<?php
						endif;
						?>

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