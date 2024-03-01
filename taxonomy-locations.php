<?php get_header(); ?>
<div class="container">
<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) : the_post();
		$place_id = get_the_ID();
		$place_img = get_field('place_image', $place_id);
		?>
		<div class="beauty__wrap-single">
			<a href="#" class="beauty__place">
				<div class="place__image-wrap">
					<img src="<?= esc_url($place_img['url']); ?>" alt="" class="place__image"/>
					<div class="place__shadow"></div>
				</div>
				<h3 class="place__name"><?= esc_html(get_field('place_name', $place_id));?></h3>
				<div class="place__location-wrap">
					<i class="ri-map-pin-line"></i>
					<h3 class="place__location"><?= esc_html(get_field('place_location', $place_id));?></h3>
				</div>
			</a>
		</div>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="beauty-404">
			<p class="location"><?php esc_html_e('Unfortunately, there are no offers right now.', 'text-domain'); ?></p>
		</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>