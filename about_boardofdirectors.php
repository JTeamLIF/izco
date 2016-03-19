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
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"> <a href="index.php">Home</a> </span> | <span class="previousPage"> <a href="about_overview.php">About</a> </span> | <span class="activePage"> <a href="about_boardofdirectors.php">Board of directors</a> </span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 first"> <a href="about_overview.php">Overview</a> </li>
          <li class="level-1"> <a href="about_keyevents.php">Key events</a> </li>
          <li class="level-1 parent-menu-active"> <a href="about_boardofdirectors.php">The team</a>
            <ul class="nav_sub">
            <li class="level-2 parent-menu-active"> <a href="about_boardofdirectors.php">Board of directors</a> </li>
            <li class="level-2 first"> <a href="about_advisorteam.php">Investment adviser team</a> </li>
              
            </ul>
          </li>
          <li class="level-1"> <a href="about_investmentpolicy.php">Investment policy</a> </li>
          <li class="level-1"> <a href="about_riskmanagement.php">Risk management</a> </li>
          <li class="level-1"><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
          <li class="level-1"><a href="about_corporategovernance.php">Corporate governance</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1" id="inverstorAdvisorTeam">
        <h1>Board of directors</h1>
        <h3>The Board consists of six Non-Executive Directors, all of whom are independent of the Company’s Investment Adviser. As the Company has no Executive Directors, the provision of the UK Corporate Governance Code relating to the combining of the roles of Chairman and Chief Executive Officer does not apply to the Company.</h3>
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
    <div class="col-md-12 contentwrapper1">
      <div class="col-md-12 inverstorAdvisorWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-9" id="inverstorAdvisorTeam">
          <img id="mainImage" src="images/Bio_main_Paul_Lester.png">
            <div class="col-lg-3 inverstorAdvisorTitle">
              <h1 id="mainName">Paul Lester CBE</h1>
              <h3 id="mainTitle">Chairman</h3>
            </div>
            <div id="mainDesc" class="col-lg-8 inverstorAdvisorInfo">
              <p>Paul Lester, a resident of the United Kingdom, was appointed as non-executive Chairman of Greenergy International Ltd on 1 October 2010, and Knight Square in April 2012. He has also been appointed Chairman Designate of Essentra Plc. He is a member of the Government’s Major Project Review Group. Mr Lester was chief executive of VT Group plc, the support services company, from July 2002 until its acquisition by Babcock International in July 2010. </p>
              <p>Mr Lester was group managing director of Balfour Beatty plc, the international engineering, construction and services group, from 1997 to 2002, and chief executive of Graseby plc from 1990 to 1997. Mr Lester has also held senior management positions at Schlumberger and the Dowty Group plc. /<p>
              <p>Mr Lester is a former president of the Society of Maritime Industries.<p>
            </div>
            <div class="col-lg-9 otherContactsWrapper">
              <div id="Paul_Lester" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>Paul Lester CBE</h1>
                  <h3>Chairman</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
                </div>
              </div>
              <div id="David_MacLellan" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>David MacLellan</h1>
                  <h3>Deputy Chairman & Senior Independent Director</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
                </div>
              </div>
              <div id="Talmai_Morgan" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>Talmai Morgan</h1>
                  <h3>Director</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
                </div>
              </div>
               <div id="Christopher_Spencer" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>Christopher Spencer</h1>
                  <h3>Director & Chairman of the Audit Committee</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
                </div>
              </div>
              <div id="Guido_van_Berkel" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>Guido van Berkel</h1>
                  <h3>Director</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
                </div>
              </div>
              <div id="Helen_Green" class="teamMember">
                <div class="emptyOverlay"></div>
                <div class="teamMemberInfo">
                  <h1>Helen Green</h1>
                  <h3>Director & Chairman of the Risk Committee</h3>
                  <div class="dropup">
                    <span class="glyphicon glyphicon-triangle-top pull-right" aria-hidden="true" style="display:block; top: -35px; right: -10px;"></span>
                  </div>
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

<script src="js/ga.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Cookie Consent JavaScript -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</body>
</html>
