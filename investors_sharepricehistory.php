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
          <li><a href="about_overview.php">About</a></li>
          <li><a href="portfolio_investmentportfolio.php">Portfolio</a></li>
          <li class="top_menu_active"><a href="investors_shareprice.php">Investors</a></li>
          <li><a href="media_presscoverage.php">Media</a></li>
          <li><a href="contact_administrators.php">Contact</a></li>
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
          Investors
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage">Investors</span> |
        <span class="previousPage">Share information</span> |
        <span class="activePage">Share Price History</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav">

          <li class="level-1 first parent-menu-active"><a href="investors_shareprice.php">Share Information</a>
            <ul class="nav_sub">
              <li class="level-2"><a href="investors_shareprice.php">Share Price</a></li>
              <li class="level-2 parent-menu-active"><a href="investors_sharepricehistory.php">Share Price History</a></li>
              <li class="level-2"><a href="investors_investmentcalculator.php">Investment Calculator</a></li>
              <li class="level-2"><a href="investors_sharealerts.php">Share Alerts</a>
            </ul>
          </li>
          <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
          <li class="level-1"><a href="investors_dividends.html">Dividends</a></li>
          <li class="level-1"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Share Price History</h1>

        <br>

        <p>
          <span class="blue">JLIF (LSE)</span>
          - Date starting from 12/09/1996
        </p>

        <br>
          <!-- Nav tabs -->
        <ul class="nav nav-tabs publicationsTab" role="tablist">
          <li role="presentation" class="active">
            <a href="#historicalSharePrices" aria-controls="all" role="historicalSharePrices" data-toggle="tab">Historical Share Prices</a>
          </li>
          <li role="presentation">
            <a href="#sharePriceDownload" aria-controls="sharePriceDownload" role="tab" data-toggle="tab">Share Price Download</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="historicalSharePrices">
            <br>
            <br>
            <p class="inline"> select the date to find price
              <div class="input-group inline"  style="margin-left: 60px;">
                <input type="text" class="form-control" placeholder="18/02/2016" aria-describedby="basic-addon1">
              </div>
              <img src="images/calendar-icon.jpg" class="inline calendarIconPadding">
            </p>
            <div class="clearfix"></div>
            <br>
            <p class="inline">Choose currency</p>
            <div class="dropdown inline" style="margin-left: 128px;">
              <button class="btn btn-default dropdown-toggle categoryDropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="title">Local Currency</span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
            <br><br>
            <button type="button" class="btn btn-default navbar-btn inline search pull-right">Show data</button>
            <div class="clearfix"></div>
            <hr>
            <h3>ANNUAL CLOSE PRICES</h3>
            <img src="images/graph.jpg">
            <br><br><br>
            <div class="pull-right eurolandCopyright" style="text-align: right">
            Supplied by &copy; <a href="Euroland.com">Euroland.com</a>
            <br>
            For terms of use and data vendors information, see <a href="#">Disclaimer</a>
            <br>
            <a href="#">Cookie policy</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="sharePriceDownload">

          </div>
        </div>
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
