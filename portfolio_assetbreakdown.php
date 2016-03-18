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

<script type="text/javascript">
function getCookie(name) {
     var dc = document.cookie;
     var prefix = name + "=";
     var begin = dc.indexOf("; " + prefix);
     if (begin == -1) {
          begin = dc.indexOf(prefix);
          if (begin != 0) return null;
     } else
          begin += 2;
     var end = document.cookie.indexOf(";", begin);
     if (end == -1)
          end = dc.length;
     return unescape(dc.substring(begin + prefix.length, end));
}
if (getCookie("verify_jlif"))
{
    //If cookie is found, visitor has visited/viewed the home/disclaimer page. Do not redirect visitor to the home/disclaimer page; allow visitor to view page.
}
else
{
    // Cookie not found, redirect to gateway.php	
	//window.location = "http://www.jlif.com/gateway.php?loc=" + document.URL
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19101193-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<?php
$categorytitle = 'Portfolio';
?>
<body>
<div class="im-centered">
  <?php
include("inc/mobile_navigation.php");
?>
  <!-- Navigation -->
  <div class="row hidden-xs hidden-sm hidden-md">
    <div class="col-md-12">
      <?php
include("inc/logo-and-search-bar.php");
?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li><a href="about_overview.php">About</a></li>
          <li class="top_menu_active"><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_sharedata.php">Investors</a></li>
          <li><a href="media_presscoverage.php">Media</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <?php
include("inc/latest-share-price.php");
?>
    </div>
  </div>
  
  <?php
include("inc/internal_carousel.php");
?>
  <div id="push"> </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"><a href="index.php">Home</a></span> | <span class="activePage">Portfolio</span> | <span class="activePage">Asset Breakdown</span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1"><a href="portfolio_investmentportfolio.php">Investment Portfolio</a></li>
          <li class="level-1 parent-menu-active "><a href="portfolio_assetbreakdown.php">Asset Breakdown</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Asset Breakdown</h1>
        <h3>The original Seed Portfolio of 19 assets was acquired for a total of £259.0 million using a weighted average discount rate of 8.35%. Since then, JLIF has made over £685 million of additional investments in assets from both John Laing and the wider secondary market. JLIF's Portfolio as at 31 December 2015 was valued at £867.8 million using a weighted average discount rate of 7.82%. The total the number of assets in the Portfolio currently stands at 59.</h3>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery"><a href="investors_sharedata.php">View share information</a></span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
        <br>
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery"><a href="docs/reportsandresults/JLIF Annual Report 2015.pdf" target="_blank">View annual report</a></span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper2">
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        <div class="col-lg-3 chartheadblock">Value per asset</div>
        <div class="col-lg-6"></div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        <div class="barChartHolder"><img class="img-responsive" src="images/dummy_barchart.png" width="865" height="343" alt="dummy barchart"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper2">
      <div class="col-lg-3"></div>
      <div class="col-lg-3">
        <div class="chartheadblock">Value per sector</div>
        <div class="pieChartHolder"><img src="images/sector_piechart.png" width="273" height="372"></div>
      </div>
      <div class="col-lg-3">
        <div class="chartheadblock">Concession length</div>
        <div class="pieChartHolder"><img src="images/concession_piechart.png" width="273" height="372"></div>
      </div>
      <div class="col-lg-3">
        <div class="chartheadblock">Ownership analysis</div>
        <div class="pieChartHolder"><img src="images/ownership_piechart.png" width="273" height="372"></div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 content1">
        <h1>Acquisition Breakdown</h1>
        <!--        <p>Search by date, keyword or category</p>
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

        <div class="clearfix"></div>-->
        
        <div class="publicationsMain"> 
          
          <!--  <ul class="years">
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
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Select Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li role="presentation"> <a href="#education" aria-controls="education" role="tab" data-toggle="tab">Education</a> </li>
                <li role="presentation"> <a href="#justice" aria-controls="justice" role="tab" data-toggle="tab">Justice & Emergency Services</a> </li>
                <li role="presentation"> <a href="#transport" aria-controls="transport" role="tab" data-toggle="tab">Transport</a> </li>
                <li role="presentation"> <a href="#government" aria-controls="government" role="tab" data-toggle="tab">Government Buildings</a> </li>
                <li role="presentation"> <a href="#regeneration" aria-controls="regeneration" role="tab" data-toggle="tab">Regeneration & Social Housing </a> </li>
                <li role="presentation"> <a href="#lighting" aria-controls="lighting" role="tab" data-toggle="tab">Street Lighting</a> </li>
                <li role="presentation"> <a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a> </li>
              </ul>
            </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="health">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">30 Jun 2015</span> <span class="acquisition">North Birmingham Mental Health</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">20 Dec 2013</span> <span class="acquisition">North Staffordshire Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Nov 2013</span> <span class="acquisition">Kelowna and Vernon HospitalsNorth Staffordshire Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 August 2013</span> <span class="acquisition">Northampton Mental Health</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Realise Health (LIFT) Colchester</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Apr 2013</span> <span class="acquisition">Peterborough Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">12 Oct 2012</span> <span class="acquisition">Tunbridge Wells Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">17 May 2012</span> <span class="acquisition">Newcastle Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">25 Apr 2012</span> <span class="acquisition">Roseberry Park Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">26 Sep 2011</span> <span class="acquisition">Forth Valley Royal Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">13 Apr 2011</span> <span class="acquisition">Queen Elizabeth Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Vancouver General Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Newham Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Kingston Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Abbotsford Hospital</span> <span class="category">Health</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="education">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">15 Oct 2013</span> <span class="acquisition">Barnsley BSF</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Leeds Combined Secondary Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Bexley Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Bristol BSF</span> <span class="category">Education</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Peterborough Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">16 Dec 2011</span> <span class="acquisition">North Swindon Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">9 Dec 2011</span> <span class="acquisition">Enfield Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">9 Dec 2011</span> <span class="acquisition">Newham Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Nov 2011</span> <span class="acquisition">Edinburgh Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Nov 2011</span> <span class="acquisition">Highland School, Enfield</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">South Lanarkshire Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Glasgow Schools</span> <span class="category">Education</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="justice">
              <table class="table-striped publicationsTable">
                              <tr>
                  <td><span class="date">29 Feb 2016</span> <span class="acquisition">British Transport Police PPP</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">01 Oct 2014</span> <span class="acquisition">South East London Police Stations</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Nov 2011</span> <span class="acquisition">North East Fire and Rescue</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 May 2011</span> <span class="acquisition">Cleveland Police Station and HQ</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Metropolitan Police Training Centre</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Greater Manchester Police Stations</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Avon and Somerset Courts</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="transport">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">28 Jan 2016</span> <span class="acquisition">Line 9 - Section II, Barcelona Metro</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">8 Nov 2011</span> <span class="acquisition">M6/M74 Project</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">8 Nov 2011</span> <span class="acquisition">LUL Connect</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 2010</span> <span class="acquisition">E18 Road</span> <span class="category">Transport</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Sirhowy Way</span> <span class="category">Transport</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">M40 Motorway</span> <span class="category">Transport</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="government">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">26 Sep 2014</span> <span class="acquisition">Groningen Tax Office</span> <span class="category">Government Buildings</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Oct 2012</span> <span class="acquisition">Kromhout Barracks</span> <span class="category">Government Buildings</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Ministry of Defence Main Building</span> <span class="category">Government Buildings</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="regeneration">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">19 Dec 2014</span> <span class="acquisition">Kirklees Social Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Miles Platting Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Camden Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Islington I Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Islington II Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">13 Apr 2011</span> <span class="acquisition">Bentilee Hub Community Centre</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 2010</span> <span class="acquisition">Canning Town Social Housing PFI</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 20101</span> <span class="acquisition">Brockley Social Housing PFI</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="lighting">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">19 Dec 2014</span> <span class="acquisition">Surrey Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Enfield Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Barnet Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Lambeth Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Redcar & Cleveland Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Walsall Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Wakefield Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Manchester Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Walsall Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
              </table>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="all">
              <table class="table-striped publicationsTable">
                <tr>
                  <td><span class="date">30 Jun 2015</span> <span class="acquisition">North Birmingham Mental Health</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">20 Dec 2013</span> <span class="acquisition">North Staffordshire Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">28 Nov 2013</span> <span class="acquisition">Kelowna and Vernon HospitalsNorth Staffordshire Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 August 2013</span> <span class="acquisition">Northampton Mental Health</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Realise Health (LIFT) Colchester</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Apr 2013</span> <span class="acquisition">Peterborough Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">12 Oct 2012</span> <span class="acquisition">Tunbridge Wells Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">17 May 2012</span> <span class="acquisition">Newcastle Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">25 Apr 2012</span> <span class="acquisition">Roseberry Park Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">26 Sep 2011</span> <span class="acquisition">Forth Valley Royal Hospital</span> <span class="category">Health</span></td>
                </tr>
                  
                
                
                  <td><span class="date">13 Apr 2011</span> <span class="acquisition">Queen Elizabeth Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Vancouver General Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Newham Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Kingston Hospital</span> <span class="category">Health</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Abbotsford Hospital</span> <span class="category">Health</span></td>
                </tr>              
                <tr>
                  <td><span class="date">15 Oct 2013</span> <span class="acquisition">Barnsley BSF</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Leeds Combined Secondary Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Bexley Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Bristol BSF</span> <span class="category">Education</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Peterborough Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">16 Dec 2011</span> <span class="acquisition">North Swindon Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">9 Dec 2011</span> <span class="acquisition">Enfield Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">9 Dec 2011</span> <span class="acquisition">Newham Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Nov 2011</span> <span class="acquisition">Edinburgh Schools</span> <span class="category">Education</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Nov 2011</span> <span class="acquisition">Highland School, Enfield</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">South Lanarkshire Schools</span> <span class="category">Education</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Glasgow Schools</span> <span class="category">Education</span></td>
                </tr> 
                <tr>
                  <td><span class="date">29 Feb 2016</span> <span class="acquisition">British Transport Police PPP</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>                             
                <tr>
                  <td><span class="date">01 Oct 2014</span> <span class="acquisition">South East London Police Stations</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Nov 2011</span> <span class="acquisition">North East Fire and Rescue</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 May 2011</span> <span class="acquisition">Cleveland Police Station and HQ</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Metropolitan Police Training Centre</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Greater Manchester Police Stations</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Avon and Somerset Courts</span> <span class="category">Justice & Emergency Services</span></td>
                </tr>              
                <tr>
                  <td><span class="date">28 Jan 2016</span> <span class="acquisition">Line 9 - Section II, Barcelona Metro</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">8 Nov 2011</span> <span class="acquisition">M6/M74 Project</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">8 Nov 2011</span> <span class="acquisition">LUL Connect</span> <span class="category">Transport</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 2010</span> <span class="acquisition">E18 Road</span> <span class="category">Transport</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Sirhowy Way</span> <span class="category">Transport</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">M40 Motorway</span> <span class="category">Transport</span></td>
                </tr>              
                              <tr>
                  <td><span class="date">26 Sep 2014</span> <span class="acquisition">Groningen Tax Office</span> <span class="category">Government Buildings</span></td>
                </tr>
                  
                
                
                  <td><span class="date">11 Oct 2012</span> <span class="acquisition">Kromhout Barracks</span> <span class="category">Government Buildings</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Ministry of Defence Main Building</span> <span class="category">Government Buildings</span></td>
                </tr>
                <tr>
                  <td><span class="date">19 Dec 2014</span> <span class="acquisition">Kirklees Social Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Miles Platting Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Camden Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Islington I Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">19 Jan 2012</span> <span class="acquisition">Islington II Housing</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">13 Apr 2011</span> <span class="acquisition">Bentilee Hub Community Centre</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 2010</span> <span class="acquisition">Canning Town Social Housing PFI</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>
                  
                
                
                  <td><span class="date">21 Dec 20101</span> <span class="acquisition">Brockley Social Housing PFI</span> <span class="category">Regeneration & Social Housing</span></td>
                </tr>              
                <tr>
                  <td><span class="date">19 Dec 2014</span> <span class="acquisition">Surrey Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Enfield Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Barnet Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Lambeth Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                  
                
                
                  <td><span class="date">23 Aug 2013</span> <span class="acquisition">Redcar & Cleveland Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Walsall Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Wakefield Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Manchester Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
                <tr>
                  <td><span class="date">30 Nov 2010</span> <span class="acquisition">Walsall Street Lighting</span> <span class="category">Street Lighting</span></td>
                </tr>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php
include("inc/footer.php");
?>
</div>

<!-- jQuery --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> 
<script src="js/app.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
