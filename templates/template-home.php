<?php 
/*
Template Name: Landing
*/
get_header(); 
$hero_bg = the_field('hero_background');

?>
<main class="main">
	<section class="hero" style="background-image:
	url('
  <?php echo esc_url($hero_bg['url']); ?>');">
		<div class="container">
			<h2>
				<?php echo esc_html( get_field('hero_subheading') ); ?>
			</h2>
			<h1>
				<?php echo wp_kses_post ( get_field('hero_heading') ); ?>
			</h1>
		</div>
	</section>
</main>
<?php get_footer(); ?>