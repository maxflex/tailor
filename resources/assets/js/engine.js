$(document).ready(function() {

    $('form').on('submit', function(e) {
        e.preventDefault()
    })

	// Tabs
	$('ul.about-tabs .about-tabs__link').click(function(event) {
		var tabId = $(this).attr('href');
		var $parentLi = $(this).parent('.about-tabs__item');
		var $tabsMenuList = $('ul.about-tabs .about-tabs__item');
		var activeClass = 'about-tabs__item_active';
		var $contentTabs = $('.about-tab-content');

		event.preventDefault();

		$tabsMenuList.removeClass(activeClass);
		$parentLi.addClass(activeClass);
		$contentTabs.hide();
		$(tabId).show();
	});

	//Projects slider
	projectsSlider();
	function projectsSlider() {
		var $sliderButtonLeft = $('.catalog-slider__arrow_left');
		var $sliderButtonRight = $('.catalog-slider__arrow_right');
		var slider = new Siema({
						selector: '.catalog-slider',
						duration: 200,
						easing: 'ease-out',
						perPage: 2,
						startIndex: 0,
						draggable: false,
						multipleDrag: false,
						loop: true,
					});
		var sliderSlide = function(side) {
			slider[side]();
		};

		$sliderButtonLeft.click(sliderSlide.bind(this, 'prev'));
		$sliderButtonRight.click(sliderSlide.bind(this, 'next'));
	}


	// Show popup
	$popUpMask = $('.pop-up-mask');

	$('.close-pop-up').click(closePopUp);

	$('.show-pop-up-order').click(function(event) {
		event.preventDefault();
		openPopUp(function() {
			$('.pop-up-order').show();
		});
	});

	$('.show-pop-up-order-certificate').click(function(event) {
		event.preventDefault();
		openPopUp(function() {
			$('.pop-up-order-certificate').show();
		});
	});

	window.popUpRequest = function(sent) {
		openPopUp(function() {
			$('.pop-up-' + (sent ? 'thankyou' : 'error')).show();
		});
	}

	function openPopUp(cb) {
		$popUpMask.show('fast', cb);
	}

	function closePopUp() {
		$popUpMask.hide();
		$('.pop-up-main').hide();
	}

    window.closePopUp = closePopUp
});
