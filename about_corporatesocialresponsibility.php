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
  <div id="push"> </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"><a href="index.php">Home</a></span> | <span class="previousPage"><a href="about_overview.php">About</a></span> | <span class="activePage">Corporate social responsibility</span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 first"><a href="about_overview.php">Overview</a></li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1"><a href="about_advisorteam.php">The team</a></li>
          <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
          <li class="level-1"><a href="about_riskmanagement.php">Risk management</a></li>
          <li class="level-1 parent-menu-active"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Corporate Social Responsibility & Greenhouse Gas Emissions</h1>
        <h3>The JLIF Board and its Investment Adviser, John Laing Capital Management Limited (“JLCM”), are committed to socially-responsible investing and understand the need to carry out our activities in a responsible and sustainable manner.</h3>
        <h5>Community Engagement </h5>
        <p>JLIF recognises the environmental, social and economic needs of the communities in which it works and looks for suitable opportunities to engage and support communities, by using the skills, time and financial support of its staff and those of the Investment Adviser. The commitment to corporate social responsibility (“CSR”) is delivered through programmes directly supported by JLIF and through the activities of JLCM and JLIF’s other partners that manage the projects and provide facilities management services to the Portfolio assets. JLIF actively encourages its partners to engage with the local communities in which our projects are located. It is the engagement of these teams that operate our assets on a daily basis and support the communities in which they operate that makes the greatest difference.</p>
        <h5>Greenhouse Gas Emissions Statement</h5>
        <p>JLIF is an investment company and as such holds equity interests in its underlying investments. The approach that it has used to consolidate its greenhouse gas (“GHG”) emissions reflects this structure and aggregates JLIF’s equity share of emissions from each asset. In collating its data JLIF has considered the GHG emissions from the facilities that is manages for the public sector. However, JLIF does not have direct control over the energy usage of the facilities it manages as these are controlled by their public sector end-users. As such JLIF has limited ability to directly influence or reduce the energy consumption of the facilities.</p>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="investors_shareprice.php">View share information</a></span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
          </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery"><a href="docs/presentations/2014_Annual_Results_Presentation[1].pdf" target="_blank">View annual report</a></span>
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
