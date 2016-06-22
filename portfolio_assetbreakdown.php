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
          <li class="level-1 parent-menu-active"><a href="portfolio_assetbreakdown.php">Asset Breakdown</a></li>
          <li class="level-1"><a href="portfolio_acquisitionbreakdown.php">Acquisition Breakdown</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Asset Breakdown</h1>
        <h3>The original Seed Portfolio of 19 assets was acquired for a total of £259.0 million using a weighted average discount rate of 8.35%. Since then, JLIF has made over £700 million of additional investments in assets from both John Laing and the wider secondary market. JLIF's Portfolio as at 31 December 2015 was valued at £867.8 million using a weighted average discount rate of 7.82%. The total number of assets in the Portfolio as at 31 December 2015 was 57.</h3>
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
        <div class="col-lg-3 chartheadblock2">Value per asset</div>
        <div class="col-lg-6"></div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        <div class="barChartHolder"><img class="img-responsive" src="images/value_per_asset.png" width="865" height="398" alt="dummy barchart"></div>
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
    <div class="col-md-12 contentwrapper2">
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        <div class="col-lg-3 chartheadblock2">Portfolio Cash Flow Forecast, 2016-2045</div>
        <div class="col-lg-6"></div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        <div class="barChartHolder"><img class="img-responsive" src="images/portfolio_cash_flow_forecast_2015_2045.png" width="865" height="360" alt="dummy barchart"></div>
      </div>
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

<script src="js/ga.js"></script>
<!-- Bootstrap Core JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Cookie Consent JavaScript -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</body>
</html>
