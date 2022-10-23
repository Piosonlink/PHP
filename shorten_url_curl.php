 
 <?php

 	$ch = curl_init('http://api.bitly.com/v3/shorten' 
 		. '?login=user&apiKey=secret'
 		. '&longUrl=http%3A%2F%2Fexamplesite.com');
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 		$result = curl_exec($ch);

 		print_r(json_decode($result));

 		