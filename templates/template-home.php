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
				$args = array(
					'post_type' => 'hero_location',
					'posts_per_page' => 4,
					'order' => 'ASC'
				);
				$posts = get_posts($args);
				foreach ($posts as $post) {
				?>
				<a href="<?php
					$location_link = get_field('location_link');
					echo esc_url($location_link['url']);
					?>" class="location">
					<img src="<?php
					$location_img = get_field('location_image');
					echo esc_url($location_img['url']); 
					?>" alt="" class="location__image"/>
					<h3 class="location__title"><?php 
					echo esc_html($location_link['title']);
					?></h3>
					<div class="location__shadow"></div>
				</a>
				<?php
				}
				?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>