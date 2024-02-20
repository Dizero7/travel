<?php 
/*
Template Name: Landing
*/
get_header(); 
?>
<main class="main">
	<section class="hero" style="background:
	url('<?php 
	$hero_bg = get_field('hero_background');
	echo esc_url($hero_bg['url']); 
	?>');
	">
		<div class="container">
			<div class="hero__main">
				<h2>
					<?php echo esc_html( get_field('hero_subheading') ); ?>
				</h2>
				<h1>
					<?php echo wp_kses_post ( get_field('hero_heading') ); ?>
				</h1>
				<a href="<?php
				$hero_link = get_field('hero_link');
				esc_url($hero_link['url'])
				?>" class="button"><?php
				echo esc_html($hero_link['title'])
				?></a>
			</div>
			<div class="hero__locations">
				<?php
				$locations = get_terms([
						'taxonomy' => 'locations',
						'hide_empty' => false,
				]);

				foreach ( $locations as $location ) {
						$location_img = get_field( 'location_image', 'locations_' . $location->term_id );
						$location_link = get_term_link( $location );
						?>
						<a href="<?= esc_url( $location_link ); ?>" class="hero__location">
								<img src="<?= esc_url( $location_img['url'] ); ?>" alt="" class="location__image"/>
								<h3 class="location__title"><?php echo esc_html( $term->name ); ?></h3>
								<div class="location__shadow"></div>
						</a>
				<?php } ?>
			</div>

		</div>
	</section>
	<section class="about">
		<div class="container">
			<h2 class="about__heading">
				<?php echo wp_kses_post ( get_field('about_heading') ); ?>
			</h2>
			<p class="about__text">
				<?php echo esc_html ( get_field('about_text') ); ?>
			</p>
			<a href="<?php
				$about_link = get_field('about_link');
				esc_url($about_link['url'])
				?>" class="button"><?php
				echo esc_html($about_link['title'])
				?>
			</a>
		</div>
	</section>
	<section class="beauty">
		<div class="container">
			<h2 class="beauty__heading">
			<?php echo wp_kses_post ( get_field('beauty_heading') ); ?>
			</h2>
			<div class="beauty__locations">
				<?php $args = [
					'post_type' => 'beauty_place',
					'posts_per_page' => 3,
					'order' => 'ASC'
				];

				$places = get_posts($args);

				foreach ($places as $place) :
				$place_link = get_field('place_link', $place->ID);
				$place_img = get_field('place_image', $place->ID);
				?>
				<a href="<?= esc_url($place_link['url']); ?>" class="beauty__place">
					<img src="<?= esc_url($place_img['url']); ?>" alt="" class="place__image"/>
					<h3 class="place__name"><?= esc_html(get_field('place_name', $place->ID));?></h3>
					<h3 class="place__location"><?= esc_html(get_field('place_location', $place->ID));?></h3>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>