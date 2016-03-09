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
        <span class="previousPage">Share Information</span> |
        <span class="activePage">Share Alerts</span>
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
              <li class="level-2"><a href="investors_sharepricehistory.php">Share Price History</a></li>
              <li class="level-2"><a href="investors_investmentcalculator.php">Investment Calculator</a></li>
              <li class="level-2 parent-menu-active"><a href="investors_sharealerts.php">Share Alerts</a>
            </ul>
          </li>
          <li class="level-1"><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
          <li class="level-1"><a href="investors_dividends.html">Dividends</a></li>
          <li class="level-1"><a href="investors_publications.php">Publications</a></li>
          <li class="level-1"><a href="investors_financialcalendar.php">Financial Calendar</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Share Alerts</h1>
        <p>You can automatically receive share prices and share price alerts by email.
        Please choose your options for email notification and enter your contact details below.</p>
        <hr>
        <b>Select Share Price Alerts:</b>
        <div class="checkbox">
          <label><input type="checkbox" value="">
            <span class="checkboxLabel">Daily Closing Price</span>
            <span>Send me a closing price at the end of the trading day.</span>
          </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="">
            <span class="checkboxLabel">Price Target</span>
            <span>Alert me when the share price reaches the set price.</span>
            <input type="text"></label>
          </label>
        </div>
        <div class="checkbox disabled">
          <label><input type="checkbox" value="">
            <span class="checkboxLabel">Stop Loss</span>
            <span>Alert me when the share price declines the set price.</span>
            <input type="text"></label>
          </label>
        </div>
        <div class="checkbox disabled">
          <label><input type="checkbox" value="">
            <span class="checkboxLabel">Variation %</span>
            <span>Alert me when the share price changes more than set value.</span>
            <input type="text"></label>
          </label>
        </div>
        <div class="checkbox disabled">
          <label><input type="checkbox" value="">
            <span class="checkboxLabel">Volume Target</span>
            <span>Alert me when the number of shares traded reaches the set value.</span>
            <input type="text"></label>
          </label>
        </div>

        <hr>
        <b>Confirm Your Subscription:</b>
        <br><br>
        <ol>
          <li>Please fill in the fields below and enter a valid email address.</li>
          <li>We will send you an email with a link to activate your subscription.</li>
        </ol>
        <br><br>
        <form class="subscription">
          <p>E-mail address <input type="text"></input></p>
          <p>First name <input type="text"></input></p>
          <p>Surname <input type="text"></input></p>
          <p>Profession
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </p>
          <p>Country
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </p>
          <br><br>
          <button type="button" class="btn btn-default navbar-btn inline search pull-right">Submit</button>
        </form>
        <div class="clearfix"></div>
        <hr>
        <p>if you are already a subscriber and would like to modify your<br>
        subscription, please enter your email address below.</p>
        <b>You can:</b>
        <ol>
          <li>Change your subscription details.</li>
          <li>Unsubscribe from the service.</li>
        </ol>
        <p>E-mail address <input style="float:right; width: 450px;" type="text"></input></p>
        <br><br>
        <button type="button" class="btn btn-default navbar-btn inline search pull-right">Submit</button>
          <div class="clearfix"></div><br><br>
          <div class="pull-right eurolandCopyright" style="text-align: right">
            Supplied by &copy; <a href="Euroland.com">Euroland.com</a>
            <br>
            For terms of use and data vendors information, see <a href="#">Disclaimer</a>
            <br>
            <a href="#">Cookie policy</a>
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
