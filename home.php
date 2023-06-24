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
		<?php echo do_shortcode('
			[aios_slider id="Main Slideshow"]
		'); ?>
	</div><!-- end of slide show -->

	<div class="slideContent absolute w-100 h-100 flex items-center top-0 left-0">
		<div class="default-container">
			<h1><span data-aos="fade-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">Building Green</span><span data-aos="fade-down" data-aos-once="true" data-aos-offset="200"  data-aos-delay="200" data-aos-duration="800">Living Clean</span></h1>
		</div>
	</div><!-- end of slide content -->
	<div class="hpFloat--smi  absolute  top-0 h-100 flex flex-col items-center justify-center" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
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
		<div class="hpAbout--container flex justify-between relative items-start">
			<div class="hpAbout--content">
				<div class="default-title" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<h2>
						<span>About</span>
						Trelleborg <br> Development
					</h2>
				</div>

				<div class="hpAbout--contentWrap relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
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
					<div class="accentLine--base" data-aos="fade-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
					<div class="clear"></div>
					<div class="accentLine--bottomBase">
						<div class="accentLine-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="50" data-aos-duration="800"></div>
						<div class="accentLine-slant">
							<div class="slant-line"  data-aos="flip-down" data-aos-once="true"  data-aos-offset="100" data-aos-duration="800"></div>
						</div>
						<div class="accentLine-right" data-aos="fade-left" data-aos-once="true"  data-aos-offset="100" data-aos-duration="800"></div>
					</div>
					<div class="clear"></div>
				</div>
				
			</div><!-- end of about content -->
			<div class="hpAbout-image relative" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/aboutImage.jpg" alt="About Trelleborg Development" loading="lazy" class="h-auto block w-100" width="539" height="666"> 
			</div>
		</div><!-- end of bout container -->
	</div>
</section><!-- end of about -->
<section class="hpMeetTheTeam relative animateSlant">
	<div class="bgSets --black absolute w-100 top-0 left-0 --accentTopLeft">
		<canvas width="1600" height="516" class="block w-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/meetTheTeamBg.jpg" alt="Meet the team" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="516"> 
		<div class="bgSets-accentController"></div>
	</div>
	<div class="default-container">
		<div class="hpTeams-title relative" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title --white text-center">
				<h2 class="inline-block">
					<span>meet</span>
					the team
				</h2>
			</div>
		</div><!-- end of title -->
		<div class="hp--teams splide" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="splide__track">
				<div class="splide__list">

					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="LJ McGowan" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/LJ-McGowan.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">

								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>
							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>LJ McGowan</h3>
								<span>Chief Executive Officer</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Ron Montgomery" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Ron-Montgomery.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">

								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>
							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Ron Montgomery</h3>
								<span>Chief Financial Officer</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Rashida Owens" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Rashida-Owens-COO.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">
								
								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>
							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Rashida Owens</h3>
								<span>Chief Operating Officer</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Natalie James" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Natalie-James.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">
								
								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>
							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Natalie James</h3>
								<span>Head of Research & Development</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Justin Johnson" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Justin-Johnson.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">
								
								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>

							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Justin Johnson</h3>
								<span>President of Marketing & Innovations</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Chris Quarles" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Chris-Quarles.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">
								
								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>
							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Chris Quarles</h3>
								<span>Head of Innovations & Artificial Intelligence</span>
							</a>
						</div>
					</div><!-- end of team -->
					<div class="hp--team splide__slide">
						<div class="hpTeam--img relative">
							<a href="#" class="block relative">
								<canvas width="335" height="478" class="block w-100"></canvas>
								<img alt="Nicketa Jefferson" data-splide-lazy="<?= do_shortcode('[stylesheet_directory]')?>/images/agents/Nicketa-Jefferson.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="335" height="478">
								
								<div class="globBaseBorder --defaultBorder">
									<div class="globBaseBorder-slant"></div>
									<div class="globBaseBorder-top"></div>
									<div class="globBaseBorder-left"></div>
									<div class="globBaseBorder-right"></div>
									<div class="globBaseBorder-bottom"></div>
								</div>
							</a>

							<div class="hpTeam--hover absolute bottom-0">
								<ul>
									<li>
										<?= do_shortcode('[mail_to email="ljmcgowan@agentimage.com"]<i class="ai-font-envelope-f"></i>ljmcgowan@agentimage.com[/mail_to]')?>
									</li>
									<li>
										<i class="plusIcon"></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="hpTeam--content">
							<a href="#" class="block">
								<h3>Nicketa Jefferson</h3>
								<span>Head of Innovations & Artificial Intelligence</span>
							</a>
						</div>
					</div><!-- end of team -->


				</div>
			</div>

			<div class="customPagination--default --meetTheTeam flex items-center justify-center">
				<button class="pagination--prev" data-arrow="prev"> 
					<span>PREV</span>
					<i></i>
				</button>
				<ul class="splide__pagination customPaginate"></ul>
				<button class="pagination--next" data-arrow="next">
					<i></i>
					<span>Next</span>
				</button>
			</div>
		</div><!-- end of teams -->
	</div>
</section><!-- end of meet the team -->
<section class="hpCommunities relative">
	<div class="bgSets --white absolute w-100 top-0 left-0 --accentTopLeft --noaccent --grayscale">
		<canvas width="1600" height="574" class="block w-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/communties-bg.jpg" alt="Communities" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
	</div>
	<div class="default-container">

		<div class="hpCommunities-title relative" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title text-center">
				<h2 class="inline-block">
					<span>featured</span>
					communities
				</h2>
			</div>
		</div><!-- end of title -->
		<div class="--hpComunities relative flex">
			<div class="hpCommunity" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="200">
				<a href="#" class="block relative">
					<div class="hpCommunity--img relative">
						<canvas width="370" height="528" class="block w-100"></canvas>
						<div class="hpCommunity-IMGWrap">
							<img alt="International" src="<?= do_shortcode('[stylesheet_directory]')?>/images/com-1.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="370" height="528" loading="lazy">
							<h4>International</h4>
						</div>
						<div class="globBaseBorder --defaultBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
						<div class="globBaseBorder --reverseBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
					</div><!-- end of image -->
					<h3>International</h3>
				</a>
			</div>
			<div class="hpCommunity" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="220">
				<a href="#" class="block relative">
					<div class="hpCommunity--img relative">
						<canvas width="370" height="528" class="block w-100"></canvas>
						<div class="hpCommunity-IMGWrap">
							<img alt="texas" src="<?= do_shortcode('[stylesheet_directory]')?>/images/com-2.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="370" height="528" loading="lazy">
							<h4>texas</h4>
						</div>
						
						<div class="globBaseBorder --defaultBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
						<div class="globBaseBorder --reverseBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
					</div><!-- end of image -->
					<h3>texas</h3>
				</a>
			</div>
			<div class="hpCommunity" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="230">
				<a href="#" class="block relative">
					<div class="hpCommunity--img relative">
						<canvas width="370" height="528" class="block w-100"></canvas>
						<div class="hpCommunity-IMGWrap">
							<img alt="virginia" src="<?= do_shortcode('[stylesheet_directory]')?>/images/com-3.jpg" class="absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center" width="370" height="528" loading="lazy">
							<h4>virginia</h4>
						</div>
						
						<div class="globBaseBorder --defaultBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
						<div class="globBaseBorder --reverseBorder">
							<div class="globBaseBorder-slant"></div>
							<div class="globBaseBorder-top"></div>
							<div class="globBaseBorder-left"></div>
							<div class="globBaseBorder-right"></div>
							<div class="globBaseBorder-bottom"></div>
						</div>
					</div><!-- end of image -->
					<h3>virginia</h3>
				</a>
			</div>


		</div>

	</div><!-- end of default container -->
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
		<div class="hpTestimonials--container relative">
			
			<div class="hpTestimonials--title" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="default-title text-center">
					<h2 class="inline-block">
						<span>client</span>
						testimonials
					</h2>
				</div><!-- end of title -->
			</div>

			<div class="hpTestimonials-lists splide" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="splide__track">
					<div class="splide__list">

						<div class="hpTestimonials-list splide__slide">
							<p>“ At first I thought my property was ready to sell, Adi convinced me otherwise, and I’m really happy that I listened. Without her help, I wouldn’t have been able to sell my property for more than my asking price. Professional, considerate, and very experienced, Adi helped me prep my home, marketed the heck out of it, and was amazing at the negotiation table. If you’re selling your home in Jamaica, talk to Adi. “</p>
							<h3>JOHN DOE</h3>
						</div>

						<div class="hpTestimonials-list splide__slide">
							<p>“ At first I thought my property was ready to sell, Adi convinced me otherwise, and I’m really happy that I listened. Without her help, I wouldn’t have been able to sell my property for more than my asking price. Professional, considerate, and very experienced, Adi helped me prep my home, marketed the heck out of it, and was amazing at the negotiation table. If you’re selling your home in Jamaica, talk to Adi. “</p>
							<h3>JOHN DOE</h3>
						</div>
					</div>
				</div>

				<div class="customPagination--default --testimonials flex items-center justify-center">
					<button class="pagination--prev" data-arrow="prev"> 
						<span>PREV</span>
						<i></i>
					</button>
					<button class="pagination--next" data-arrow="next">
						<i></i>
						<span>Next</span>
					</button>
				</div>

			</div>

			<div class="hpTestimonials--bttn flex justify-center w-100" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="default-button">
					<div class="bttnBorder">
						<div class="bttnBorder-slant"></div>
						<div class="bttnBorder-top"></div>
						<div class="bttnBorder-left"></div>
						<div class="bttnBorder-right"></div>
						<div class="bttnBorder-bottom"></div>
					</div>
					<a href="#">VIEW all testimonials<i></i></a> 
				</div>
			</div>
			
		</div>
	</div>
</section><!-- end of testimonials -->
<section class="hpLatestBlog relative animateSlant">

	<div class="bgSets --white absolute w-100 h-100 top-0 left-0 --accentTopRight --grayscale">
		<canvas width="1600" height="852" class="block w-100 h-100 "></canvas>
		<div class="bgSets-accentController"></div>
	</div>

	<div class="default-container default-padding">

		<div class="hpLatestBlog--title relative" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title text-center">
				<h2 class="inline-block">
					<span>TRELLEBORG</span>
					LATEST BLOG
				</h2>
			</div><!-- end of title -->
		</div>


		<div class="hpBlog--lists splide" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			
			<div class="splide__track">

				<div class="splide__list">

					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>TELL YOUR AGENT EVERYTHING</h4>
								<p>Self living in the home that you have always dreamed about. You don’t want just another database that gives you rehashed property descriptions......</p>
								<h3>June 22 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>ITS TIME TO BUY A NEW HOME</h4>
								<p>With its stucco façade and distinct Southwestern feel, this 4-bedroom/3- bathroom single- family residence perfectly complements.....</p>
								<h3>June 23 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>FINDING THE RIGHT HOME AGENT</h4>
								<p>This classic luxury single-family home can accommodate big families with its spacious living areas, formal dining room, 7 bedrooms.....</p>
								<h3>June 27 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="TIPS FOR FIRST-TIME HOMEBUYERS" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>TIPS FOR FIRST-TIME HOMEBUYERS</h4>
								<p>With a living area that measures to 2,847 sq. ft., this Craftsman home leaves ample space for entertainment. The family room is impressive.....</p>
								<h3>June 29 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>TELL YOUR AGENT EVERYTHING</h4>
								<p>Self living in the home that you have always dreamed about. You don’t want just another database that gives you rehashed property descriptions......</p>
								<h3>June 22 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>ITS TIME TO BUY A NEW HOME</h4>
								<p>With its stucco façade and distinct Southwestern feel, this 4-bedroom/3- bathroom single- family residence perfectly complements.....</p>
								<h3>June 23 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="Latest News" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>FINDING THE RIGHT HOME AGENT</h4>
								<p>This classic luxury single-family home can accommodate big families with its spacious living areas, formal dining room, 7 bedrooms.....</p>
								<h3>June 27 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					<div class="hpBlog--list splide__slide">
						<a href="#" class="block relative">
							<div class="globBaseBorder --defaultBorder">
								<div class="globBaseBorder-slant"></div>
								<div class="globBaseBorder-top"></div>
								<div class="globBaseBorder-left"></div>
								<div class="globBaseBorder-right"></div>
								<div class="globBaseBorder-bottom"></div>
							</div>
							<div class="hpBlog--bg absolute">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/blog-image.jpg" alt="TIPS FOR FIRST-TIME HOMEBUYERS" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
							</div>
							<div class="hpBlog--content relative">
								<div class="logo-gradient"></div>
								<h4>TIPS FOR FIRST-TIME HOMEBUYERS</h4>
								<p>With a living area that measures to 2,847 sq. ft., this Craftsman home leaves ample space for entertainment. The family room is impressive.....</p>
								<h3>June 29 2023</h3>
								<div class="default-button default-button-active">
									<div class="bttnBorder">
										<div class="bttnBorder-slant"></div>
										<div class="bttnBorder-top"></div>
										<div class="bttnBorder-left"></div>
										<div class="bttnBorder-right"></div>
										<div class="bttnBorder-bottom"></div>
									</div>
									<span>READ MORE<i></i></span> 
								</div>
							</div>
						</a>
					</div><!-- end of blog list -->
					
				</div>
			</div>

			<div class="customPagination--default --latestBlog flex items-center justify-center">
				<button class="pagination--prev" data-arrow="prev"> 
					<span>PREV</span>
					<i></i>
				</button>
				<ul class="splide__pagination customPaginate"></ul>
				<button class="pagination--next" data-arrow="next">
					<i></i>
					<span>Next</span>
				</button>
			</div>

		</div>
	</div>
</section><!-- latest blog -->
<section class="hpSocialMedia relative">
	

	<div class="accentLine --secondaryColor">
		<div class="accentLine--base" data-aos="fade-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
		<div class="clear"></div>
		<div class="accentLine--bottomBase">
			<div class="accentLine-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="50" data-aos-duration="800"></div>
			<div class="accentLine-slant">
				<div class="slant-line"  data-aos="flip-down" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
			</div>
			<div class="accentLine-right" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"></div>
		</div>
		<div class="clear"></div>
	</div>
		
	<div class="bgSets --black absolute w-100 h-100 top-0 left-0 --accentBottomLeft --grayscale">
		<canvas width="1600" height="852" class="block w-100 h-100 "></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-bg.jpg" alt="Social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
		<div class="bgSets-accentController"></div>

	</div>


	<div class="default-container default-padding">
		<div class="hpSocialMedia--Container relative flex justify-between">
			<div class="hpSocialMedia--text"  data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="default-title --white">
					<h2 class="inline-block">
						<span>follow us on</span>
						social media
					</h2>
				</div><!-- end of title -->
				<div class="social-bttns flex flex-col">
					
					<div class="default-button --white">
						<div class="bttnBorder">
							<div class="bttnBorder-slant"></div>
							<div class="bttnBorder-top"></div>
							<div class="bttnBorder-left"></div>
							<div class="bttnBorder-right"></div>
							<div class="bttnBorder-bottom"></div>
						</div>
						<a href="#" traget="_blank"><em class="ai-font-instagram"></em>@TrelleborgDevelopmentGroup<i></i></a> 
					</div>

					<div class="default-button --white">
						<div class="bttnBorder">
							<div class="bttnBorder-slant"></div>
							<div class="bttnBorder-top"></div>
							<div class="bttnBorder-left"></div>
							<div class="bttnBorder-right"></div>
							<div class="bttnBorder-bottom"></div>
						</div>
						<a href="#" traget="_blank"><em class="ai-font-facebook"></em>TrelleborgDevelopmentGroup<i></i></a> 
					</div>

					<div class="default-button --white">
						<div class="bttnBorder">
							<div class="bttnBorder-slant"></div>
							<div class="bttnBorder-top"></div>
							<div class="bttnBorder-left"></div>
							<div class="bttnBorder-right"></div>
							<div class="bttnBorder-bottom"></div>
						</div>
						<a href="#" traget="_blank"><em class="ai-font-twitter"></em>TrelleborgDevelopmentGroup<i></i></a> 
					</div>
					
					<div class="default-button --white">
						<div class="bttnBorder">
							<div class="bttnBorder-slant"></div>
							<div class="bttnBorder-top"></div>
							<div class="bttnBorder-left"></div>
							<div class="bttnBorder-right"></div>
							<div class="bttnBorder-bottom"></div>
						</div>
						<a href="#" traget="_blank"><em class="ai-font-linkedin"></em>TrelleborgDevelopmentGroup<i></i></a> 
					</div>

				</div>
			</div><!-- end of text -->
			<div class="hpSocialMedia--images splide"  data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="splide__track">
					<div class="splide__list">

						<div class="hpSocialMedia-image splide__slide">
							<a href="#" target="_blank" class="block relative">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social1.jpg" alt="social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
								<canvas width="191" height="191" class="block w-100"></canvas>
							</a>
						</div><!-- end of image -->
						<div class="hpSocialMedia-image splide__slide">
							<a href="#" target="_blank" class="block relative">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social2.jpg" alt="social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
								<canvas width="191" height="191" class="block w-100"></canvas>
							</a>
						</div><!-- end of image -->
						<div class="hpSocialMedia-image splide__slide">
							<a href="#" target="_blank" class="block relative">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social3.jpg" alt="social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
								<canvas width="191" height="191" class="block w-100"></canvas>
							</a>
						</div><!-- end of image -->
						<div class="hpSocialMedia-image splide__slide">
							<a href="#" target="_blank" class="block relative">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social4.jpg" alt="social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
								<canvas width="191" height="191" class="block w-100"></canvas>
							</a>
						</div><!-- end of image -->
						<div class="hpSocialMedia-image splide__slide">
							<a href="#" target="_blank" class="block relative">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social5.jpg" alt="social" loading="lazy" class="h-100 block w-100 absolute object-fit-cover object-position-center top-0 left-0" width="1600" height="574"> 
								<canvas width="191" height="191" class="block w-100"></canvas>
							</a>
						</div><!-- end of image -->


					</div>
				</div>

			</div><!-- end of images -->

		</div>
	</div>

</section>
<?php get_footer(); ?>
