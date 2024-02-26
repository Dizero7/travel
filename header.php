<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header" id="header">
		<nav class="header__nav"> 
			<a class="header__logo" href="">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="" />
			</a>
			<div class="header__wrap" id="header-menu">
				<?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'menu_class' => 'header__links',
				]); ?>	
				<div class="header__close" id="header-close">
					<i class="ri-close-line"></i>
				</div>
			</div>
			<div class="header__toggle" id="header-toggle">
				<i class="ri-menu-fill"></i>
			</div>
		</nav>
	</header>
