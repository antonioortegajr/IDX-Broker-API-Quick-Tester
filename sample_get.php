<?php


//variables
$url_live = $_REQUEST["q_live"];
$url_end = $_REQUEST["q_url"];
$api_key = $_REQUEST["q_api_key"];
$ancillary = $_REQUEST["q_ancillary"];
$out = $_REQUEST["q_out"];
$version = $_REQUEST["q_version"];
$component = $_REQUEST["q_component"];
$meth = $_REQUEST["q_meth"];

//test for sandbox url
if ($url_live == 0){
$baseurl = 'https://api.idxbroker.com';
}
else{
$baseurl = 'http://api.idxsandbox.com';
};

//change amp back to & and plus back to +

$url_end = str_replace("!amp!","&",$url_end);
$url_end = str_replace("!plus!","+",$url_end);

$url = $baseurl . '/' .$component . '/' . $meth . $url_end;




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

/*
if ($method != 'GET'){
	curl_setopt($handle, CURLOPT_CUSTOMREQUEST, $method);
// send the data
curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
}

*/

// exec the cURL request and returned information. Store the returned HTTP code in $code for later reference
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
$total_time = curl_getinfo($handle, CURLINFO_TOTAL_TIME);
$avg_down_speed = curl_getinfo($handle, CURLINFO_SPEED_DOWNLOAD);
$total_download_size = curl_getinfo($handle, CURLINFO_SIZE_DOWNLOAD);
$connect_time = curl_getinfo($handle, CURLINFO_CONNECT_TIME);
//returns the response headers
curl_setopt($handle, CURLOPT_HEADER, 1);



//Get the response headers and the body, use explode() to seperate the two at the first { then add the { back to the body if json. Else explode at <
if ($out == 'json'){
 
 
$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
$b_response = (explode('{', $response, 2));
$e ='{';
}
 
  else{
 
    $response = curl_exec($handle);
    $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    $b_response = (explode('<', $response, 2));
    $e = '<';
  };
 
//if response body is empty do se e variable to also nothing
  $rebod= strlen($b_response[1]);
  if($rebod == 0){ $e = '';}



// echo http responce code


$good_emoji = array("(ʘ෴̴͜ʘ)", "✌(◕‿-)✌", "◦°˚\(*❛‿❛)/˚°◦", "ᕕ( ᐛ )ᕗ", "\( ﾟヮﾟ)/", "(๑╹ڡ╹)╭ ～ ♡", "♪~♪ ヽ໒(⌒o⌒)७ﾉ ♪~♪", "☆*✲ﾟ*｡(((´♡‿♡`+)))｡*ﾟ✲*☆", "(-‿◦☀)", "(*⸰‿-)", "|ʘ‿ʘ)╯", "◉‿◉", "｡◕‿◕｡", "(•̀ᴗ•́)و ̑̑", "~(˘▾˘~)", "( ᵕ́ૢ‧̮ᵕ̀ૢ)‧̊·*", "⊂(◉‿◉)つ", "₍₍⁽⁽(ી(^‿ゝ^)ʃ)₎₎⁾⁾", "೭੧(❛▿❛✿)੭೨", "(●⌃ٹ⌃)", "꒰⁎❛⃘ੌ ᵕ ❛⃘ੌ⁎꒱", "(⋈･◡･)✰", "(❍❛‿❛❍❋)", "ꉂꉂ ( ˆᴗˆ )", "☝( ◠‿◠ )☝");

$good_count = count($good_emoji);
$randy = rand(0, $good_count);

$bad_emoji = array("(◞‸◟；)", "(;´༎ຶД༎ຶ`)", "◔̯︵◔", "(ʘᗩʘ')", "٩(͡๏̯͡๏)۶", "(╯'□')╯︵ ┻━┻", "凸(⊙▂⊙✖ )", "(Ò囗Óױ)", "(╥﹏╥)", "☢︵☢", "(⊙＿⊙')". "‎(ﾉಥ益ಥ）ﾉ﻿ ┻━┻", "ಠ_ಠ", "ლ(ಠ益ಠლ)", "(;-_-)", "¯\(º_o)/¯", "( ꒪Д꒪)ノ", "ಥ⌣ಥ", "(ヾﾉ•᷅ ༬•᷄ )", "o͡͡͡͡͡͡╮(｡>口<｡)╭o͡͡͡͡͡͡ ᵑ৹!", "( ‾᷅⚰‾᷄ )", "(∘⁼̴⃙̀˘︷˘⁼̴⃙́∘)", "┗|｀O´|┛", "┗(｀皿´)┛");
$bad_count = count($bad_emoji);
$bad_randy = rand(0, $bad_count);

