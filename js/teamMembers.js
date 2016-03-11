$(function () {

  // TEAM MEMEBERS
  turnEveryoneOff();

  // on a member click
  $('.teamMember').on('click', function () {

    // first thing turn everyone off after click
    turnEveryoneOff();

    // turn clicked person on - first gets id which is the persons name, then put name into url to load the correct image
    var id = $(this).attr('id');
    $(this).css('background-image', 'url(images/Bio_tb_on_' + id + '.png)');

    //replace main div with data
    $('#mainImage').attr('src', data[id].bigURL);
    $('#mainName').html(data[id].name);
    $('#mainTitle').html(data[id].title);
    $('#mainDesc').html(data[id].desc);

  });

  // function to turn everyone off
  function turnEveryoneOff() {
    $('.teamMember').each(function () {
      var id = $(this).attr('id');
      $(this).css('background-image', 'url(images/Bio_tb_off_' + id + '.png)');
    });
  }

});

var data = {
  Andrew_Charlesworth: {
    name: 'Andrew Charlesworth',
    title: 'Investment Adviser',
    desc: 'Andrew Charlesworth is a Director of JLCM, responsible for delivering the fund’s performance targets. He has been able to draw on 19 years of experience in infrastructure development and finance to help JLIF grow from a Portfolio Value of £259.0 million at launch to a Portfolio Value of £864.9 million, overseeing JLIF’s entry into the FTSE 250 index within just 11 months of its IPO. Andrew’s broad experience of the PPP market, having acted as advisor to authorities in procuring PPP projects and to senior lenders in funding them has ensured that the investments JLIF has made have been accretive to shareholder value, delivering above forecast returns. Prior to his current role, Andrew led significant parts of the primary investment business within John Laing, initially as CEO of Regenter (a John Laing social housing PPP joint venture), then as Local Authority PPP Director and lastly as the Financial and Commercial Director for the global John Laing Investments business. Andrew holds the CFA UK’s Investment Management Certificate (Part 1).',
    bigURL: 'images/Bio_main_Andrew_Charlesworth.png'
  },
  Jamie_Pritchard: {
    name: 'Jamie Pritchard',
    title: 'Investment Adviser',
    desc: 'Jamie Pritchard is Director of Asset Management for JLCM. His primary focus is on ensuring that forecast returns from JLIF’s portfolio are delivered and on identification and management of value enhancements. In his role, Jamie serves as a director on the board of a number of the project companies in which JLIF is a shareholder. With over 14 years’ experience in infrastructure investment gained across both the primary and secondary markets, Jamie’s extensive portfolio management experience helped deliver value enhancements that underpinned underlying growth in 2014 of £73.0 million and ensured that distributions received from the underlying assets were £2.4 million ahead of budget. Jamie also provides support for JLIF’s bidding activities with specific focus on valuation, identifying value enhancements and portfolio structuring. Prior to joining JLCM, Jamie worked at Serco leading the commercial and financial structuring of bids, prior to which he worked at Balfour Beatty Investments. He is a member of the Institute of Chartered Accountants in England and Wales.',
    bigURL: 'images/Bio_main_Jamie_Pritchard.png'
  },
  Joanne_Griffin: {
    name: 'Joanne Griffin (née Gibbins)',
    title: 'Director of Investments',
    desc: 'Joanne Griffin is Director of Investments for JLCM, responsible for the sourcing, valuation and execution of acquisitions, development of JLIF’s business into new PPP markets, and for shareholder and board reporting. Joanne has over 11 years’ experience in infrastructure investments and serves as a director at both asset and corporate levels. She led the process that saw JLIF sign a £150 million revolving credit facility and was responsible for over £800 million of acquisitions to date. Prior to joining JLCM, Joanne led the finance and commercial elements of multiple PPP projects across most sectors of the infrastructure market, both in the UK and internationally. Previously, Joanne worked at Carillion, a construction-to-services company, and gained significant experience in financial modelling for bidding and advising consortia on their investments. Joanne is an Associate member of the Chartered Institute of Securities and Investment.',
    bigURL: 'images/Bio_main_Joanne_Griffin.png'
  }
}
