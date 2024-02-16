<footer class="footer">
	<div class="container">
		<div class="footer__upper">
			<div class="branding">
				<a href="" class="branding__logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="" /></a>
				<h2 class="branding__title">Travel with us and explore the world without limits.</h2>
			</div>
			<div class="footer__grid">
				<div class="footer__grid-col">
					<h3 class="footer__grid-title">
						About
					</h3>
					<?php wp_nav_menu([
					'theme_location' => 'footer-menu1',
					'menu_class' => 'footer__grid-links',
					]); ?>
				</div>
				<div class="footer__grid-col">
					<h3 class="footer__grid-title">
						Company
					</h3>
					<?php wp_nav_menu([
					'theme_location' => 'footer-menu2',
					'menu_class' => 'footer__grid-links',
					]); ?>
				</div>
				<div class="footer__grid-col">
					<h3 class="footer__grid-title">
						Contact
					</h3>
					<?php wp_nav_menu([
					'theme_location' => 'footer-menu3',
					'menu_class' => 'footer__grid-links',
					]); ?>
				</div>
				<div class="footer__grid-col">
					<h3 class="footer__grid-title">
						Support
					</h3>
					<?php wp_nav_menu([
					'theme_location' => 'footer-menu4',
					'menu_class' => 'footer__grid-links',
					]); ?>
				</div>
			</div>
		</div>
		<div class="footer_bottom">
			<h2 class="footer__copyright">
				© Copyright. All rights reserved.
			</h2>
			<div class="footer__media-links">
				<a href="https://www.facebook.com/"><i class="ri-facebook-line"></i></a>
				<a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
				<a href="https://twitter.com/"><i class="ri-twitter-line"></i></a>
				<a href="https://www.youtube.com/"><i class="ri-youtube-line"></i></a>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer()?>
</body>

</html>