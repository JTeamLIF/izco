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
          <li><a href="investors_shareprice.php">Investors</a></li>
          <li class="top_menu_active"><a href="media_presscoverage.php">Media</a></li>
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
        <div class="clearPageTitle">
        </div>
        <div class="pageTitle">
          Media
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 breadcrumb">
      <div class="col-lg-9 pull-right">
        <span class="previousPage"><a href="index.php">Home</a></span> |
        <span class="previousPage">Media</span> |
        <span class="activePage">Press Coverage</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contentwrapper1">
      <div class="col-lg-3 menu_left">
        <ul class="nav">
          <li class="level-1 first parent-menu-active"><a href="media_presscoverage.php">Press Coverage</a></li>
          <li class="level-1"><a href="media_videocoverage.php">Video Coverage</a></li>
        </ul>
      </div>
      <div class="col-lg-6 content1">
        <h1>Press Coverage</h1>
        <p>Search by date, keyword or category</p>
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="Keyword" aria-describedby="basic-addon1">
        </div>
        <div class="dropdown inline" style="margin-left: 37px;">
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="From" aria-describedby="basic-addon1">
        </div>
        <img src="images/calendar-icon.jpg" class="inline calendarIconPadding">
        <div class="input-group inline">
          <input type="text" class="form-control" placeholder="To" aria-describedby="basic-addon1">
        </div>
        <img src="images/calendar-icon.jpg" class="inline calendarIconPadding">
        <button type="button" class="btn btn-default navbar-btn inline search">Search</button>

        <div class="clearfix"></div>

        <div class="publicationsMain">

        <ul class="years">
          <li><span>2016</span></li>
          <li>2015</li>
          <li>2014</li>
          <li>2013</li>
          <li>2012</li>
        </ul>
        <h2 class="selectedYear">2016</h2>
        <p><b>Total:</b> 7 results</p>

       <!-- Nav tabs -->
        <ul class="nav nav-tabs publicationsTab" role="tablist">
          <li role="presentation" class="active">
            <a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="all">
            <table class="table-striped publicationsTable">
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="date">25 Feb 2016</span>
                  <span class="text">Lorem ipsum dolor sit amet, justo nihil accumsan ut has</span>
                </td>
              </tr>
            </table>
          </div>
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
