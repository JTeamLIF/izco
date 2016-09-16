<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>John Laing Infrastructure Fund</title>

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

<script type="text/javascript">
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return unescape(dc.substring(begin + prefix.length, end));
} 

    var myCookie = getCookie("verify_jlif");

    if (myCookie == null) {
        window.location = "http://jlif.com/gateway.php?loc=" + document.URL;
    }

</script>
</head>
<?php $categorytitle = 'Investors'; ?>
<body>
<div class="im-centered">
  <?php include("inc/mobile_navigation.php"); ?>
  <!-- Navigation -->
  <div class="row hidden-xs hidden-sm hidden-md">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li class="top_menu_active"><a href="investors_sharedata.php">Investors</a></li>
          <li><a href="media_presscoverage.php">Media</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <?php include("inc/latest-share-price.php"); ?>
    </div>
  </div>
  </section>
  <?php include("inc/internal_carousel.php"); ?>
  <div id="push"> </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"><a href="index.php">Home</a></span> | <span class="previousPage">Investors</span> | <span class="activePage">Publications</span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 first"><a href="investors_sharedata.php">Share Information</a></li>
          <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
          <li class="level-1"><a href="investors_othernews.php">Other news</a></li>
          <li class="level-1"><a href="investors_dividends.php">Dividends</a></li>
          <li class="level-1 parent-menu-active"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Publications</h1>
        <!--<p>Search by date, keyword or category</p>
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="Keyword" aria-describedby="basic-addon1">
        </div>
        <div class="dropdown inline" style="margin-left: 37px;">
          <button class="btn btn-default dropdown-toggle categoryDropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="title">Category</span>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>--> 
        <!--<div class="clearfix"></div>
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

        <div class="clearfix"></div>-->
        
        <div class="publicationsMain"> 
          
          <!--<ul class="years">
          <li><span>2016</span></li>
          <li>2015</li>
          <li>2014</li>
          <li>2013</li>
          <li>2012</li>
        </ul>
        <h2 class="selectedYear">2016</h2>
        <p><b>Total:</b> 7 results</p>--> 
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs publicationsTab" role="tablist">
            <li role="presentation" class="active"> <a href="#factsheet" aria-controls="factsheet" role="tab" data-toggle="tab">Factsheets</a> </li>
            <li role="presentation"> <a href="#presentations" aria-controls="presentations" role="tab" data-toggle="tab">Presentations</a> </li>
            <li role="presentation"> <a href="#prospectus" aria-controls="prospectus" role="tab" data-toggle="tab">Prospectus</a> </li>
            <li role="presentation"> <a href="#reportResult" aria-controls="reportResult" role="tab" data-toggle="tab">Reports & Results</a> </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="factsheet">
              <table class="table-striped publicationsTable">
                              <tr>
                  <td><span class="date">12 Sep 2016</span> <span class="text"><a href="docs/factsheets/Fact Sheet June 2016.pdf" target="_blank">JLIF Factsheet June 2016</a></span></td>
                </tr>
                <tr>
                <tr>
                  <td><span class="date">17 May 2016</span> <span class="text"><a href="docs/factsheets/Fact Sheet Mar16_prf1.pdf" target="_blank">JLIF Factsheet March 2016</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">18 Mar 2016</span> <span class="text"><a href="docs/factsheets/JLIF Factsheet Dec15.pdf" target="_blank">JLIF Factsheet December 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">9 Nov 2015</span> <span class="text"><a href="docs/factsheets/JLIF_Fact_Sheet_September_15[1].pdf" target="_blank">JLIF Factsheet September 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">9 Aug 2015</span> <span class="text"><a href="docs/factsheets/Fact_Sheet_June15[1].pdf" target="_blank">JLIF Factsheet June 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">11 May 2015</span> <span class="text"><a href="docs/factsheets/Fact_Sheet_Mar15[1].pdf" target="_parent">JLIF Factsheet March 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 Mar 2015</span> <span class="text"><a href="docs/factsheets/JLIF_Factsheet_December_2014[1].pdf" target="_blank">JLIF Factsheet December 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">10 Nov 2014</span> <span class="text"><a href="docs/factsheets/Fact_Sheet_Sept14_prf4[1].pdf" target="_blank">JLIF Factsheet September 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2014</span> <span class="text"><a href="docs/factsheets/Fact_Sheet_June14[1].pdf" target="_blank">JLIF Factsheet June 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">2 May 2014</span> <span class="text"><a href="docs/factsheets/March_2014_Fact_sheet[1].pdf" target="_blank">JLIF Factsheet March 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">11 Nov 2013</span> <span class="text"><a href="docs/factsheets/JLIF_Factsheet_Dec_2013[1].pdf" target="_blank">JLIF Factsheet December 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Sep 2013</span> <span class="text"><a href="docs/factsheets/JLIF Fact Sheet Sep 2013.pdf" target="_blank">JLIF Factsheet September 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2013</span> <span class="text"><a href="docs/factsheets/JLIF_Fact_Sheet_Jun_13[1].pdf" target="_blank">JLIF Factsheet June 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">10 May 2013</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_2013_05c[1].pdf" target="_blank">JLIF Factsheet March 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">19 Mar 2013</span> <span class="text"><a href="docs/factsheets/JLIF_Factsheet_Dec_2012[1].pdf" target="_self">JLIF Factsheet December 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">9 Nov 2012</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_September_2012[1].pdf" target="_blank">JLIF Factsheet September 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">6 Sep 2012</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_v7c[1].pdf" target="_blank">JLIF Factsheet June 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">8 May 2012</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_March2012v10_(2)_Final[1].pdf" target="_blank">JLIF Factsheet March 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">15 Mar 2012</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_March2012v10_(2)_Final[1].pdf" target="_blank">JLIF Factsheet December 2011</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">25 Nov 2011</span> <span class="text"><a href="docs/factsheets/JLIF_factsheet_v5[1].pdf" target="_blank">JLIF Factsheet September 2011</a></span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="presentations">
              <table class="table-striped publicationsTable">
                              <tr>
                  <td><span class="date">16 Sep 2016</span> <span class="text"><a href="docs/presentations/2016 Interim Results Presentation.pdf" target="new">Presentation (Interim Results) 2016</a></span></td>
                </tr>                                <tr>
                  <td><span class="date">28 August 2015</span> <span class="text"><a href="docs/presentations/2015 Interim Results Presentation.pdf" target="new">Presentation (Interim Results) 2015</a></span></td>
                </tr>
                
                <tr>
                  <td><span class="date">24 Mar 2015</span> <span class="text"><a href="docs/presentations/2014_Annual_Results_Presentation[1].pdf" target="new">Presentation (Results) to Analysts - March 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2014</span> <span class="text"><a href="docs/presentations/2014_Interim_Results_Presentation_Revised_Nav_090914[1].pdf" target="_blank">Presentation (Interim Results) 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 Mar 2014</span> <span class="text"><a href="docs/presentations/2013_Annual_Results_Presentation_-_final_v4[1].pdf" target="_blank">Presentation (Results) to Analysts - March 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">18 Mar 2013</span> <span class="text"><a href="docs/presentations/2013_03_Investor_presentation_-_copy_for_website_2803[1].pdf" target="_parent">Presentation to Analysts/Investors - March 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Ang 2012</span> <span class="text"><a href="docs/presentations/2012_08_v13_Investor_presentation_-_H1_interims_2012[1].pdf" target="_blank">Presentation to Analysts/Investors - August 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">19 Mar 2012</span> <span class="text"><a href="docs/presentations/Ref_0152012_Investor_Presentation_150312[1].pdf" target="_blank">Presentation to Investors - March 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">15 Mar 2012</span> <span class="text"><a href="docs/presentations/Ref_0142012_JLIF_Analyst_Presentation_March_2012[1].pdf" target="_blank">Presentation to Analysts - March 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">1 Oct 2011</span> <span class="text"><a href="docs/presentations/Investor_Presentation_-_October_2011_(Final)_(031011)[1].pdf" target="_parent">Presentation to Analysts/Investors - August 2011</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Aug 2011</span> <span class="text"><a href="docs/presentations/Presentation_to_Analysts_August_2011_2[1].pdf" target="_blank">Presentation to Analysts/Investors - August 2011</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">4 April 2011</span> <span class="text"><a href="docs/presentations/JLIF_Investor_Presentation_04.04.11[1].pdf" target="_blank">Presentation to Analysts/Investors April 2011</a></span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="prospectus">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">06 Sep 2013</span> <span class="text"><a href="docs/prospectus/JLIF_September_2013_Prospectus[1].pdf" target="_blank">JLIF Prospectus September 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">07 Sep 2012</span> <span class="text"><a href="docs/prospectus/JLIF_Prospectus_September_2012[1].pdf" target="_blank">JLIF Prospectus September 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Sep 2011</span> <span class="text"><a href="docs/prospectus/222924_John_Laing_Prospectus_web[1].pdf" target="_blank">JLIF Prospectus September 2011</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">29 Oct 2010</span> <span class="text"><a href="docs/prospectus/JLIF_Prospectus_October_2010[1].pdf" target="_blank">JLIF IPO Prospectus</a></span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="reportResult">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">12 September 2016</span> <span class="text"><a href="docs/reportsandresults/JLIF_IR16.pdf" target="_blank">JLIF Interim Report 2016</a></span></td>
                                  </tr>
                <tr>
                  <td><span class="date">17 May 2016</span> <span class="text"><a href="docs/reportsandresults/JLIF Trading Update Statement May 2016.pdf" target="_blank">JLIF Trading Update Statement May 2016</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">16 Mar 2016</span> <span class="text"><a href="docs/reportsandresults/JLIF Annual Report 2015.pdf" target="_blank">JLIF Annual Report 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">16 Mar 2016</span> <span class="text"><a href="docs/reportsandresults/JLIF - Preliminary Results for the Year ended 31 Dec 2015.pdf" target="_blank">JLIF - Preliminary Results 31 Dec 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">9 Nov 2015</span> <span class="text"><a href="docs/reportsandresults/JLIF_Quarterly_Update_Statement_Nov_2015[1].pdf" target="_blank">JLIF Quarterly Update Statement November 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Aug 2015</span> <span class="text"><a href="docs/reportsandresults/JLIF_Interim_Report_August_2015[1].pdf" target="_blank">Interim Accounts 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">11 May 2015</span> <span class="text"><a href="docs/reportsandresults/JLIF_Quarterly_Update_Statement_May_2015_v1[1].pdf" target="_blank">JLIF Quarterly Update Statement May 2015</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 March 2015</span> <span class="text"><a href="docs/reportsandresults/JLIF_Annual_Report_2014[1].pdf" target="_blank">Annual Accounts 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 Mar 2015</span> <span class="text"><a href="docs/reportsandresults/Combined_2014_RNS_and_Full_year_results_announcement_FINAL_revised[1].pdf" target="_blank">JLIF - Preliminary Results for the Year ended 31 Dec 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2014</span> <span class="text"><a href="docs/reportsandresults/JLIF_IR14[1].pdf" target="_blank">Interim Accounts 2014</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 Mar 2014</span> <span class="text"><a href="docs/reportsandresults/JLIF_Annual_Report_2013[1].pdf" target="new">Annual Accounts 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">24 Mar 2014</span> <span class="text"><a href="docs/reportsandresults/JLIF_-_Full_Year_Results[1].pdf" target="_blank">JLIF - Preliminary Results for the Year ended 31 Dec 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2013</span> <span class="text"><a href="docs/reportsandresults/JLIF_Interim_Accounts_2013[1].pdf" target="_blank">Interim Accounts 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">27 Aug 2013</span> <span class="text"><a href="docs/reportsandresults/JLIF_Interim_2013_RNS[1].pdf" target="_blank">Interim Results 2013</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">18 Mar 2013</span> <span class="text"><a href="docs/reportsandresults/JLIF_ANNUAL_RESULTS_2012_PRESS_RELEASE[1].pdf" target="_blank">JLIF - Final Results for the Year ended 31 Dec 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">18 Mar 2013</span> <span class="text"><a href="docs/reportsandresults/JLIF_AR_2012_Final[1].pdf" target="_blank">Annual Accounts 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Aug 2012</span> <span class="text"><a href="docs/reportsandresults/JLIF_Interim_Report_2012-final[1].pdf" target="_blank">Interim Accounts 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Aug 2012</span> <span class="text"><a href="docs/reportsandresults/JLIF_Interim_Report_RNS_version_-_FINAL_280812_for_website[1].pdf" target="new">Interim Results 2012</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">10 Apr 2012</span> <span class="text"><a href="docs/reportsandresults/JLIF_AR2011[1].pdf" target="_blank">Annual Accounts 2011</a></span></td>
                </tr>
                <tr>
                  <td><span class="date">15 Mar 2012</span> <span class="text"><a href="docs/reportsandresults/JLIF_Final_Results_2011_Press_Release[1].pdf" target="_blank">JLIF - Final Results for the Year ended 31 December 2011</a></span></td>
                </tr>
                
                  <td><span class="date">27 Aug 2011</span> <span class="text"><a href="docs/reportsandresults/JLIF Interim Report 2011.pdf" target="_blank">Interim Report 2011</a></span></td>
                </tr>
                
                  <td><span class="date">10 Apr 2010</span> <span class="text"><a href="docs/reportsandresults/JLIF Annual Report 2010.pdf" target="_blank">Annual Report 2010</a></span></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery"><a href="investors_sharedata.php">View share information</a></span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
        <br>
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery"><a href="docs/reportsandresults/JLIF Annual Report 2015.pdf" target="_blank">View annual report</a></span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php include("inc/footer.php"); ?>
</div>

<!-- jQuery --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> 
<script src="js/app.js"></script> 
<script src="js/ga.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<!-- Cookie Consent JavaScript --> 
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</body>
</html>
