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
<?php $categorytitle = 'Contact'; ?>
<body>
<div class="im-centered">
 <?php include("inc/mobile_navigation.php"); ?>
  <!-- Navigation -->
  <div class="row hidden-xs hidden-sm hidden-md">
    <div class="col-md-12">
      <?php include("inc/logo-and-search-bar.php"); ?>
      <div class="col-md-3 menu" id="menu_top_left">
        <ul id="nav_main">
          <li><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li><a href="investors_sharedata.php">Investors</a></li>
          <li><a href="media_presscoverage.php">Media</a></li>
          <li class="top_menu_active"><a href="contact.php">Contact</a></li>
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
      <div class="col-lg-9 pull-right breadcrumbLinks"> <span class="previousPage"><a href="index.php">Home</a></span> | <span class="activePage">Contact</span> | <span class="activePage">Administrators</span> </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">
          <li class="level-1 parent-menu-active first"><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Contact</h1>
        <h3>JLIF is a Guernsey Registered Company, with its Registered Office at Heritage Hall, Le Marchant Street, St Peter Port, Guernsey GY1 4HY. For enquiries concerning the Company, please contact:</h3>
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
      <div class="col-md-12 contactWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-3 contactleft">
          <div class="col-lg-3 contactheadblock">Investment Advisers</div>
          <div class="contactdetails"> <strong>John Laing Capital Management Limited</strong><br>
            1 Kingsway<br>
            London, WC2B 6AN<br>
            <br>
            <span class = "phonenumber">Telephone:</span> +44 (0)20 7901 3326<br>
            <span class = "phonenumber">Email:</span> <a href="mailto:info@jlif.com">info@jlif.com</a> </div>
        </div>
        <div class="col-lg-3 contactright">
          <div class="col-lg-3 contactmap"><img src="images/contactmap_adviser.png" width="284" height="232" alt="jlif administrators"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-md-12 contactWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-3 contactleft">
          <div class="col-lg-3 contactheadblock">Administrators</div>
          <div class="contactdetails"> <strong>Heritage Group Ltd</strong><br>
            PO Box 225, Heritage Hall<br>
            Le Marchant Street<br>
            St Peter Port<br>
            Guernsey, GY1 4HY<br>
            <br>
            <span class = "phonenumber">Telephone:</span> +44 (0)1481 716000 </div>
        </div>
        <div class="col-lg-3 contactright">
          <div class="col-lg-3 contactmap"><img src="images/contactmap_administrators.png" width="284" height="232" alt="jlif administrators"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-md-12 contactWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-3 contactleft">
          <div class="col-lg-3 contactheadblock">Shareholder Enquiries</div>
          <div class="contactdetails"> <strong>Capita Registrars</strong><br>
            The Registry, 34 Beckenham Road<br>
            Beckenham<br>
            Kent, BR3 4TU <br>
            <br>
            <span class = "phonenumber">Telephone:</span> +44 (0)20 8639 3399 </div>
        </div>
        <div class="col-lg-3 contactright">
          <div class="col-lg-3 contactmap"><img src="images/contactmap_shareholder.png" width="284" height="232" alt="jlif administrators"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-md-12 contactWrapper">
        <div class="col-lg-3"></div>
        <div class="col-lg-3 contactleft">
          <div class="col-lg-3 contactheadblock">Public Relations</div>
          <div class="contactdetails"> <strong>RLM Finsbury</strong><br>
            Tenter House<br>
            45 Moorfields<br>
            London, EC2Y 9AE<br>
            <br>
            <span class = "phonenumber">Telephone:</span> +44 (0)20 7251 3801 </div>
        </div>
        <div class="col-lg-3 contactright">
          <div class="col-lg-3 contactmap"><img src="images/contactmap_publicrelations.png" width="284" height="232" alt="jlif administrators"></div>
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
