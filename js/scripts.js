(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			/// specific for homepage
			if ($(b).hasClass('home')) {
				
			}
			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {

			$mainNav = $('#nav')
			$mainNav.splitNav({
				'logo': '.logo',
				'navClasses': 'flex justify-center align-center'
			});


			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();

			
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

		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');