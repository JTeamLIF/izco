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

<body>
<div class="im-centered">
  <!-- Navigation -->
  <div class="row">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li class="top_menu_active"><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_shareprice.php">Investors</a></li>
          <li><a href="media_presscoverage.php">Media</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    <?php include("inc/latest-share-price.php"); ?>

    </div>
  </div>
  </section>
  <div class="row">
    <div class="col-md-12">
      <div class="bannerimage">
        <div class="clearPageTitle">
        </div>
        <div class="pageTitle">
          About
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage"><a href="about_overview.php">About</a></span> |
        <span class="activePage">Risk management</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav">
          <li class="level-1 first"><a href="about_overview.php">Overview</a></li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1"><a href="about_advisorteam.php">The team</a></li>
          <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
          <li class="level-1 parent-menu-active"><a href="about_riskmanagement.php">Risk management</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Risk management</h1>
        <h3>Risk is the potential for events and consequences to occur that can create either threats to success or opportunities for benefit.
        JLIF has a comprehensive risk management framework to identify risks in advance to create opportunities or prepare for mitigation.</h3>
        <h5>JLIF aims to invest in assets which are predominantly:</h5>
        <ul>
          <li>
            <span>in their operational phase, having completed construction</span>
          </li>
          <li>
            <span>public sector or government-backed with regard to revenue</span>
          </li>
          <li>
            <span>“availability based” (where the payments from the concession do not generally depend on the level of use of the project asset)</span>
          </li>
          <li>
            <span>within the UK and in countries which are regarded as fiscally strong</span>
          </li>
        </ul>
        <p>We believe that attractive opportunities are likely to arise for JLIF to enhance returns for Shareholders in areas of the world where PPP is
        a practiced route for delivering infrastructure investment. JLIF may therefore make investments in the European Union, other European countries,
        Canada, the United States of America and in the Asia Pacific region.</p>
        <p>When any acquisition is made we will ensure that any one asset does not have a value greater
        than 25% of the total assets of JLIF immediately post-acquisition.</p>
        <p>We intend to make prudent use of short-term leverage, primarily to finance the acquisition of investments after the acquisition of the seed
        portfolio. This leverage will be limited to 25% of the total assets of JLIF and is intended to be used as a bridging facility for smaller
        portfolio acquisitions, replenished at the time of further significant capital raising.</p>
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
