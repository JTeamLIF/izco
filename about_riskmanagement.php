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
	window.location = "http://www.jlif.com/gateway.php?loc=" + document.URL
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19101193-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
  <div id="push"> </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"><a href="index.php">Home</a></span> | <span class="previousPage"><a href="about_overview.php">About</a></span> | <span class="activePage">Risk management</span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 first"><a href="about_overview.php">Overview</a></li>
          <li class="level-1"><a href="about_keyevents.php">Key events</a></li>
          <li class="level-1"><a href="about_boardofdirectors.php">The team</a></li>
          <li class="level-1"><a href="about_investmentpolicy.php">Investment policy</a></li>
          <li class="level-1 parent-menu-active"><a href="about_riskmanagement.php">Risk management</a>
            <ul class="nav_sub">
              <li class="level-2 parent-menu-active first"><a href="about_riskmanagement.php">Overview</a></li>
              <li class="level-2"><a href="about_riskmanagement.php#riskcommittee">Risk Committee</a></li>
            </ul>
          </li>
          <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Risk management</h1>
        <h3>Risk is the potential for events to occur that can create either threats to success or opportunities for benefit. Threats to the success of the business could adversely impact the Group’s business model, reputation or financial standing. However, under a well-formed risk management framework, potential threats can be identified in advance and mitigated or converted into opportunities.</h3>
        <p>The purpose of JLIF’s risk management policies and procedures is not to completely eliminate risk, as this is not possible; rather, it is to reduce the likelihood of occurrence and to ensure that the Company is adequately prepared to deal with risks so as to minimise their impact should they materialise. </p>
        <p>JLIF has a dedicated Risk Committee to lead its risk management activities, chaired by Helen Green. </p>
        <p>Mitigation actions have been developed with respect to each risk identified to reduce the likelihood of such risk occurring and secondly to minimize the severity of its impact in the event that it does occur. In addition, the reputational impact of each risks is assessed and a red-amber-green rating is ascribed. </p>
        <p>The risk register is a ‘live’ document that is reviewed and updated regularly as new risks emerge and existing risks change. The risk register is formally reviewed by the Risk Committee, which meets four times a year, and is presented at each Board meeting for consideration and approval. </p>
        <h5>JLIF’s risk register covers six main areas of risk:</h5>
        <ul>
          <li> <span>Economic</span> </li>
          <li> <span>Operational</span> </li>
          <li> <span>Political</span> </li>
          <li> <span>Financial</span> </li>
          <li> <span>Taxation</span> </li>
          <li> <span>Compliance and Legal</span> </li>
        </ul>

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
  <div class="row">
    <div class="col-md-12 contentwrapper1"  style="background-color: #f7f7f7;">
      <div class="col-lg-3 menu_left"  style="background-color: #f7f7f7;">
      </div>
      <div class="col-lg-6 content1"  style="background-color: #f7f7f7;">
        <h1><a id="riskcommittee"></a>Risk committee</h1>
        <h3>The Risk Committee, which reports to the Board, is mandated to review the effectiveness of the Company’s (and that of the Investment Adviser, Administrator and other third party service providers as it deems fit) internal control policies and procedures for the identification, assessment and reporting of risks.</h3>
        <h5>Internal control and financial reporting </h5>
        <p>The Board is responsible for the Company’s systems of internal control and for reviewing its effectiveness, and the Board has, therefore, established a set of ongoing processes designed to meet the particular needs of the Company in managing the risks to which it is exposed. </p>
        <p>The process is based on a risk-based approach to internal control through a matrix which identifies the key functions carried out by the Investment Adviser and other key service providers, the various activities undertaken within those functions, the risks associated with each activity and the controls employed to minimise those risks. A residual risk rating is then applied. A regular report is provided to the Board highlighting material changes to risk ratings and then a formal review of these procedures is carried out by the Audit Committee on an annual basis. By their nature, these procedures will provide a reasonable, but not absolute, assurance against material misstatement or loss.</p>
        <p> At each Board meeting, the Board also monitors the Group’s investment performance and activities since the last Board meeting to ensure that the Investment Adviser and Operator adhere to the agreed Investment Policy and approved investment guidelines. Furthermore, at each Board meeting, the Board receives reports from the Company Secretary and Administrator in respect of compliance matters and duties performed by them on behalf of the Company.</p>
        <p> The Board considers that an internal audit function specific to the Company is unnecessary and that the systems and procedures employed by the Investment Adviser and Operator, including their own internal audit functions, provide sufficient assurance that a sound system of internal control, which safeguards the Company’s assets, is maintained.</p>
        <p> Investment Advisory services are provided to the Company by John Laing Capital Management Limited (“JLCM”). The Board is responsible for setting the overall Investment Policy and monitors the action of the Investment Adviser and Operator at regular Board meetings. The Board has also delegated administration and company secretarial services to Heritage International Fund Managers Limited but retains accountability for all functions it delegates. </p>
      </div>
      <div class="col-lg-3 rightcol1"  style="background-color: #f7f7f7;">

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
