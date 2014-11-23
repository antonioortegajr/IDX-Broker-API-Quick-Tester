<?php

// access URL and request method
$url = 'https://api.idxbroker.com/'. $meth;
$method = 'GET';


// headers (required and optional)
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey: ' . $test_key, // required - replace with your own
	'outputtype: ' . $out // optional - overrides the preferences in our API control page
);

// set up cURL
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);


if ($method != 'GET')
	curl_setopt($handle, CURLOPT_CUSTOMREQUEST, $method);

// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
$total_time = curl_getinfo($handle, CURLINFO_TOTAL_TIME);
$avg_down_speed = curl_getinfo($handle, CURLINFO_SPEED_DOWNLOAD);
$total_download_size = curl_getinfo($handle, CURLINFO_SIZE_DOWNLOAD);
$connect_time = curl_getinfo($handle, CURLINFO_CONNECT_TIME);
$pretransfer_time = curl_getinfo($handle, CURLINFO_PRETRANSFER_TIME);
$starttransfer_time = curl_getinfo($handle, CURLINFO_STARTTRANSFER_TIME);


if ($code >= 200 || $code < 300)
{

if ($out == 'xml') {

echo '';

}

else

{
$response = json_decode($response,true);
}
}

else
	$error = $code;

echo '<br><br>Returned response code from API: <b>';

echo  $code;

		if($code == 200) {

		echo '</b> means we are All Good.';

		}

                if($code == 204) {

		echo '</b> means that the request was received and understood, but that there is no need to send any data back.';

		}

                if($code == 401) {



   			echo '</b> means accesskey not valid or revoked';

   		}


   		if($code == 403) {



   			echo '</b> means API call is not using SSL and does not use HTTPS.';

   		}


   		if($code == 405) {

   			echo '</b> means method requested is invalid. I messed something in my code and I am an idiot';

   		}

   		if($code == 406) {

   			echo '</b> means an access key is not provided.';

   		}


   		if($code == 409) {

   			echo '</b> means the API call has an invalid API component specified. So I failed to specify something in this call.';

   		}


   		if($code == 412) {

   			echo '</b> means the account is over the hourly access limit of API calls.';

   		}

   		if($code == 500) {

   			echo '</b> means General system error.';

   		}


   		if($code == 503) {

   			echo '</b> means scheduled API maintenance is currently occurring.';

   		}

echo '</b><br><br>API key used: <b>';

echo $test_key;

echo '</b><br>';

echo '<br>URL used: ' . $url;

echo '<br>Average download speed: ' . $avg_down_speed;

echo '<br>Total download size: ' . $total_download_size . ' bytes';

echo '<br>Time to establish connection: ' . $connect_time . ' ( Time in seconds it took to establish the connection )';

echo '<br>Pre Transfer time: ' . $pretransfer_time . ' ( Time in seconds from start until just before file transfer begins )';

echo '<br>Start Transfer time: ' . $starttransfer_time . ' ( Time in seconds until the first byte is about to be transferred )';

echo '<br>Total Time: ' . $total_time . ' ( Total transaction time in seconds for last transfer)';

echo '<br><br>Below is a var_dump of the response (if json) or the xml returned. Sample code from <a href="http://middleware.idxbroker.com/docs/api/1.0.4/index.php">http://middleware.idxbroker.com/docs/api/1.0.4/index.php</a> was used to make call.<br><br>';

if ($out == 'xml') {

echo $response;

}

else {
var_dump(
 $response,
 json_encode($response)
);
}
echo '<br><br>';

?>
