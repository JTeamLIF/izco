<?php     
	$xml=simplexml_load_file("http://tools.euroland.com/tools/services/?func=GetCompanyPressReleases&companycode=uk-jlif&format=xml&amount=2") or die("Error: Cannot create object");
	$title1 = (string)$xml->item[0]->title;
	$title2 = (string)$xml->item[1]->title;
	$datetime1 = (string)$xml->item[0]->date;
	$date1 = date_create($datetime1);
	$datetime2 = (string)$xml->item[1]->date;
	$date2 = date_create($datetime2);
	echo date_format($date1, 'F j, Y');
	echo date_format($date2, 'F j, Y');
	echo $title1;
	echo $title2;
	?>
