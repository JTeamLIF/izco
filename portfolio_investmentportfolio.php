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
<link href="css/jquery-jvectormap-2.0.3.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
<script src="js/mapData.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<?php $categorytitle = 'Portfolio'; ?>
<body>
<div class="im-centered">
  <!-- Navigation -->
  <div class="row">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li><a href="about_overview.php">About</a></li>
          <li class="top_menu_active"><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_shareprice.php">Investors</a></li>
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
      <div class="col-lg-9 pull-right">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage">Portfolio</span> |
        <span class="activePage">Investment Portfolio</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav">

          <li class="level-1 parent-menu-active"><a href="portfolio_investmentportfolio.php">Investment Portfolio</a></li>
          <li class="level-1 "><a href="portfolio_assetbreakdown.php">Asset Breakdown</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Investment Portfolio</h1>
        <h3>JLIF has invested its capital in the acquisition of 57 independently valued infrastructure projects sourced from
        third party vendors and John Laing, with a growing proportion of assets acquired from the broader secondary market.
        The portfolio provides geographic diversification in countries that are regarded as fiscally strong and are committed
        to PPP projects.</h3>
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
    <div class="col-md-12 contentwrapper1" style="background-color: #f7f7f7;">
      <div class="col-lg-3" style="background-color: #f7f7f7;">
      </div>
      <div class="col-lg-9" style="background-color: #f7f7f7;">
        <div id="chartdiv"></div>
        <dl class="accordion">
          <dt class="health">
            Health
            <span class="glyphicon glyphicon-triangle-bottom pull-right" aria-hidden="true" style="font-size: 1em;"></span>
          </dt>
          <dd>
            <div class="contactCard">
              <div class="pull-left">
                image
              </div>
              <div class="pull-right contactInfo">
                <h1>Asset title</h1>
                <h3>Location</h3>

                <p>AHV Access Health Vancouver Ltd, the project company, has contracted with Vancouver Coastal Health Authority
                to design, build, finance and maintain the Gordon & Leslie Diamond Healthcare Centre, part of Vancouver General
                Hospital, under a 30 year concession which runs until 2036.</p>

                <span class="blue">Percentage ownership:</span> 100%

              </div>
            </div>
          </dd>

          <dt class="justice">Justice & Emergency Services
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>
          <dd></dd>

          <dt class="transport">Transport
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>
          <dd></dd>

          <dt class="govBuilding">Government Buildings
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>
          <dd></dd>

          <dt class="Regeneration">Regeneration & Social Housing
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>
          <dd></dd>

          <dt class="streetLighting">Street Lighting
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>
          <dd></dd>

        </dl>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("inc/footer.php"); ?>
</div>

<script type="text/javascript" src="js/jquery-jvectormap-2.0.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</body>
</html>
