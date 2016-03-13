$(function () {
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
