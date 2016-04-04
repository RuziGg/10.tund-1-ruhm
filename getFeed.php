<?php
	
	//getFeed.php?search=%23Tallinn
	
	//https://github.com/J7mbo/twitter-api-php
	
	require_once("twitterAPIexchange.php");
	
	require_once("config.php");
 
	$url = "https://api.twitter.com/1.1/search/tweets.json";
	$getField = "?q=%23Tallinn&result_type=recent";
	
	$requestMethod = "GET";
	
	
 
 ?>