echo 'Status code: ' . $code;
switch ($code) {
    case 200:
        echo " " . $good_emoji[$randy];
        break;
        case 204:
        echo " We all good, nothing to return. ¯\_(ツ)_/¯" ;
        break;
        case 400:
        echo " Required parameter missing or invalid. Check the API endpoint you used. " . $bad_emoji[$bad_randy];
        break;
        case 401:
        echo " accesskey not valid or revoked. You could reset the API key. In doing so the client will have to update to the new key. Should reseting not resolve the issue create a ticket. " . $bad_emoji[$bad_randy];
        break;
        case 403:
        echo " Call not using SSL (HTTPS). This could the url they set up or the hosting they are using to make the call. In either case there is nothing further to trouble shoot as we can not change their code or upgrade their hosting. (╯'□')╯︵ sdʇʇɥ";
        break;
        case 404:
        echo " The requested URL was not found on this server. Check the API endpoint you used. " . $bad_emoji[$bad_randy];
        break;
        case 406:
        echo " No API Key provided. (╯°□°)╯︵  ʎǝʞ IԀ∀";
        break;
    case 409:
        echo " Duplicate unique data detected. " . $bad_emoji[$bad_randy];
        break;
    case 412:
        echo " Over Hourly API limit. Wait an hour and re check or reset key in middleware. " . $bad_emoji[$bad_randy];
        break;
        case 417:
        echo " Either over 1k in saved links created by API or no title in the saved links PUT request. Check response header for indication " . $bad_emoji[$randy];
        break;
         case 500:
        echo " General error. Create a ticket! " . $bad_emoji[$bad_randy];
        break;
         case 503:
        echo " Scheduled or emergency API maintenance will result in 503 errors. " . $bad_emoji[$bad_randy];
        break;
         case 521:
        echo " Temporary error. There is a possibility that not all API methods are affected. Test and create tickets for affected methods. " . $bad_emoji[$bad_randy];
        break;
}

//create jira link


//set live or sandbox for jira link
if ($url_live == 0){
$j_environment = '10300';
}
else{
$j_environment = '10301';
};

//set user level for jira link
if ($component == 'partners'){
$j_user_level = '10605';
}
else{
$j_user_level = '10602';
};

$j_summary = 'API issue';

$j_description  = 'returned+error+code:+' . $code . '+To+replicate+this+issue+make+an+API+GET+call+using+the+following+endpoint:+' . $url . '+API+key:+'. $api_key . '+output+requested:+' . $out . '+version+requested:+' . $version;

$issue_link = 'http://jira.idx.local/jira/secure/CreateIssueDetails!init.jspa?pid=10300&issuetype=1&priority=3&customfield_11400=' . $j_environment . '&customfield_11603=' . $j_user_level . '&components=10503&summary=' . $j_summary . '&description=' . $j_description;

echo '</b><br><h3 class="flag"><div id="j_link"><a href="' . $issue_link . '" target="_blank">Create Issue in jira</a></div></h3>';

echo '<br><br>API key used: <b>';

echo $api_key;

echo '</b><br>';

echo '<br>API endpoint used: ' . $url;

echo '<br>Total Time: '. $total_time . ' (Total transaction time in seconds for last transfer)';

echo '<br>Time to establish connection: ' . $connect_time;

echo '<br>Average download speed: '. $avg_down_speed;

echo '<br>Total download size: '. $total_download_size . ' bytes<br>';

echo '<br><b>Request headers sent: </b>'; echo var_dump($headers);

echo '<br><br><b>Returned headers: </b>'; echo var_dump($b_response[0]);

echo '<br><hr><b>API Response Body: </b><br>';


echo $e . $b_response[1];



	

?>
