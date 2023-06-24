			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	

	<section class="globGetInTouch relative">
		<div class="default-container default-padding">
			<div class="globGetInTouch--container relative">

				<div class="globGetInTouch-heading text-center"  data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<div class="default-title text-center">
						<h2 class="inline-block">
							<span>TRELLEBORG</span>
							get in touch
						</h2>
					</div><!-- end of title -->
					<p>Subscribe to our monthly newsletters and get inside knowledge of what is<br> coming before it hits the market!</p>
				</div>

				<div class="globGetInTouch-form"  data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
				</div>

			</div>
		</div>
	</section>
	<footer class="footer relative animateSlant">

			
		<div class="bgSets --black absolute w-100 h-100 top-0 left-0 --accentTopRight">
			<canvas width="1600" height="852" class="block w-100 h-100 "></canvas>
			<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/footer-bg.jpg" alt="Social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
			<div class="bgSets-accentController"></div>

		</div>

		
		<div class="footer-container relative">
			<div class="default-container default-padding">
				<div class="footer--Logo">
					<a href="<?php echo esc_url( home_url() ) ?>" class="site-name">
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Trelleborg Development" loading="lazy" class="h-auto block w-100" width="283" height="157"> 
					</a>
				</div><!-- end of footer logo -->
				<div class="footer--ContactInfo">
					<ul class="flex items-center justify-center">
						<li>
							<i class="ai-font-phone"></i>
							<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
						</li>
						<li>
							<i class="ai-font-envelope-f"></i>
							<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
						</li>
						<li>
							<i class="ai-font-location-c"></i>
							<?= do_shortcode('[ai_client_address]')?>
						</li>
					</ul>
					<div class="footer-smi flex items-center justify-center">
						<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank" class="flex relative">
							<i class="ai-font-facebook"></i>
							facebook
						</a>
						<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank" class="flex relative">
							<i class="ai-font-instagram"></i>
							instagram
						</a>
						<a href="<?= do_shortcode('[ai_client_twitter]')?>" target="_blank" class="flex relative">
							<i class="ai-font-twitter"></i>
							twitter
						</a>
						<a href="<?= do_shortcode('[ai_client_linkedin]')?>" target="_blank" class="flex relative">
							<i class="ai-font-linkedin"></i>
							linkedin
						</a>
					</div>
				</div><!-- end of contact info -->
				<div class="footer-dislaimer">
					<p>Trelleborg Development is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at 713.770.6231 to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
				</div>
			</div><!-- end of default container -->
		</div><!-- end of footer container -->

		
		<div class="footer-navigation relative">
			<div class="default-container default-padding">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div>
		</div>
		<div class="footer-copyright relative">
			<div class="default-container default-padding">
				<p>Copyright &copy; <?php echo date('Y') ?> TRELLEBORG DEVELOPMENT All rights reserved. <a href="/sitemap">Sitemap</a>. <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
				<div class="copyright-logos flex items-center justify-center">
					<i class="ai-font-eho"></i>
					<i class="ai-font-realtor-mls"></i>
				</div>

			</div>
		</div>
		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
