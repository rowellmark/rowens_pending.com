(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			slantAnimation();

			/// specific for homepage
			if ($(b).hasClass('home')) {
				runTeams();
				runTestimonials();
				runBlog();
				runSocial();

			}
			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {

			$mainNav = $('#nav')
			$mainNav.splitNav({
				'logo': '.logo',
				'navClasses': 'flex justify-center align-center'
			});


			const $nav = $('.nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
			const $fixedNav = $('#fixed-nav');
			if ($fixedNav.length > 0) $fixedNav.navTabDoubleTap();

			
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.fixedHeader');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-show');
						}
						else {
							$header.removeClass('header-show');
						}
					}
					else {
						$header.removeClass('header-show');
					}

				});
			}
			this.onScrollFixed();
		}
		runTeams = () => {

			let $pagination = $('.--meetTheTeam button');

			let teams = new Splide('.hp--teams', {
				type:'loop',
				perPage: 4,
				preloadPages: 4,
				rewind: true,
				arrows:false,
				lazyLoad: 'nearby',
				breakpoints: {
					991: {
						perPage: 2,
					
					},
					480: {
						perPage: 1,
					
					},
				},
				
			});

			$pagination.on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');
				// for prev
				if (type == 'prev') {
					teams.go('<');
				}
				if (type == 'next') {
					teams.go('>');
				}
			});
			teams.mount();
		}
		runTestimonials = () => {

			let $pagination = $('.--testimonials button');

			let testimonials = new Splide('.hpTestimonials-lists', {
				type: 'loop',
				perPage: 1,
				rewind: true,
				arrows: false,
				pagination: false
			});

			$pagination.on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');
				// for prev
				if (type == 'prev') {
					testimonials.go('<');
				}
				if (type == 'next') {
					testimonials.go('>');
				}
			});
			testimonials.mount();
		}
		runBlog = () => {

			let $pagination = $('.--latestBlog button');

			let blog = new Splide('.hpBlog--lists', {
				type: 'loop',
				perPage: 4,
				rewind: true,
				arrows: false,
				pagination: true,
				breakpoints: {
					991: {
						perPage: 2,

					},
					480: {
						perPage: 1,

					},
				},
			});

			$pagination.on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');
				// for prev
				if (type == 'prev') {
					blog.go('<');
				}
				if (type == 'next') {
					blog.go('>');
				}
			});
			blog.mount();
		}
		runSocial = () => {
			const social = new Splide('.hpSocialMedia--images', {
				perPage: 2,
				perMove: 1,
				arrows: false,
				pagination: false,
				drag: false,
				grid: {
					// You can define rows/cols instead of dimensions.
					dimensions: [[1, 1], [2, 2], [2, 1], [1, 2], [2, 2], [3, 2]]
				},
				breakpoints: {
					640: {
						height: '8rem',
						perPage: 1,
						grid: {
							dimensions: [[2, 2], [1, 1], [2, 1], [1, 2], [2, 2]],
						},
					},
				},
			});

			social.mount(window.splide.Extensions);

		}
		slantAnimation = () => {
			const callback = (entries) => {

				console.log(entries);
				
				entries.forEach(
					
					(entry) => {

						$target = $('.' + entry.target.classList[0] + '');
						if (entry.isIntersecting) {
							$target.addClass('animateNow');
						}
					}
				);
			}

			const observerOptions = {
				root: null,
				rootMargin: '-50% -50%',
				threshold: [0, 0.5],
			};

			let observer = new IntersectionObserver(callback, observerOptions);

			const animationItems = document.querySelectorAll('.animateSlant');

			animationItems.forEach(item => {
				observer.observe(item);
			});
		}
		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');