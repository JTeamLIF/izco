$(function () {

  // TEAM MEMEBERS
  turnEveryoneOff();
  turnFirstPersonOn();

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

  function turnFirstPersonOn() {
    var replacedLink = $('.teamMember').first().attr('style').replace('_off', '_on');
    $('.teamMember').first().attr('style', replacedLink);
  }

});

var data = {
  Andrew_Charlesworth: {
    name: 'Andrew Charlesworth',
    title: 'Investment Adviser',
    desc: '<p>Andrew Charlesworth is a Director of JLCM, responsible for delivering the fund’s performance targets. He has been able to draw on 19 years of experience in infrastructure development and finance to help JLIF grow from a Portfolio Value of £259.0 million at launch to a Portfolio Value of £867.8 million, overseeing JLIF’s entry into the FTSE 250 index within just 11 months of its IPO. Andrew’s broad experience of the PPP market, having acted as advisor to authorities in procuring PPP projects and to senior lenders in funding them has ensured that the investments JLIF has made have been accretive to shareholder value, delivering above forecast returns.</p><p>Prior to his current role, Andrew led significant parts of the primary investment business within John Laing, initially as CEO of Regenter (a John Laing social housing PPP joint venture), then as Local Authority PPP Director and lastly as the Financial and Commercial Director for the global John Laing Investments business. Andrew holds the CFA UK’s Investment Management Certificate (Part 1).</p>',
    bigURL: 'images/Bio_main_Andrew_Charlesworth.png'
  },
  Jamie_Pritchard: {
    name: 'Jamie Pritchard',
    title: 'Director of Asset Management',
    desc: '<p>Jamie Pritchard is Director of Asset Management for JLCM. His primary focus is on ensuring that forecast returns from JLIF’s portfolio are delivered and on identification and management of value enhancements. In his role, Jamie serves as a director on the board of a number of the project companies in which JLIF is a shareholder. With over 14 years’ experience in infrastructure investment gained across both the primary and secondary markets, Jamie’s extensive portfolio management experience helped deliver value enhancements that underpinned underlying growth in 2015 of £66.8 million and ensured that distributions received from the underlying assets were £4.3 million ahead of project forecasts. Jamie also provides support for JLIF’s bidding activities with specific focus on valuation, identifying value enhancements and portfolio structuring. </p><p>Prior to joining JLCM, Jamie worked at Serco leading the commercial and financial structuring of bids, prior to which he worked at Balfour Beatty Investments. He is a member of the Institute of Chartered Accountants in England and Wales.</p>',
    bigURL: 'images/Bio_main_Jamie_Pritchard.png'
  },
  Joanne_Griffin: {
    name: 'Joanne Griffin (née Gibbins)',
    title: 'Director of Investments',
    desc: '<p>Joanne Griffin is Director of Investments for JLCM, responsible for the sourcing, valuation and execution of acquisitions, development of JLIF’s business into new PPP markets, and for shareholder and board reporting. Joanne has over 11 years’ experience in infrastructure investments and serves as a director at both asset and corporate levels. She led the process that saw JLIF sign a £150 million revolving credit facility and was responsible for over £800 million of acquisitions to date. </p><p>Prior to joining JLCM, Joanne led the finance and commercial elements of multiple PPP projects across most sectors of the infrastructure market, both in the UK and internationally. Previously, Joanne worked at Carillion, a construction-to-services company, and gained significant experience in financial modelling for bidding and advising consortia on their investments. Joanne is an Associate member of the Chartered Institute of Securities and Investment.</p>',
    bigURL: 'images/Bio_main_Joanne_Griffin.png'
  },
    Paul_Lester: {
    name: 'Paul Lester',
    title: 'Chairman',
    desc: '<p>Paul Lester, a resident of the United Kingdom, was appointed as non-executive Chairman of Greenergy International Ltd on 1 October 2010, and Knight Square in April 2012. He has also been appointed Chairman Designate of Essentra Plc. He is a member of the Government’s Major Project Review Group. Mr Lester was chief executive of VT Group plc, the support services company, from July 2002 until its acquisition by Babcock International in July 2010. </p><p>Mr Lester was group managing director of Balfour Beatty plc, the international engineering, construction and services group, from 1997 to 2002, and chief executive of Graseby plc from 1990 to 1997. Mr Lester has also held senior management positions at Schlumberger and the Dowty Group plc. /<p><p>Mr Lester is a former president of the Society of Maritime Industries.<p>',
    bigURL: 'images/Bio_main_Paul_Lester.png'
  },
    David_MacLellan: {
    name: 'David MacLellan',
    title: 'Deputy Chairman & Senior Independent Director',
    desc: '<p>David MacLellan, a resident of the United Kingdom, is the founder and currently Chairman of RJD Partners, a midmarket private-equity business focused on the services and leisure sectors. Previously, Mr MacLellan was an executive director of Aberdeen Asset Managers plc following its acquisition in 2000 of Murray Johnstone where he was latterly Chief Executive having joined the company in 1984. Mr MacLellan has served on the boards of a number of companies and is currently chairman of Havelock Europa plc and a non-executive director of J&J Denholm Limited, a private company registered in England with its headquarters in Glasgow. He resigned as a non-executive director of Maven Income and Growth VCT 2 plc. with effect from 16 September 2015.</p><p> David MacLellan is a past council member of the British Venture Capital Association and a member of the Institute of Chartered Accountants of Scotland. He also serves as Chairman of the Nomination Committee of JLIF</p>',
    bigURL: 'images/Bio_main_David_MacLellan.png'
  },
    Talmai_Morgan: {
    name: 'Talmai Morgan',
    title: 'Director',
    desc: '<p>Talmai Morgan, a resident of Guernsey, qualified as a barrister in 1976. He holds a MA in Economics and Law from Cambridge University. He moved to Guernsey in 1988 where he worked for Barings and then for the Bank of Bermuda. From 1999 to 2004, he was Director of Fiduciary Services and Enforcement at the Guernsey Financial Services Commission (Guernsey’s financial regulatory agency) where he was responsible for the design and subsequent implementation of Guernsey’s law relating to the regulation of fiduciaries, administration businesses and company directors. He was also particularly involved in the activities of the Financial Action Task Force and the Offshore Group of Banking Supervisors.</p><p> For the last ten years, Mr Morgan has been the non-executive chairman or a non-executive director of a number of publicly listed investment companies. He is presently Chairman of NB Private Equity Partners Limited, Sherborne Investors (Guernsey) B Limited and Global Fixed Income Realisation Limited. He also sits on the board of BH Macro Limited, BH Global Limited, NB Distressed Debt Investment Fund Limited and Real Estate Credit Investments PCC Limited.</p>',
    bigURL: 'images/Bio_main_Talmai_Morgan.png'
  },
    Christopher_Spencer: {
    name: 'Christopher Spencer',
    title: 'Director & Chairman of the Audit Committee',
    desc: '<p>Christopher Spencer, a resident of Guernsey, qualified as a chartered accountant in London in 1975. Following two years in Bermuda, he moved to Guernsey. Mr Spencer, who specialised in audit and fiduciary work, was Managing Partner/Director of Pannell Kerr Forster (Guernsey) Limited from 1990 until his retirement in May 2000. Mr Spencer is a member of the AIC Offshore Committee, a past President of the Guernsey Society of Chartered and Certified Accountants and a past Chairman of the Guernsey Branch of the Institute of Directors.</p><p> Mr Spencer also sits on the board of Directors of Real Estate Credit Investments Limited, JP Morgan Private Equity Limited, Ruffer Investment Company and SQN Asset Finance Income Fund Limited, each of which is listed on the London Stock Exchange, and Summit Germany Limited, which is listed on the London Stock Exchange’s Alternative Investment Market.</p>',
    bigURL: 'images/Bio_main_Christoper_Spencer.png'
  },
    Guido_van_Berkel: {
    name: 'Guido van Berkel',
    title: 'Director',
    desc: '<p>Guido Van Berkel, a resident of Luxembourg, started his career in the financial industry more than 40 years ago and has held various senior positions with Bank Sarasin, Rabobank, Robeco Group and Citibank. Over the course of his career, he has worked in The Netherlands, Jersey, Switzerland, Luxembourg and Scandinavia.</p><p> From 2001 until 2007 Mr Van Berkel was active on the Executive Board of Bank Sarasin in Switzerland and as such he acted as chairman of various Sarasin entities across Europe and Asia. Currently Mr Van Berkel is an independent director for a number of Luxembourg, British, Channel Islands and Dutch investment fund ranges and from the beginning of 2012 he has been chairman of BlackRock Luxembourg SA and BlackRock Fund Management Sàrl in Luxembourg as well as chairman of BlackRock Fund Netherlands BV.<p>',
    bigURL: 'images/Bio_main_Guido_van_Berkel.png'
  },
    Helen_Green: {
    name: 'Helen Green',
    title: 'Director & Chairman of the Risk Committee',
    desc: '<p>Helen Green, a resident of Guernsey, has been employed by Saffery Champness, a top 15 firm of chartered accountants since 1984. Mrs Green qualified in 1987 as a chartered accountant and became a partner in the London office in 1997. Since 2000 she has been based in the Guernsey office where she is client liaison director responsible for trust and company administration. Mrs Green is a non-executive director of Acorn Income Fund Limited (of which she has been chairman since 2012), a non-executive director of Henderson Diversified Income Fund Limited, and was appointed as a non-executive director of City Natural Resources High Yield Trust plc, on 1 September 2015. All three companies are listed on the London Stock Exchange’s Main Market.</p><p> Ms Green is also a non-executive director of Advance Frontier Markets Fund Limited and Landore Resources Limited, both of which are listed on the London Stock Exchange’s Alternative Investment Market.</p>',
    bigURL: 'images/Bio_main_Helen_Green.png'
  },
    Gianluca_Mazzoni: {
    name: 'Gianluca Mazzoni',
    title: 'Deputy Investment Adviser',
    desc: '<p>Gianluca Mazzoni recently joined JLCM, as Deputy Investment Adviser to JLIF in charge of Business Development.</p><p>He previously worked for Société Générale (then Access Capital Partners) developing significant experience in the origination and execution of global investment opportunities in equity infrastructure. Prior to this Gianluca worked in corporate finance, private equity and M&A across a wide range of sectors as part of The Boston Consulting Group and Bain & Co. He holds an MBA from Bocconi University (Italy) and Columbia Business School (USA) and an M.Sc. in Economics and Finance from Universita Politecnica delle Marche (Italy).</p>',
    bigURL: 'images/Bio_main_Gianluca_Mazzoni.png'
  }
}
