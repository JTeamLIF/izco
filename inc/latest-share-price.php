<div class="col-md-3 latestSharePrices">
  <div class="sharepricecontainer">
    <p class="pricetitle">Latest Share Price </p>
    <p class="pricedisplay"><?php     
	$xml=simplexml_load_file("http://tools.euroland.com/tools/pricefeed/?companycode=uk-jlif") or die("Error: Cannot create object");
	$price = (string)$xml->Ticker[0]->Price;
	echo number_format($price,2);
	?>p</p>
    <p class="pricetime">As at <?php     
	$xml=simplexml_load_file("http://tools.euroland.com/tools/pricefeed/?companycode=uk-jlif") or die("Error: Cannot create object");
	$datetime = (string)$xml->Ticker[0]->Date;
	$date = date_create($datetime);
	echo date_format($date, 'g:i a, F j, Y');
	?></p>
    <p class="pricedelay">Delayed by 15 minutes</p>
  </div>
</div>
