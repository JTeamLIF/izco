var initialStartSlide = 1;

function slideShow(initialStartSlide) {
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
  });
});
