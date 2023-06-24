<?php get_header(); ?>

<section id="hero" class="relative">
	<div class="slideshow relative">
		<div class="accentLine">
			<div class="accentLine--base" data-aos="fade-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
			<div class="clear"></div>
			<div class="accentLine--bottomBase">
				<div class="accentLine-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
				<div class="accentLine-slant">
					<div class="slant-line"  data-aos="flip-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
				</div>
				<div class="accentLine-right" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slideshow") ) : ?><?php endif ?>
	</div><!-- end of slide show -->

	<div class="slideContent absolute w-100 h-100 flex items-center top-0 left-0">
		<div class="default-container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Tagline") ) : ?><?php endif ?>
		</div>
	</div><!-- end of slide content -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Social Media") ) : ?><?php endif ?>

</section>

<section class="hpAbout relative">
	<div class="default-container default-padding">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: About") ) : ?><?php endif ?>
	</div>
</section><!-- end of about -->
<section class="hpMeetTheTeam relative animateSlant">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Meet The Team") ) : ?><?php endif ?>
</section><!-- end of meet the team -->
<section class="hpCommunities relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Communities") ) : ?><?php endif ?>
</section><!-- end of communities -->

<section class="hpTestimonials relative">
	<div class="accentLine --secondaryColor">
		<div class="accentLine--bottomBase">
			<div class="accentLine-slant">
				<div class="slant-line" data-aos="flip-down" data-aos-once="true"  data-aos-offset="100" data-aos-duration="800"></div>
			</div>
			<div class="accentLine-right" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="230"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="default-container relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Testimonials") ) : ?><?php endif ?>
	</div>
</section><!-- end of testimonials -->
<section class="hpLatestBlog relative animateSlant">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Latest Blog") ) : ?><?php endif ?>
</section><!-- latest blog -->
<section class="hpSocialMedia relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Follow Social Media") ) : ?><?php endif ?>
</section>
<?php get_footer(); ?>
