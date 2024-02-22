<?php get_header(); ?>
<div class="container">
<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) : the_post();
		$place_id = get_the_ID();
		$place_img = get_field('place_image', $place_id);
		?>
		<a href="<?= esc_url($place_link['url']); ?>" class="beauty__place">
			<img src="<?= esc_url($place_img['url']); ?>" alt="" class="place__image"/>
			<h3 class="place__name"><?= esc_html(get_field('place_name', $place_id));?></h3>
			<h3 class="place__location"><?= esc_html(get_field('place_location', $place_id));?></h3>
		</a>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e('Unfortunately, there are no offers right now.', 'text-domain'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>