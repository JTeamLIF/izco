$(function () {

  // ACCORDIAN INVESTMENT PORTFOLIO PAGE

  var allPanels = $('.accordion > dd').hide();

  $('.accordion > dt').click(function () {

    var firstAssetInClickeddt = $(this).next().find('.smallAsset').first();
    firstAssetInClickeddt.addClass('smallAssetActive');
    var $img = firstAssetInClickeddt.find('.smallAssetImage');
    $img.attr('src', $img.attr('src').replace('off', 'on'));

    //is this the open accordian?
    if ($(this).next().css('display') === 'block') {
      allPanels.slideUp();
      return false;
    }

    allPanels.slideUp();
    $(this).next().slideDown();

    $('html, body').animate({
      scrollTop: $('.assetCard:visible').offset().top
    }, 1500);

    return false;
  });

  //default openings
  $('.health').show();
  var healthDiv = $('.health').find('.smallAsset').first();
  healthDiv.addClass('smallAssetActive');
  var $img = healthDiv.find('.smallAssetImage');
  $img.attr('src', $img.attr('src').replace('off', 'on'));


  $('.smallAsset').on('click', function () {
    var assetDiv = $(this);
    var parentDD = assetDiv.parent('dd');
    var ddClassName = parentDD.attr('class');
    var assetCode = assetDiv.data('code');

    // first thing turn everyone off after click
    turnAllAssetsOff(ddClassName);

    // turn clicked person on - first gets id which is the persons name, then put name into url to load the correct image
    var id = assetDiv.attr('id');
    var $img = assetDiv.find('.smallAssetImage');
    $img.attr('src', $img.attr('src').replace('off', 'on'));
    assetDiv.addClass('smallAssetActive');
    //replace main div with data
    var selectedAsset = mapData.filter( function(obj) {
      return obj.code === assetCode;
    });
    $('html, body').animate({
      scrollTop: $('.assetCard:visible').offset().top
    }, 1500);
    parentDD.find('.mainImage').attr('src', 'images/gallery/' + ddClassName + '/Gallery_main_' + id + '.png');
    parentDD.find('.mainName').html(selectedAsset[0].name);
    parentDD.find('.mainAddress').html(selectedAsset[0].address);
    parentDD.find('.mainDesc').html(selectedAsset[0].desc);
    parentDD.find('.percentageOwned').html(selectedAsset[0].ownership + '%')
  });


});
