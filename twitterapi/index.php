<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "17990141-6okJqGcvGmFFPxEtooNTL7YNwRVRip6s3Zr1WpaGd",
    'oauth_access_token_secret' => "rzjDUDpgyPDc2fvDLBkMqCpaRjt6o3obppZCy870aKYDE",
    'consumer_key' => "09ogBP3qeIltrR7nvfJFabFPE",
    'consumer_secret' => "K7enIhFrRNDGDncmoN1gTjXa8JxYFmutefoXx7Il7DigTyOqOD"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'jlfund', 
    'trim_user' => '1',
	'count' => '2'
);

/** Perform a POST request and echo the response **/
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->buildOauth($url, $requestMethod)
            // ->setPostfields($postfields)
             //->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?count=2&trim_user=1&screen_name=jlfund';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
