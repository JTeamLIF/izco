$(function () {
		$('.imageThumbnail').each(function (item) {
		$(this).on('click', function() {
			var thumbID = $(this).attr('id');
			$('.overSlideShowDiv').css('display', 'none');
			$('[data-id="' + thumbID + '"]').fadeIn();
		});
	});
});

