<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>JLIF</title>

<!-- Bootstrap Core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/full-width-pics.css" rel="stylesheet">
<link href="css/styles_menu_left.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<?php $categorytitle = 'Media'; ?>
<body>
<div class="im-centered">
 <?php include("inc/mobile_navigation.php"); ?>
  <!-- Navigation -->
  <div class="row hidden-xs">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_shareprice.php">Investors</a></li>
          <li class="top_menu_active"><a href="media_presscoverage.php">Media</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    <?php include("inc/latest-share-price.php"); ?>

    </div>
  </div>
  </section>
 <?php include("inc/internal_carousel.php"); ?>
<div id="push">
</div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage">Media</span> |
        <span class="activePage">Press Coverage</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs">
          <li class="level-1 first parent-menu-active"><a href="media_presscoverage.php">Press Coverage</a></li>
          <!--<li class="level-1"><a href="media_videocoverage.php">Video Coverage</a></li>-->
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Press Coverage</h1>
        <p>Search by date, keyword or category</p>
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="Keyword" aria-describedby="basic-addon1">
        </div>
        <div class="dropdown inline" style="margin-left: 37px;">
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="From" aria-describedby="basic-addon1">
        </div>
        <img src="images/calendar-icon.jpg" class="inline calendarIconPadding">
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="To" aria-describedby="basic-addon1">
        </div>
        <img src="images/calendar-icon.jpg" class="inline calendarIconPadding">
        <button type="button" class="btn btn-default navbar-btn inline search">Search</button>

        <div class="clearfix"></div>

        <div class="publicationsMain">

        <ul class="years">
          <li><span>2016</span></li>
          <li>2015</li>
          <li>2014</li>
          <li>2013</li>
          <li>2012</li>
        </ul>
        <h2 class="selectedYear">2016</h2>
        <p><b>Total:</b> 7 results</p>

       <!-- Nav tabs -->
        <ul class="nav nav-tabs publicationsTab" role="tablist">
          <li role="presentation" class="active">
            <a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="all">
            <table class="table-striped publicationsTable">
              <tr>
                <td>
                  <span class="date">01 Feb 2016</span>
                  <span class="text"><a href="/newsarticles/Midas_Share_Tip_Update_010216_for_website.pdf" target="_blank">Midas Share Tips Update</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">12 May 2015</span>
                  <span class="text"><a href="/newsarticles/JLIF,_The_Telegraph_pdf..pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">12 Nov 2013</span>
                  <span class="text"><a href="/newsarticles/City_AM_JLIF_on_top_article_121113_for_website.pdf" target="_blank">JLIF on top</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">24 Jul 2013</span>
                  <span class="text"><a href="/newsarticles/IJ_article_240713.pdf" target="_blank">Infrastructure Journal Article</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Apr 2013</span>
                  <span class="text"><a href="/newsarticles/Shares_Magazine_article_Funds_-_John_Laing_PDF_April_2013.pdf" target="_blank">Shares Magazine Article</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">12 Nov 2012</span>
                  <span class="text"><a href="/news/StockMarketWire_121112.pdf" target="_blank">JLIF continues strong performance</a></span>
                </td>
              </tr>

               <tr>
                <td>
                  <span class="date">03 Oct 2012</span>
                  <span class="text"><a href="/newsarticles/Questor_share_tip_031012.pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">29 Aug 2012</span>
                  <span class="text"><a href="/newsarticles/questor-share-tip-jlif_290812.pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">09 May 2012</span>
                  <span class="text"><a href="/newsarticles/Questor_share_tip_090512.pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">15 Mar 2012</span>
                  <span class="text"><a href="/newsarticles/Investors_Chronicle_Press_Report_150312.pdf.pdf" target="_blank">Investors Chronicle Market Overview - JLIF</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">15 Mar 2012</span>
                  <span class="text"><a href="/newsarticles/Dow_Jones_Press_Report_150312.docx" target="_blank">Dow Jones: JLIF Posts Jump in FY Profit</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">15 Mar 2012</span>
                  <span class="text"><a href="/newsarticles/Press_Release_AOL_150312.pdf" target="_blank">AOL: Pick of the early market news - JLIF</a></span>
                </td>
              </tr>


              <tr>
                <td>
                  <span class="date">20 Jan 2012</span>
                  <span class="text"><a href="/newsarticles/Questor_Share_tip_Buy_JLIF_200112.pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">08 Dec 2011</span>
                  <span class="text"><a href="/newsarticles/John_Laing_Infrastructure_Fund_Limited_To_Enter_FTSE_250.pdf" target="_blank">John Laing Infrastructure Fund to Enter FTSE 250</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">28 Oct 2011</span>
                  <span class="text"><a href="/newsarticles/Euro_Week_JLIF_Article_-281011.pdf" target="_blank">Euro Week: Safety first as JLIF scores £131m success</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">12 Oct 2011</span>
                  <span class="text"><a href="/newsarticles/Questor_share_tip__DailyTelegrah_121011.pdf" target="_blank">Questor Share Tip - Daily Telegraph</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">09 Oct 2011</span>
                  <span class="text"><a href="/newsarticles/MIDAS_UPDATE.pdf" target="_blank">MIDAS Update - New JLIF Shares Offer</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">31 Aug 2011</span>
                  <span class="text"><a href="/news/The_Times-_31_August_2011-_Riots_Boost_John_Laing_and_CNBC_Interview.pdf" target="_blank">Riots Boost John Laing</a></span>
                </td>
              </tr>

               <tr>
                <td>
                  <span class="date">21 Aug 2011</span>
                  <span class="text"><a href="/newsarticles/The_Sunday_Times-_21_August_2011-_Best_Way_to_Beat_Inflation-_Without_Too_Much_Risk.pdf" target="_blank">Best Way to Beat Inflation Without Too Much Risk</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">08 Jul 2011</span>
                  <span class="text"><a href="/newsarticles/Investors_Chronicle-_8th_July_2011-_Tap_into_Global_Infrastructure.pdf" target="_blank">Tap into Global Infrastructure</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">23 May 2011</span>
                  <span class="text"><a href="/newsarticles/Infra_News-_23_May_2011-_John_Laing_Infra_Fund_Opportunities.htm" target="_blank">John Laing Infra Fund Opportunities</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">01 May 2011</span>
                  <span class="text"><a href="/newsarticles/Project_Finance-_1_May_2011-_Adjusted_Finance.pdf" target="_blank">Adjusted Finance</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">11 Apr 2011</span>
                  <span class="text"><a href="/newsarticles/Investment_Advisor-_11_April_2011-_Laind_fund_invests_in_PPP_and_PFI.pdf" target="_blank">Laing fund invests in PPP and PFI</a></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">08 Apr 2011</span>
                  <span class="text"><a href="/newsarticles/Investors_Chronicle-_8_April_2011-_John_Laing_pays_out.pdf" target="_blank">John Laing Pays Out</a></span>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </div>

      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery">Link title</span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
          </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery">Link title</span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
          </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("inc/footer.php"); ?>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="js/app.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
