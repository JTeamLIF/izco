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
<div id="push">
</div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="activePage">Investors</span> |
        <span class="activePage">News email alerts</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">

          <li class="level-1 first"><a href="investors_sharedata.php">Share Information</a></li>
          <li class="level-1 parent-menu-active"><a href="investors_latestregulatorynews.php">Regulatory news</a>
          <ul class="nav_sub">

              <li class="level-2"><a href="investors_latestregulatorynews.php">Latest and archived news</a></li>
              <li class="level-2 parent-menu-active"><a href="investors_newsemailalerts.php">News email alerts</a>
            </ul></li>
          <li class="level-1"><a href="investors_dividends.php">Dividends</a></li>
          <li class="level-1"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>News email alerts</h1>
<iframe src="http://tools.euroland.com/Investortools/RNSSubscription/EmailAlertService.aspx?cid=60172&companycode=uk-jlif&lang=en-gb" width="100%" height="860px" ></iframe>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="investors_sharedata.php">View share information</a></span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
          </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="docs/reportsandresults/JLIF Annual Report 2015.pdf" target="_blank">View annual report</a></span>
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

<script src="js/ga.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Cookie Consent JavaScript -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</body>
</html>
