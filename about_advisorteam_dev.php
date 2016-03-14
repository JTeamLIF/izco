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
  <div class="row visible-sm visible-xs">
    <div class="col-md-12"> 
      
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index,php"></a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="level-2"><a href="about_overview.php#whatWeDo">About</a></li>
                  <li class="level-2"><a href="about_overview.php#whoWeAre">The investment adviser</a></li>
                  <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
                  <li class="level-2"><a href="about_advisorteam.php">Investor adviser team</a></li>
                  <li class="level-2"><a href="about_boardofdirectors.php">Board of directors</a></li>
                  <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
                  <li class="level-2"><a href="about_riskmanagement.php">Risk management</a></li>
                  <li class="level-2"><a href="about_riskmanagement.php#riskcommittee">Risk committee</a></li>
                  <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
                  <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="level-1"><a href="portfolio_investmentportfolio.php">Investment Portfolio</a></li>
                  <li class="level-1"><a href="portfolio_assetbreakdown.php">Asset Breakdown</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Investors<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="level-2"><a href="investors_shareprice.php">Share Price</a></li>
                  <li class="level-2"><a href="investors_sharepricehistory.php">Share Price History</a></li>
                  <li class="level-2"><a href="investors_investmentcalculator.php">Investment Calculator</a></li>
                  <li class="level-2"><a href="investors_sharealerts.php">Share Alerts</a>
                  <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
                  <li class="level-1"><a href="investors_dividends.php">Dividends</a></li>
                  <li class="level-1"><a href="investors_publications.php">Publications</a></li>
                  <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
                </ul>
              </li>
              <li><a href="media_presscoverage.php">Media</a></li>
          	  <li><a href="contact.php">Contact</a></li>
            </ul>
<div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
          </div>
          <!--/.nav-collapse --> 
        </div>
        <!--/.container-fluid --> 
      </nav>
    </div>
  </div>
  
  <!-- Navigation -->
  <div class="row hidden-sm hidden-xs">
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
        <div class="clearPageTitle"> </div>
        <div class="pageTitle"> About </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right"> <span class="previousPage"> <a href="index.php">Home</a> </span> | <span class="previousPage"> <a href="about_overview.php">About</a> </span> | <span class="activePage"> <a href="about_advisorteam.php">Investor adviser team</a> </span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left hidden-sm hidden-xs">
        <ul class="nav_left">
          <li class="level-1 first"><a href="about_overview.php">Overview</a></li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1 parent-menu-active"><a href="about_advisorteam.php">The team</a>
            <ul class="nav_sub">
              <li class="level-2 parent-menu-active first"><a href="about_advisorteam.php">Investor adviser team</a></li>
              <li class="level-2"><a href="about_boardofdirectors.php">Board of directors</a></li>
            </ul>
          </li>
          <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
          <li class="level-1"><a href="about_riskmanagement.php">Risk management</a></li>
          <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-xs-6 content1" id="inverstorAdvisorTeam">
        <h1>Investor adviser team</h1>
        <h3>JLIF benefits from experienced investment advisers who have significant knowledge and expertise in infrastructure. Utilising this extensive PPP knowledge they will seek to deliver further value from the diversified Portfolio by enhancing the value of the assets.</h3>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery">Link title</span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
        <br>
        <div href="#" class="btn-viewAssetGallery"> <span class="spn-viewAssetGallery">Link title</span> <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-md-12 inverstorAdvisorWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-9" id="inverstorAdvisorTeam"> <img id="mainImage" src="images/andrew-big.jpg">
          <div class="col-lg-3 inverstorAdvisorTitle">
            <h1 id="mainName">Andrew Charlesworth</h1>
            <h3 id="mainTitle">Investment Adviser</h3>
          </div>
          <div id="mainDesc" class="col-lg-8 inverstorAdvisorInfo">
            <p>Andrew Charlesworth is a Director of JLCM, responsible for delivering the fund’s performance targets. He has been able to draw on 19 years of experience in infrastructure development and finance to help JLIF grow from a Portfolio Value of £259.0 million at launch to a Portfolio Value of £864.9 million, overseeing JLIF’s entry into the FTSE 250 index within just 11 months of its IPO. Andrew’s broad experience of the PPP market, having acted as advisor to authorities in procuring PPP projects and to senior lenders in funding them has ensured that the investments JLIF has made have been accretive to shareholder value, delivering above forecast returns.</p>
            <p>Prior to his current role, Andrew led significant parts of the primary investment business within John Laing, initially as CEO of Regenter (a John Laing social housing PPP joint venture), then as Local Authority PPP Director and lastly as the Financial and Commercial Director for the global John Laing Investments business. Andrew holds the CFA UK’s Investment Management Certificate (Part 1).</p>
          </div>
          <div class="col-lg-9 otherContactsWrapper">
            <div id="Andrew_Charlesworth" class="teamMember">
              <div class="emptyOverlay"></div>
              <div class="teamMemberInfo">
                <h1>Andrew Charlesworth</h1>
                <h3>Investment Adviser</h3>
                <div class="dropup"> <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span> </div>
              </div>
            </div>
            <div id="Joanne_Griffin" class="teamMember">
              <div class="emptyOverlay"></div>
              <div class="teamMemberInfo">
                <h1>Joanne Griffin (née Gibbins)</h1>
                <h3>Director of Investments</h3>
                <div class="dropup"> <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span> </div>
              </div>
            </div>
            <div id="Jamie_Pritchard" class="teamMember">
              <div class="emptyOverlay"></div>
              <div class="teamMemberInfo">
                <h1>Jamie Pritchard</h1>
                <h3>Director of Asset Management</h3>
                <div class="dropup"> <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span> </div>
              </div>
            </div>
            <div id="Gianluca_Mazzoni" class="teamMember">
              <div class="emptyOverlay"></div>
              <div class="teamMemberInfo">
                <h1>Gianluca Mazzoni</h1>
                <h3>Deputy Investment Adviser</h3>
                <div class="dropup"> <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php include("inc/footer.php"); ?>
</div>

<!-- jQuery --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> 
<script src="js/teamMembers.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
