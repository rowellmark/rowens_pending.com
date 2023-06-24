			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	

	<section class="globGetInTouch relative">
		<div class="default-container default-padding">
			<div class="globGetInTouch--container relative">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Form") ) : ?><?php endif ?>
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
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Logo") ) : ?><?php endif ?>
				</div><!-- end of footer logo -->
				<div class="footer--ContactInfo">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Contact Info") ) : ?><?php endif ?>
				</div><!-- end of contact info -->
				<div class="footer-dislaimer">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Disclaimer") ) : ?><?php endif ?>
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
