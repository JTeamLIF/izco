var initialStartSlide = 1;

function slideShow(initialStartSlide)	{
	$thumbnail = $('#' + (initialStartSlide + 1) );
	console.log($thumbnail);
	$thumbnail.click()
};

var slideShowInterval = setInterval( function() {
	slideShow(initialStartSlide);
	initialStartSlide++;
	initialStartSlide >= 6 ? initialStartSlide = 0 : initialStartSlide = initialStartSlide;
}, 5000);

$(function () {

	$('.imageThumbnail').each(function (item) {
		$(this).click(function (e) {
			if (e.which === undefined) {
				var thumbID = $(this).attr('id');
				$('.overSlideShowDiv').css('display', 'none');
				$('[data-id="' + thumbID + '"]').fadeIn();
			} else {
				clearInterval(slideShowInterval);
			}
		});
	});

  $.each(twitterFeed, function(index, data) {
    $('.twitterfeed').append(
      '<div class="tweets" id="twitterID-' + index + '" style="display:none;">' +
        '<div class="twitterdate"> JLIF <a href="http://twitter.com/jlifund"> @jlifund </a>' + moment(data.created_at).format('LL') + '</div>' +
        '<div class="twitterarticle">' + data.text + '</div>' +
      '</div>'
    );
    $('#twitterID-0').css('display', 'block');
  });

  $('#goBack').on('click', function () {
    var previousItem = $('.tweets:visible').prev();
    $('.tweets:visible').css('display', 'none');
    if (!previousItem.hasClass('tweets')) {
      previousItem = $('.tweets').last();
    }
    previousItem.css('display', 'block');
  });

  $('#goForward').on('click', function () {
    var nextItem = $('.tweets:visible').next();
    $('.tweets:visible').css('display', 'none');
    if (!nextItem.hasClass('tweets')) {
      nextItem = $('.tweets').first();
    }
    nextItem.css('display', 'block');
  })


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
  	$(this).tab('show');
	});

	// 6 IMAGES HOMEPAGE - on click turn image on/off
	$('.imageThumbnail').on('click', function() {

		clickedImageId = $(this).attr('id');
    $('.overSlideShowDiv').css('display', 'none');
    $('[data-id="' + clickedImageId + '"]').fadeIn();

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

   	//is this the open accordian?
  	if ($(this).next().css('display') === 'block') {
			allPanels.slideUp();
    	return false;
  	}

    allPanels.slideUp();
    console.log($(this));
    $(this).next().slideDown();
    return false;
  });

});

