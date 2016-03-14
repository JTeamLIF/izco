 <div class="row visible-xs">
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
                  <li><a href="about_overview.php#whatWeDo">About</a></li>
                  <li><a href="about_overview.php#whoWeAre">The investment adviser</a></li>
                  <li><a href="about_keyevents.php">Key events</a></li>
                  <li><a href="about_advisorteam.php">Investor adviser team</a></li>
                  <li><a href="about_boardofdirectors.php">Board of directors</a></li>
                  <li><a href="about_investmentpolicy.php">Investment policy</a></li>
                  <li><a href="about_riskmanagement.php">Risk management</a></li>
                  <li><a href="about_riskmanagement.php#riskcommittee">Risk committee</a></li>
                  <li><a href="about_corporatesocialresponsibility.php">Corporate social responsibility</a></li>
                  <li><a href="about_corporategovernance.php">Corporate governance</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="portfolio_investmentportfolio.php">Investment Portfolio</a></li>
                  <li><a href="portfolio_assetbreakdown.php">Asset Breakdown</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Investors<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="investors_shareprice.php">Share Price</a></li>
                  <!--<li><a href="investors_sharepricehistory.php">Share Price History</a></li>-->
                  <li><a href="investors_investmentcalculator.php">Investment Calculator</a></li>
                  <li><a href="investors_sharealerts.php">Share Alerts</a>
                  <li><a href="investors_latestregulatorynews.php">Regulatory news</a></li>
                  <li><a href="investors_dividends.php">Dividends</a></li>
                  <li><a href="investors_publications.php">Publications</a></li>
                  <li><a href="investors_financialcalendar.php">Financial Calendar</a></li>
                </ul>
              </li>
              <li><a href="media_presscoverage.php">Media</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="col-sm-3 col-md-3">
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
      <?php include("inc/latest-share-price.php"); ?>
    </div>
  </div>