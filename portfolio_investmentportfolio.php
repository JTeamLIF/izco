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
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;"></span>
          </dt>
          <dd class="health">
           <div class="assetCard">
              <div class="pull-left">
                <img class="mainImage" src="images/gallery/health/Gallery_tb_on_North-Birmingham-Mental-Health.png">
              </div>
              <div class="pull-right assetInfo">
                <h1 class="mainName">North Birmingham Mental Health</h1>
                <h3 class="mainAddress">United Kingdom</h3>
                <p class="mainDesc">The project involves the design, build, finance and operation for new build
                premises and refurbishment of all the existing estate on the All Saints Hospital and Highcroft Hospital
                sites in north Birmingham. The project premises comprise seven specialist mental health facilities catering
                for the provision of low and medium secure mental health care services.</p>
                <span class="blue">Percentage ownership:</span>
                <span class="percentageOwned">100%</span>
                <br><br>
              </div>
            </div>
          </dd>
          <dt class="edu">
            Education
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;"></span>
          </dt>
          <dd class="education">
            <div class="assetCard">
              <div class="pull-left">
                <img class="mainImage" src="images/gallery/health/Gallery_main_Tunbridge-Wells-Hospital.png">
              </div>
              <div class="pull-right assetInfo">
                <h1 class="mainName">Barnsley BSF</h1>
                <h3 class="mainAddress">United Kingdom</h3>
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
          </dd>

          <dt class="jus">Justice & Emergency Services
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="justice-and-emergency-services">
            <div class="assetCard">
              <div class="pull-left">
                <img class="mainImage" src="images/gallery/justice-and-emergency-services/Gallery_main_South-East-London-Police-Stations.png">
              </div>
              <div class="pull-right assetInfo">
                <h1 class="mainName">South East London Police Stations</h1>
                <h3 class="mainAddress">United Kingdom</h3>
                <p class="mainDesc">Access Health Abbotsford Ltd ("AHA"), the project company, has contracted
                with Abbotsford Regional Hospital and Cancer Care Inc. to design, build, finance, maintain and
                operate a 300 bed facility in the primary acute care hospital to serve the Abbotsford area under
                a 33 year concession which runs until 2038.</p>
                <span class="blue">Percentage ownership:</span>
                <span class="percentageOwned">50%</span>
                <br><br>
              </div>
            </div>
          </dd>

          <dt class="tra">Transport
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="transport">
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
          </dd>

          <dt class="gov">Government Buildings
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="government-buildings">
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
          </dd>

          <dt class="reg">Regeneration & Social Housing
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="regeneration-and-social-housing">
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
          </dd>

          <dt class="str">Street Lighting
            <span class="glyphicon glyphicon-triangle-right pull-right" aria-hidden="true" style="font-size: 1em;">
          </dt>

          <dd class="street-lighting">
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
