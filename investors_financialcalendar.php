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
        <span class="activePage">Financial Calendar</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav_left hidden-xs hidden-sm hidden-md">

          <li class="level-1 first"><a href="investors_sharedata.php">Share Information</a></li>
          <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
          <li class="level-1"><a href="investors_othernews.php">Other news</a></li>
          <li class="level-1"><a href="investors_dividends.php">Dividends</a></li>
          <li class="level-1"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1 parent-menu-active"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">

      <h1>Upcoming & past events</h1>


     <!-- Nav tabs -->
        <ul class="nav nav-tabs publicationsTab" role="tablist">
          <li role="presentation" class="active">
            <a href="#upcomingEvents" aria-controls="upcomingEvents" role="tab" data-toggle="tab">Upcoming Events</a>
          </li>
          <li role="presentation">
            <a href="#pastEvents" aria-controls="pastEvents" role="tab" data-toggle="tab">Past Events</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="upcomingEvents">
             <table class="table-striped publicationsTable">
              <tr>
                <td>
                  <span class="date">9 September 2016</span>
                  <span class="text">Publication of 2016 interim results</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">30 June 2016</span>
                  <span class="text">Financial half-year end 2016</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>

            </table>
          </div>
          <div role="tabpanel" class="tab-pane" id="pastEvents">
            <table class="table-striped publicationsTable">
                          <tr>
                <td>
                  <span class="date">16 May 2016</span>
                  <span class="text">Annual General Meeting</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">13 May 2016</span>
                  <span class="text">2nd half-year Dividend Payment</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">9 Nov 2015</span>
                  <span class="text">JLIF Interim Management Statement</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">28 Aug 2015</span>
                  <span class="text"> 	Interim Report</span>
                  <span class="calendar"><img src="images/calendar-icon-events.jpg"></span>
                </td>
              </tr>

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

<script src="js/ga.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Cookie Consent JavaScript -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
</body>
</html>
