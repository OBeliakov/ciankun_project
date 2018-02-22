$(function() {
    $('.slider-product').slick({
		infinite: true,
		speed: 700,
		accessibility: 'boolean',
		prevArrow: '<div class="slider-btn slider-btn-left"><i class="i-arrow-slider"></i></div>',
		nextArrow: '<div class="slider-btn slider-btn-right"><i class="i-arrow-slider"></i></div>',
	});
	
	$('.open-slider').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeBtnInside: false,
        gallery:{
            enabled:true,
        }
    });
});