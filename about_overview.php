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
<?php $categorytitle = 'About'; ?>
<body>
<div class="im-centered">
 <?php include("inc/mobile_navigation.php"); ?>
  <!-- Navigation -->
  <div class="row hidden-xs hidden-sm hidden-md">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li class="top_menu_active"><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_sharedata.php">Investors</a></li>
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
        <span class="previousPage">
          <a href="index.php">Home</a>
        </span> |
        <span class="previousPage">
          <a href="about_overview.php">Overview</a>
        </span> |
        <span class="activePage">
          <a href="about_overview.php#whatWeDo">About</a>
        </span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 parent-menu-active"><a href="#">Overview</a>
            <ul class="nav_sub">
              <li class="level-2 parent-menu-active first"><a href="about_overview.php#whatWeDo">About</a></li>
              <li class="level-2"><a href="about_overview.php#whoWeAre">Corporate structure</a></li>
            </ul>
          </li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1"><a href="about_boardofdirectors.php">The team</a></li>
          <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
          <li class="level-1"><a href="about_riskmanagement.php">Risk management</a></li>
          <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1 whatWeDo" id="whatWeDo">
        <h1>About</h1>
        <h3>JLIF is one of Europe’s largest listed infrastructure funds, with a Premium Listing on the London Stock Exchange.</h3>
        <p>As a specialist equity stakeholder, we partner with public sector counterparties across the world to deliver key local and national infrastructure projects that provide government-backed, inflation-linked revenue streams. Our success is built on a collaborative approach centred on long term relationships with our clients and partners such that their changing infrastructure needs can be met in a timely and cost-effective manner</p>
        <h5>Our purpose </h5>
        <p>Our purpose is to actively generate long term sustainable value through quality investments in, and specialist management of, infrastructure projects that generate predictable, low risk returns. </p>
        <h5>Our objective </h5>
        <p>We target a minimum annualised yield of 6% per annum, by reference to the issue price of £1 of the Ordinary Shares issued at the IPO, and an IRR of 7-8% over the longer term via an active management approach designed to enhance the value of existing investments, supported by the acquisition of new, value enhancing investments. </p>
                <h5>Your investment</h5>
        <p>As at 30 June 2016, JLIF was valued at £1,146.8 million on the stock market and had delivered a total return to shareholders of 69.7% since launch in November 2010. The Portfolio saw underlying growth of 3.95% in the first half of 2016. JLIF holds stakes in low-risk, operational PPP infrastructure projects located in the UK, Continental Europe and North America, and looks forward to continuing to grow the Portfolio in the future, both in size and geographic footprint.</p>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="investors_sharedata.php">View share information</a></span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
        </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery">
            <a href="docs/reportsandresults/JLIF Annual Report 2015.pdf" target="_blank">View annual report</a></span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
       <div class="col-lg-3"></div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">Market capitalisation</p>
          <p class="price">£1,146.8m</p>
          <p class="time">As at 31 December 15</p>
        </div>
      </div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">Net assets</p>
          <p class="price">£1,022.2m</p>
          <p class="time">As at 31 December 15</p>
        </div>
      </div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">NAV per share</p>
          <p class="price">113.8p</p>
          <p class="time">As at 31 December 15</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 contentwrapper1" style="background-color: #f7f7f7;">
      <div class="col-lg-3 menu_left whoWeAre" style="background-color: #f7f7f7;">
      </div>
      <div class="col-lg-6 content1 whoWeAre" style="background-color: #f7f7f7;">
        <h1>Corporate structure</h1>
      <img src="images/JLIF_Struture_chart.png" alt="jlif structure" width="612" height="758" class="img-responsive"> </div>

      <div class="col-lg-3 rightcol1 whoWeAre" id="whoWeAre" style="background-color: #f7f7f7;">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="about_boardofdirectors.php">View board of directors</span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span></a>
        </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="about_advisorteam.php">View fund advisers</span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span></a>
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
