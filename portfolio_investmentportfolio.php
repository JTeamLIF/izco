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
        <h3>JLIF has invested its capital in the acquisition of 57 independently valued infrastructure projects sourced from third party vendors and John Laing, with a growing proportion of assets acquired from the broader secondary market. The portfolio provides geographic diversification in countries that are regarded as fiscally strong and are committed to PPP projects.</h3>
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
          <dt class="hea">
            Health
            <span class="glyphicon glyphicon-triangle-bottom pull-right" aria-hidden="true" style="font-size: 1em;"></span>
          </dt>
          <dd class="health">
          </dd>
          <dt class="edu">
            Education
            <span class="glyphicon glyphicon-triangle-bottom pull-right" aria-hidden="true" style="font-size: 1em;"></span>
          </dt>
          <dd class="education">
            <div class="assetCard">
              <div class="pull-left">
                <img class="mainImage" src="images/gallery/health/Gallery_main_Tunbridge-Wells-Hospital.png">
              </div>
              <div class="pull-right assetInfo">
                <h1 class="mainName">Barnsley BSF</h1>
                <h3 class="mainAddress">Barnsley S70 2JW</h3>
                <p class="mainDesc">Part of the Building Schools for the Future programme, the Barnsley BSF project involves an overhaul
                of the existing secondary school estate in Barnsley into 11 new schools (consisting of 9 advanced learning
                centres, one special school, and one special school extension) over three phases. Financial close on Phase
                1 was achieved on 6 July 2009, for Phase 2 on April 2010 and for Phase 3 on 9 October 2010. Construction was
                completed in 2011 for all phases.</p>
                <span class="blue">Percentage ownership:</span>
                <span class="percentageOwned">100%</span>
                <br><br>
              </div>
            </div>

            <div id="Barnsley-BSF" class="smallAsset" data-code="BB">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_on_Barnsley-BSF.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Barnsley BSF</span>
                <span class="smallAssetLocation">Barnsley S70 2JW</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Bristol-BSF" class="smallAsset" data-code="BR">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Bristol-BSF.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Bristol BSF</span>
                <span class="smallAssetLocation">Avon BS4 4NN</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Peterborough-Schools" class="smallAsset" data-code="PS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Peterborough-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Peterborough Schools</span>
                <span class="smallAssetLocation">Peterborough PE3 6AP</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Bexley-Schools" class="smallAsset" data-code="BS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Bexley-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Bexley Schools</span>
                <span class="smallAssetLocation">Kent DA6 7AT</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Leeds-Combined-Secondary-Schools" class="smallAsset" data-code="LC">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Leeds-Combined-Secondary-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Leeds Combined Secondary Schools</span>
                <span class="smallAssetLocation">Leeds LS1 9BS</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="North-Swindon-Schools" class="smallAsset" data-code="SS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_North-Swindon-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">North Swindon Schools</span>
                <span class="smallAssetLocation">Wiltshire SN25 4GY</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Newham-Schools" class="smallAsset" data-code="NS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Newham-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Newham Schools</span>
                <span class="smallAssetLocation">London E6 2RT</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Enfield-Schools" class="smallAsset" data-code="ES">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Enfield-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Enfield Schools</span>
                <span class="smallAssetLocation">London E6 2RT</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Highland-School-Enfield" class="smallAsset" data-code="HS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Highland-School-Enfield.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Highland School, Enfield</span>
                <span class="smallAssetLocation">London, N21 1QQ</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Edinburgh-Schools" class="smallAsset" data-code="EC">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Edinburgh-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Edinburgh Schools</span>
                <span class="smallAssetLocation">Edinburgh EH1 1YJ</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="South-Lanarkshire-Schools" class="smallAsset" data-code="SO">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_South-Lanarkshire-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">South Lanarkshire Schools</span>
                <span class="smallAssetLocation">South Lanarkshire ML3 0AA</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>

            <div id="Glasgow-Schools" class="smallAsset" data-code="GS">
              <div class="smallAssetLeft pull-left">
                <img class="smallAssetImage" src="images/gallery/education/Gallery_tb_off_Glasgow-Schools.png">
              </div>
              <div class="smallAssetRight pull-right">
                <span class="smallAssetTitle">Glasgow Schools</span>
                <span class="smallAssetLocation">Glasgow G2 1DU</span>
                <span class="smallAssetGlyph glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
              </div>
            </div>


          </dd>

          <dt class="jus">Justice & Emergency Services
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="justice-and-emergency-services">

          </dd>

          <dt class="tra">Transport
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="transport">

          </dd>

          <dt class="gov">Government Buildings
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="government-buildings">

          </dd>

          <dt class="reg">Regeneration & Social Housing
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="regeneration-and-social-housing">

          </dd>

          <dt class="str">Street Lighting
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="street-lighting">

          </dd>

        </dl>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("inc/footer.php"); ?>
</div>

<script type="text/javascript" src="js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="js/mapData.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</body>
</html>
