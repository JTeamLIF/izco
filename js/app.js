$(function () {
	$('.imageThumbnail').each(function (item) {
		$(this).on('click', function() {
			var thumbID = $(this).attr('id');
			$('.overSlideShowDiv').css('display', 'none');
			$('[data-id="' + thumbID + '"]').fadeIn();
		});
	});

	$('.glyphicon-triangle-bottom').on('click', function() {
		var div = $(this).closest('.overSlideShowDiv');
		var topGlyphIcon = $(this).closest('.overSlideShowDiv').find('.glyphicon-triangle-top');
		console.log(topGlyphIcon);
		topGlyphIcon.show();
		div.css('position', 'absolute');
		div.animate({ marginTop:'325px' })
	});

	$('.glyphicon-triangle-top').on('click', function() {
		var div = $(this).closest('.overSlideShowDiv');
		$(this).hide();
		div.animate({ marginTop:'0px' },
			{
				complete: function() {
					div.css('position', 'relative');
				}
			});
	});

	$('#myTabs a').click(function (e) {
  	e.preventDefault()
  	$(this).tab('show')
	});

	// 6 IMAGES HOMEPAGE - on click turn image on/off
	$('.imageThumbnail').on('click', function() {

		clickedImageId = $(this).attr('id');
		$('#headerImage').attr('class', 'image-bg-fluid-height-' + clickedImageId);
		$('.imageThumbnail').each(function () {
			var src = $(this).attr('src').replace('on', 'off');
			$(this).attr('src', src);
		});
		var src = $(this).attr('src').replace('off', 'on');
		$(this).attr('src', src);
	});

	// ACCORDIAN INVESTMENT PORTFOLIO PAGE
  var allPanels = $('.accordion > dd').hide();

  $('.accordion > dt').click(function () {
    allPanels.slideUp();
    $(this).next().slideDown();
    return false;
  });

});

