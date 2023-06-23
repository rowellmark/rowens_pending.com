<?php get_header(); ?>

<section id="hero" class="relative">
	<div class="slideshow relative">
		<div class="accentLine">
			<div class="accentLine--base "></div>
			<div class="clear"></div>
			<div class="accentLine--bottomBase">
				<div class="accentLine-left"></div>
				<div class="accentLine-slant"></div>
				<div class="accentLine-right"></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php echo do_shortcode('
			[aios_slider id="Main Slideshow"]
		'); ?>
	</div><!-- end of slide show -->

	<div class="slideContent absolute w-100 h-100 flex items-center top-0 left-0">
		<div class="default-container">
			<h1>Building Green <br> Living Clean</h1>
		</div>
	</div><!-- end of slide content -->
	<div class="hpFloat--smi  absolute  top-0 h-100 flex flex-col items-center justify-center">
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
</section>

<section class="hpAbout relative">
	<div class="default-container default-padding">
		<div class="hpAbout--container flex justify-between relative">
			<div class="hpAbout--content relative">
				<div class="default-title">
					<h2>
						<span>About</span>
						Trelleborg <br> Development
					</h2>
				</div>

				<div class="hpAbout--contentWrap relative">
					<p>Trelleborg Development, LLC is a new and upcoming Real Estate company that is involved in the development aspect of the industry. Trelleborg Development, LLC’s Primary experience, and expertise are in the development of high-quality, lower-cost living for families, professionals, and students seeking the most up-to-date technologically advanced living environment.</p>

					<div class="default-button">
						<div class="bttnBorder">
							<div class="bttnBorder-slant"></div>
							<div class="bttnBorder-top"></div>
							<div class="bttnBorder-left"></div>
							<div class="bttnBorder-right"></div>
							<div class="bttnBorder-bottom"></div>
						</div>
						<a href="#">READ MORE<i></i></a> 
					</div>
				</div>

				<div class="accentLine --reverse --secondaryColor">
					<div class="accentLine--base "></div>
					<div class="clear"></div>
					<div class="accentLine--bottomBase">
						<div class="accentLine-left"></div>
						<div class="accentLine-slant"></div>
					</div>
					<div class="clear"></div>
				</div>
				
			</div><!-- end of about content -->
			<div class="hpAbout-image relative">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/aboutImage.jpg" alt="About Trelleborg Development" loading="lazy" class="h-auto block w-100" width="539" height="666"> 
			</div>
		</div><!-- end of bout container -->
	</div>
</section>
<?php get_footer(); ?>
