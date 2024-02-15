<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="header__nav">
				<a class="header__logo" href="">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="" />
				</a>
				<?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'menu_class' => 'header__links',
				]); ?>	
			</nav>
		</div>
	</header>