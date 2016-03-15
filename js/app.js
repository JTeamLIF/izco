

$(function () {

	$('.imageThumbnail').each(function (item) {
		$(this).click(function (e) {
			if (e.which === undefined) {
				var thumbID = $(this).attr('id');
				$('.overSlideShowDiv').css('display', 'none');
				$('[data-id="' + thumbID + '"]').fadeIn(2500);
			} else {
				clearInterval(slideShowInterval);
			}
		});
	});

	$('.glyphicon-triangle-bottom').on('click', function() {
		var div = $(this).closest('.overSlideShowDiv');
		var topGlyphIcon = $(this).closest('.overSlideShowDiv').find('.glyphicon-triangle-top');
		console.log(topGlyphIcon);
		topGlyphIcon.show();
		div.css('position', 'absolute');
		div.animate({ marginTop:'360px' })
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
  	$(this).tab('show');
	});

	// 6 IMAGES HOMEPAGE - on click turn image on/off
	$('.imageThumbnail').on('click', function() {

		clickedImageId = $(this).attr('id');
    $('.overSlideShowDiv').css('display', 'none');
    $('[data-id="' + clickedImageId + '"]').fadeIn(2500);
		$cloned = $('#headerImage').clone();
		$cloned.css('position', 'absolute');
		$cloned.css('height', '500px');
		$cloned.css('width', '100%');
		$cloned.css('left', 0);
		$('#headerImage').prepend($cloned);
		$cloned.fadeOut(1500, function() { $(this).remove() });
		$('#headerImage').attr('class', 'image-bg-fluid-height-' + clickedImageId);
		$('#headerImage').fadeTo(1500, 1);
		$('.imageThumbnail').each(function () {
			var src = $(this).attr('src').replace('on', 'off');
			$(this).attr('src', src);
		});
		var src = $(this).attr('src').replace('off', 'on');
		$(this).attr('src', src);
	});
});

