<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
$test_key = $meth = $out = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $test_key = test_input($_POST["test_key"]);
   $meth = test_input($_POST["meth"]);
   $out = test_input($_POST["out"]);

}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>



<h1>Quick API Key tests</h1></p>
<p>Currently tests the API response for an access key, some time and size reporting, and Get call tests based on example code from API docs. Output is json or xml. Not choosing an output will assume json when making the call.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Test Key: <input type="text" name="test_key">
<input type="radio" name="out" value="json">json
<input type="radio" name="out" value="xml">xml
<br><br>
Sample API calls using the entered access key<br>
<p><b>Client level API for accessing a client's leads and lead information</b></p>
   <input type="radio" name="meth" value="leads/lead">Get Leads
<input type="radio" name="meth" value="leads/note/1/1">Get Lead Notes
<input type="radio" name="meth" value="leads/search/1/1">Get Lead Searches
<input type="radio" name="meth" value="leads/property/1/1">Get Lead Saved Properties
<br>
<p><b>Client level API for accessing client properties, links, agents, offices, and search information</b><p/>
<input type="radio" name="meth" value="clients/agents?filterField=agentID&filterValue=1">Get Agents
<input type="radio" name="meth" value="clients/offices">Get Offices
<input type="radio" name="meth" value="clients/savedlinks">Get Saved Links
<input type="radio" name="meth" value="clients/widgetsrc">Get Widgets
<input type="radio" name="meth" value="clients/featured">Get Featured Properties
<input type="radio" name="meth" value="clients/soldpending">Get Sold/Pending
<input type="radio" name="meth" value="clients/supplemental">Get Supplemental
<input type="radio" name="meth" value="clients/cities">Get Cities
<input type="radio" name="meth" value="clients/citieslistname">Get Cities List Names
<input type="radio" name="meth" value="clients/counties">Get Counties
<input type="radio" name="meth" value="clients/zipcodes">Get Zip Codes
<br>
<p><b>Partner level API for accessing information for clients under a development parter's account</b></p>
<input type="radio" name="meth" value="partners/clients">Get Partner Clients
<input type="radio" name="meth" value="partners/aggregatedleads?interval=168&startDatetime=2013-12-09+23:59:59&dateType=lastLoginDate">Get Aggregated Leads
<input type="radio" name="meth" value="partners/aggregatedsearches?interval=24&startDatetime=2012-01-01+23:59:59&dateType=created">Get Aggregated Searches
<input type="radio" name="meth" value="partners/aggregatedproperties?interval=24&startDatetime=2012-01-01+23:59:59&dateType=created">Get Aggregated Properties
<input type="radio" name="meth" value="partners/aggregatedfeatured?interval=24&startDatetime=2012-01-01+23:59:59&dateType=dateAdded">Get Aggregated Featured Properties
<input type="radio" name="meth" value="partners/aggregatedsupplemental?interval=24&startDatetime=2012-01-01+23:59:59&dateType=dateAdded">Get Aggregated Supplemental
<input type="radio" name="meth" value="partners/aggregatedsoldpending?interval=24&startDatetime=2012-01-01+23:59:59&dateType=dateAdded">Get Aggregated Sold/Pending
<input type="radio" name="meth" value="artners/aggregatedlistingstatus?filterField=status&filterValue=active">Get Aggregated Listing Status (Active)
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php

// only checking for a response code here.
$url = 'https://api.idxbroker.com/clients/featured';
$method = 'GET';



if ($test_key == "")
 {

echo '<br><br><h2>Please enter an API key to test</h2>';
}


else if ($meth == "")
{




// headers (required and optional)
$headers = array(
  "Content-Type: application/x-www-form-urlencoded", // required
  "accesskey: " . $test_key, // required - replace with your own
  "outputtype: " . $out // optional - overrides the preferences in our API control page

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




if ($code >= 200 || $code < 300)

if ($out == 'xml') {

echo '';

}

else

{
$response = json_decode($response,true);
}




else
  $error = $code;


  echo '<br><br>Returned response code from API: <b>';
echo  $code;

    if($code == 200) {

    echo ' means we are All Good.';

    }

                if($code == 204) {

    echo ' means that the request was received and understood, but that there is no need to send any data back.';

    }



                if($code == 401) {



         echo 'means accesskey not valid or revoked';

       }


       if($code == 403) {



         echo 'means API call is not using SSL and does not use HTTPS.';

       }


       if($code == 405) {

         echo ' means method requested is invalid. I messed something in my code and I am an idiot';

       }

       if($code == 406) {

         echo ' means an access key is not provided.';

       }


       if($code == 409) {

         echo ' means the API call has an invalid API component specified. So I failed to specify something in this call.';

       }


       if($code == 412) {

         echo ' means the account is over the hourly access limit of API calls.';

       }

       if($code == 500) {

         echo ' means General system error.';

       }


       if($code == 503) {

         echo ' means scheduled API maintenance is currently occurring.';

       }

echo '</b><br><br>API key used: <b>';

echo $test_key;

echo '</b><br>';

echo '<br>URL used: ' . $url;

echo '<br>Total Time: '. $total_time . ' (Total transaction time in seconds for last transfer)';

echo '<br>Time to establish connection: ' . $connect_time;

echo '<br>Average download speed: '. $avg_down_speed;

echo '<br>Total download size: '. $total_download_size . ' bytes';

  }

else
{

include 'sample_get.php';

}





?>
<p><br><br><hr>This page is for testing purposes only. The code for it is not pretty or elegant.</p>
</body>
</html>
