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

});

