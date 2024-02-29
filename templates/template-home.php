<?php 
/*
Template Name: Landing
*/
get_header(); 
?>
<main class="main">
	<section class="hero" style="background:
	url('<?php $hero_bg = get_field('hero_background'); echo esc_url($hero_bg['url']); ?>')
	no-repeat center;">
		<div class="hero__shadow">
		</div>
		<div class="container">
			<div class="hero__main">
				<h1 class="hero__subheading">
					<?= esc_html( get_field('hero_subheading') ); ?>
				</h1>
				<h2 class="hero__heading">
					<?= wp_kses_post ( get_field('hero_heading') ); ?>
				</h2>
				<p class="hero__text">
					<?= esc_html( get_field('hero_text') ); ?>
				</p>
				<a href="<?php $hero_link = get_field('hero_link');
				esc_url($hero_link['url']) ?>" class="button">
				<?= esc_html($hero_link['title']) ?> <i class="ri-arrow-right-line"></i></a>
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
								<h3 class="location__title"><?php echo esc_html( $location->name ); ?></h3>
								<div class="location__shadow"></div>
						</a>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="about" id="about">
		<div class="container">
			<div class="about__wrap">
				<div class="about__content">
					<h2 class="about__heading">
						<?= wp_kses_post ( get_field('about_heading') ); ?>
					</h2>
					<p class="about__text">
						<?= esc_html ( get_field('about_text') ); ?>
					</p>
					<a href="<?php
						$about_link = get_field('about_link');
						esc_url($about_link['url']) ?>" class="button"><?= esc_html($about_link['title']) ?>
						<i class="ri-arrow-right-line"></i>
					</a>
				</div>
				<div class="about__image-wrap">
					<img class="about__image" src="<?php $about_img = get_field('about_image'); echo esc_url($about_img['url']); ?>"/>
					<div class="about__shadow"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="beauty" id="popular">
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
					<div class="place__image-wrap">
						<img src="<?= esc_url($place_img['url']); ?>" alt="" class="place__image"/>
						<div class="place__shadow"></div>
					</div>
					<h3 class="place__name"><?= esc_html(get_field('place_name', $place->ID));?></h3>
					<div class="place__location-wrap">
						<i class="ri-map-pin-line"></i>
						<h3 class="place__location"><?= esc_html(get_field('place_location', $place->ID));?></h3>
					</div>		
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<section class="explore" id="explore">
		<div class="container-explore">
			<div class="explore__image-wrap">
				<img class="explore__image"src="<?php $explore_bg = get_field('explore_background'); echo esc_url($explore_bg['url']); ?>" alt=""/>
				<div class="explore__image-shadow"></div>
			</div>
			<div class="explore__content container">
				<div class="explore__wrap-content">
					<h2 class="explore__heading">
						<?php echo wp_kses_post ( get_field('explore_heading') ); ?>
					</h2>
					<p class="explore__text">
						<?php echo esc_html ( get_field('explore_text') ); ?>
					</p>
				</div>
				<div class="explore__author">
					<img class="explore__author-img" src="<?php $explore_author_img = get_field('explore_author_image'); echo esc_url($explore_author_img['url']); ?>
					" alt=""/>
					<p class="explore__author-name"><?php echo esc_html ( get_field('explore_author_name') ); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="subscribe" id="subscribe">
		<div class="container">
			<div class="subscribe__content">
				<div class="subscribe__image-wrap">
					<img src="<?php $subscribe_img = get_field('subscribe_image'); echo esc_url($subscribe_img['url']); ?>" alt="" class="subscribe__image"/>
					<div class="subscribe__image-shadow"></div>
				</div>
				<div class="subscribe__form">
					<h2 class="subscribe__heading">
						<?php echo wp_kses_post ( get_field('subscribe_heading') ); ?>
					</h2>
					<div class="subscribe__text">
						<?php echo esc_html ( get_field('subscribe_text') ); ?>
					</div>
					<?= do_shortcode('[contact-form-7 id="d0281e9" title="Contact form 1"]')?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>