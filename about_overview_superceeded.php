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
          <a href="about_overview.php">About</a>
        </span> |
        <span class="activePage">
          <a href="about_overview.php#whatWeDo">What we do</a>
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
              <li class="level-2 parent-menu-active first"><a href="about_overview.php#whatWeDo">What we do</a></li>
              <li class="level-2"><a href="about_overview.php#whoWeAre">Who we are</a></li>
            </ul>
          </li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1"><a href="about_advisorteam.php">The team</a></li>
          <li class="level-1"><a href="about_investmentpolicy.php">Invvestment policy</a></li>
          <li class="level-1"><a href="about_riskmanagement.php">Risk management</a></li>
          <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1 whatWeDo" id="whatWeDo">
        <h1>What we do</h1>
        <h3>JLIF invests in the equity and subordinated debt issued with respect to infrastructure projects.</h3>
        <p>As an equity stakeholder, we partner with public sector counterparties across the world to deliver key local and national infrastructure projects. In return, these provide government-backed, inflation-linked revenue streams to our business. Our continued success is built on a collaborative approach centred on long term relationships with our clients and partners such that their changing infrastructure needs can be met in a timely and cost-effective manner.</p>
        <p>JLIF manages its Portfolio to ensure the delivery of ongoing value and yield in order to deliver and maximise shareholder value through total returns. The Company grows through acquisitions of further assets from both the John Laing Group and from the wider market as and when opportunities to invest in assets that can generate value for shareholders are identified.</p>
      </div>
      <div class="col-lg-3 rightcol1">
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery">View structure</span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span>
        </div>
        <br>
        <div href="#" class="btn-viewAssetGallery">
          <span class="spn-viewAssetGallery">
            <a href="investors_publications.php">View annual report
          </span>
          <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
       <div class="col-lg-3"></div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">Market capitisation</p>
          <p class="price">£991.5m</p>
          <p class="time">As at 3:15pm . 21 Oct 15</p>
        </div>
      </div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">Total net assets</p>
          <p class="price">£875.8m</p>
          <p class="time">As at 3:15pm . 21 Oct 15</p>
        </div>
      </div>
       <div class="col-md-3 statistics">
        <div>
          <p class="heading">NAV per share</p>
          <p class="price">107.8p</p>
          <p class="time">As at 3:15pm . 21 Oct 15</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left whoWeAre">
      </div>
      <div class="col-lg-6 content1 whoWeAre">
        <h1>Who we are</h1>
        <h3>JLIF is one of Europe’s largest listed infrastructure funds and a FTSE 250 company trading on the London Stock Exchange.</h3>
        <p>JLIF has a board of six non-executive directors chaired by Paul Lester, CBE. Andrew Charlesworth, who has over 20 years’ experience in infrastructure investments, is a director of JLCM and lead its management team. He is dedicated to advising JLIF and managing its holding entities.</p>
        <p>JLIF is advised on a day-to-day basis by John Laing Capital Management Limited (“JLCM”), a wholly owned subsidiary of John Laing. JLCM has been authorised and regulated in the UK by the Financial Conduct Authority (previously the Financial Services Authority) since December 2004.</p>
        <p>JLIF benefits from a team of experienced investment advisers who have significant knowledge and expertise in infrastructure investing. Utilising this extensive PPP knowledge they will seek to deliver further value from the diversified Portfolio by enhancing the value of the assets.</p>

      <div class="contactCard">
        <div class="pull-left">
          <img src="images/paul.jpg">
        </div>
        <div class="pull-right contactInfo">
          <h1>Paul Lester CBE</h1>
          <h3>Chairman</h3>

          <p>Paul Lester, a resident of the United Kingdom,was appointed as non-executive Chairman of four organisations: Greenergy International Ltd on 1 October 2010, Peverel in April 2012, Paribas in October 2012 and Signia Wealth Ltd in January 2014...</p>
          <div href="#" class="btn-viewAssetGallery">
            <span class="spn-viewAssetGallery"><a href="about_boardofdirectors.php">Read more</span>
            <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>

      <div class="contactCard">
        <div class="pull-left">
          <img src="images/andrew.jpg">
        </div>
        <div class="pull-right contactInfo">
          <h1>Andrew Charlesworth</h1>
          <h3>Investment Adviser</h3>

          <p>Andrew Charlesworth is a Director of JLCM, responsible for delivering the fund’s performance targets. He has been able to draw on 19 years of experience in infrastructure development and finance to help JLIF grow from a Portfolio Value of £259.0 million at launch...</p>
          <div href="#" class="btn-viewAssetGallery">
            <span class="spn-viewAssetGallery"><a href="about_advisorteam.php">Read more</span>
            <span class="glyphicon glyphicon-triangle-right pull-left" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>

      </div>

      <div class="col-lg-3 rightcol1 whoWeAre" id="whoWeAre">
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
