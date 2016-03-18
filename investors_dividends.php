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
<?php $categorytitle = 'Investors'; ?>
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
          <li class="top_menu_active"><a href="investors_sharedata.php">Investors</a></li>
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
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage">Investors</span> |
        <span class="activePage">Dividends</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">

          <li class="level-1 first"><a href="investors_sharedata.php">Share Information</a></li>
          <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
          <li class="level-1 parent-menu-active"><a href="investors_dividends.php">Dividends</a></li>
          <li class="level-1"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Latest & historical dividends</h1>
         <!-- Nav tabs -->
        <ul class="nav nav-tabs publicationsTab" role="tablist">
          <li role="presentation" class="active">
            <a href="#latestDividend" aria-controls="latestDividend" role="tab" data-toggle="tab">Latest dividend</a>
          </li>
          <li role="presentation">
            <a href="#historicalDividends" aria-controls="historicalDividends" role="tab" data-toggle="tab">Historical dividends</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="latestDividend">

            <br><br>
            <p>JLIF's last dividend payment was for:-</p>

            <h1 class="dividendh1">GBX: 3.375 pence per share</h1>

            <p>This payment was made on:-</p>
            <p class="dividendDate">20 Oct 2015</p>

            <hr>

            <p>JLIF believes that future distributions will continue to fully cover future costs as well as
            planned dividends payable to its shareholders. The Company continues to offer a scrip dividend alternative.</p>

            <p>In August 2015, the Company announced a dividend for the six month period ended 30 June 2015 of 3.375 pence per share.
            This was paid on 20 October 2015 and brings total dividends paid to date since launch to 29.0 pence per share. JLIF believes
            that future distributions will continue to fully cover future costs as well as planned dividends payable to its shareholders.
            The Company continues to offer a scrip dividend alternative.</p>

          </div>
          <div role="tabpanel" class="tab-pane" id="historicalDividends">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Ex Date</th>
                  <th>Record Date</th>
                  <th>Payment Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>10-Sep-15</td>
                  <td>11-Sep-15</td>
                  <td>20-Oct-15</td>
                  <td>3.375p</td>
                </tr>
                <tr>
                  <td>02-Apr-15</td>
                  <td>07-Apr-15</td>
                  <td>22-May-15</td>
                  <td>3.375p</td>
                </tr>
                <tr>
                  <td>03-Sep-14</td>
                  <td>05-Sep-14</td>
                  <td>20-Oct-14</td>
                  <td>3.250p</td>
                </tr>
                <tr>
                  <td>02-Apr-14</td>
                  <td>04-Apr-14</td>
                  <td>19-May-14</td>
                  <td>3.250p</td>
                </tr>
                <tr>
                  <td>04-Sep-13</td>
                  <td>06-Sep-13</td>
                  <td>18-Oct-13</td>
                  <td>3.125p</td>
                </tr>
                <tr>
                  <td>27-Mar-13</td>
                  <td>02-Apr-13</td>
                  <td>14-May-13</td>
                  <td>3.125p</td>
                </tr>
                <tr>
                  <td>05-Sep-12</td>
                  <td>07-Sep-12</td>
                  <td>19-Oct-12</td>
                  <td>3.000p</td>
                </tr>
                <tr>
                  <td>21-Mar-12</td>
                  <td>23-Mar-12</td>
                  <td>11-May-12</td>
                  <td>3.000p</td>
                </tr>
                <tr>
                  <td>07-Sep-11</td>
                  <td>09-Sep-11</td>
                  <td>21-Oct-11</td>
                  <td>3.000p</td>
                </tr>
                <tr>
                  <td>02-Mar-11</td>
                  <td>04-Mar-11</td>
                  <td>07-Apr-11</td>
                  <td>0.500p</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

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
