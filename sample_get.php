<?php


//variables
$url_end = $_REQUEST["q_url"];
$api_key = $_REQUEST["q_api_key"];
$ancillary = $_REQUEST["q_ancillary"];
$out = $_REQUEST["q_out"];
$version = $_REQUEST["q_version"];

$baseurl = 'https://api.idxbroker.com/';
$component = $_REQUEST["q_component"];

$url = $baseurl . $component . '/' . $url_end;




$method = 'GET';

// headers (required and optional)
$headers = array(
	'Content-Type: application/x-www-form-urlencoded', // required
	'accesskey: ' . $api_key, // required - replace with your own
	'ancillarykey: ' . $ancillary,
	'outputtype: ' . $out, // optional - overrides the preferences in our API control page
	'apiversion: ' . $version
);

// set up cURL
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
$total_time = curl_getinfo($handle, CURLINFO_TOTAL_TIME);
$avg_down_speed = curl_getinfo($handle, CURLINFO_SPEED_DOWNLOAD);
$total_download_size = curl_getinfo($handle, CURLINFO_SIZE_DOWNLOAD);
$connect_time = curl_getinfo($handle, CURLINFO_CONNECT_TIME);
//returns the response headers
curl_setopt($handle, CURLOPT_HEADER, 1);



//Get the response headers and the body, use explode() to seperate the two at the first { then add the { back to the body
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
$b_response = (explode('{', $response, 2));
$return_array = '{'.$b_response[1];
$h_response = '';



// echo http responce code
echo $code;
switch ($code) {
	case 200:
	echo " We all good";
	break;
	case 204:
	echo " We all good, nothing returned because there is no data to return for this call.";
	break;
	case 400:
	echo " Required parameter missing or invalid.";
	break;
	case 401:
	echo " API key not valid or revoked. Reset the key in middleware if needed. Create ticekt if that fails.";
	break;
	case 403:
	echo " Call made not using SSL(https). This is not something IDX Broker can control. The hosting provider making the API call will need to enable SSL.";
	break;
	case 405:
	echo " Method requested is invalid. Check code making the call.";
	break;
	case 406:
	echo " No API Key provided";
	break;
	case 409:
	echo " Invalid API component specified. Check code making the call.";
	break;
	case 412:
	echo " Over hourly API limit. Wait until the hourly limit resets or the key can be revoked.";
	break;
	case 404:
	echo " The requested URL was not found on this server.";
	break;
	case 500:
	echo " General system error. A ticket will need to be created";
	break;
	case 503:
	echo " Scheduled or emergency API maintenance will result in 503 errors.";
	break;
	case 521:
	echo " Temporary error. There is a possibility that not all API methods are affected.";
	break;
}


echo '</b><br><br>API key used: <b>';

	echo $api_key;

	echo '</b><br>';

	echo '<br>URL used: ' . $url;

	echo '<br>Total Time: '. $total_time . ' (Total transaction time in seconds for last transfer)';

	echo '<br>Time to establish connection: ' . $connect_time;

	echo '<br>Average download speed: '. $avg_down_speed;

	echo '<br>Total download size: '. $total_download_size . ' bytes<br>';

	echo '<br><b>Request headers sent: </b>'; echo var_dump($headers);

	echo '<br><br><b>Returned headers: </b>'; echo var_dump($b_response[0]);

	echo '<br><hr><b>API Response: </b><br>';


	var_dump($return_array);





	?>
