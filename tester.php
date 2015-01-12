<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>You &#9829; API</title>
<!-- this code is presented as is. If you have improvements source is available https://github.com/antonioortegajr/IDX-Broker-API-Quick-Tester -->

<style>
body {
font-family: "Comic Sans MS", cursive, sans-serif;
margin-left:2.5%;
margin-right:2.5%;
}

#url_end, #api_key, #ancillary{
height: 40px;
width: 60%;
}

.styled-select {
font-size: 200%;
}
.inline {
display:inline;
}

.styled-select {
   width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg) no-repeat right #E6E6E6;
   border: 1px solid #ccc;
   display:inline;
   }
   .styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 21px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
   }
   
   .slashes{
   font-size: 25px;
   }
   
 .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65);
        }

        .button-error {
            background: rgb(202, 60, 60);
        }

        .button-warning {
            background: #ffffcc;
            color: black;
        }

        .button-secondary {
            background: #1f8dd6;
        }
   

        .button-large {
            font-size: 110%;
        }

        .button-xlarge {
            font-size: 125%;
        }
           
h3
{
	position: relative;
	width: 25%;
	font-size: 1.5em;
	font-weight: bold;
	padding: 6px 20px 6px 71px;
	margin: 30px 10px 10px -71px;
	color: white;
	background-color: #1f8dd6;
	text-shadow: 0px 1px 2px #bbb;
	-webkit-box-shadow: 0px 2px 4px #888;
	-moz-box-shadow: 0px 2px 4px #888;
	box-shadow: 0px 2px 4px #ffffff;
	
}

h3:before, h3:after
{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
}

h3:before
{
	width: 30px;
	left: -30px;
	top: 12px;
	border-width: 20px 10px;
	border-style: solid;
	border-color: #999 #999 #999 transparent;
}

h3.simple:before
{
	display: none;
}

h3.flag:before
{
	width: 0px;
	left: auto;
	right: -2px;
	top: 0px;
	border-color: transparent #fff transparent transparent;
}

h3:after
{
	left: 0px;
	top: 100%;
	border-width: 5px 10px;
	border-style: solid;
	border-color: #666 #666 transparent transparent;
}

a:-webkit-any-link {
color:white !Important; text-decoration:none;
}


#heart {
    position: relative;
    width: 100px;
    height: 90px;
}
#heart:before,
#heart:after {
    position: absolute;
    content: "";
    left: 50px;
    top: 0;
    width: 50px;
    height: 80px;
    background: red;
    -moz-border-radius: 50px 50px 0 0;
    border-radius: 50px 50px 0 0;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0 100%;
       -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
         -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
}
#heart:after {
    left: 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 100% 100%;
       -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
         -o-transform-origin: 100% 100%;
            transform-origin :100% 100%;
}
   
   

   
   
   
</style>

<script>

//create a startDatetime for url endpoint
function startdate(int) {
    var d = new Date();
var l = d.getUTCFullYear();

var m = d.getUTCMonth();
    var n = d.getUTCDate();
    var h = d.getHours();
    var min = d.getMinutes();
    var m_check = m.length;
    var h_check = h.length;
    var min_check = min.length;
    
    if (m == 0){
var pm = 1 + m;
}

else {
var pm = m;
}

        
   //check for single digets and add a zero
    if (m_check = 1){
var zm = '0' + pm;
}

else{
zm = m;
}

if (h_check = 1){
var zh = '0' + h;
}

else{
zh = h;
}

if (min_check = 1){
var zmin = '0' + min;
}

else{
zmin = min;
}

var sdt = l+"-"+zm+"-"+n;

var interval = int;
    
 document.getElementById("ropts").innerHTML='<br><br><input type="text" id="url_end" value="?interval='+ interval + '&startDatetime='+ sdt +'+' + zh + ':' + zmin + ':59&dateType=subscribeDate" placeholder="add a ? and query string if needed or use the presets"><input type="button" onclick="issues(\'helptime\')" value="wait, wha?" class="button-warning"><br><br><select onchange="startdate(value)" class="button-secondary"><option value="">Preset time options with subscribeDate</option><option value="1">startDatetime = Now with 1 hour interval</option><option value="24">startDatetime = Now with day interval</option><option value="168">startDatetime = Now with week interval</option></select>'
    
    
};


//change the method by when component selected

function sel_comp(){

var sel_component = document.getElementById("component").value;
var p_comp = "partners";
var m_comp = "mls";
var c_comp = "clients";
var l_comp = "leads";
var d_comp = "First Choose Component";


switch (sel_component) {
  case "partners":
  document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="clients"> clients </option><option value="propertytypes"> propertytypes </option><option value="aggregatedleads"> aggregatedleads </option><option value="aggregatedsearches"> aggregatedsearches </option><option value="aggregatedproperties"> aggregatedproperties </option><option value="aggregatedleadtraffic"> aggregatedleadtraffic </option><option value="aggregatedfeatured"> aggregatedfeatured </option><option value="aggregatedsupplemental"> aggregatedsupplemental </option><option value="aggregatedsoldpending"> aggregatedsoldpending </option><option value="aggregatedlistingstatus"> aggregatedlistingstatus </option><option value="aggregatedagents"> aggregatedagents </option></select>';
document.getElementById("use_p_key").innerHTML = '//required. Use Partner level key for these calls';
document.getElementById("docs").innerHTML = '<a href="http://middleware.idxbroker.com/docs/api/1.1/' + p_comp +'.php" target="_blank"><button class="button-secondary">API Docs: http://middleware.idxbroker.com/docs/api/1.1/' + p_comp +'.php</button></a>';
document.getElementById("anc_key").innerHTML = '';

 break;
  case "mls":
  document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="approvedmls"> approvedmls </option><option value="cities"> cities </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="prices"> prices </option><option value="propertytypes"> propertytypes </option><option value="propertycount"> propertycount </option><option value="age"> age </option><option value="searchfields"> searchfields </option></select>';
  document.getElementById("anc_key").innerHTML = 'Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br>';
document.getElementById("docs").innerHTML = '<a href="http://middleware.idxbroker.com/docs/api/1.1/' + m_comp +'.php" target="_blank"><button class="button-secondary">API Docs: http://middleware.idxbroker.com/docs/api/1.1/' + m_comp +'.php</button></a>';
   break;
  case "clients":
  document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="agents"> agents </option><option value="offices"> offices </option><option value="systemlinks"> systemlinks </option><option value="savedlinks"> savedlinks </option><option value="widgetsrc"> widgetsrc </option><option value="featured"> featured </option><option value="soldpending"> soldpending </option><option value="supplemental"> supplemental </option><option value="historical "> historical </option><option value="cities"> cities </option><option value="citieslistname"> citieslistname </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="wrappercache"> wrappercache </option><option value="accounttype"> accounttype </option></select>';
document.getElementById("docs").innerHTML = '<a href="http://middleware.idxbroker.com/docs/api/1.1/' + c_comp +'.php" target="_blank"><button class="button-secondary">API Docs: http://middleware.idxbroker.com/docs/api/1.1/' + c_comp +'.php</button></a>';
 document.getElementById("anc_key").innerHTML = 'Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br>';
   break;
  case "leads":
  document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="lead"> lead </option><option value="bulklead"> bulklead </option><option value="note"> note </option><option value="search"> search </option><option value="property"> property </option><option value="leadtraffic"> leadtraffic </option></select>';
document.getElementById("docs").innerHTML = '<a href="http://middleware.idxbroker.com/docs/api/1.1/' + l_comp +'.php" target="_blank"><button class="button-secondary">API Docs: http://middleware.idxbroker.com/docs/api/1.1/' + l_comp +'.php</button></a>';
 document.getElementById("anc_key").innerHTML = 'Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br>';
   break;
       case "First Choose Component":
  document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">First Choose Component</option></select>';
   document.getElementById("anc_key").innerHTML = 'Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br>';

     break;
};
};


//additional IDs or query buttons

function options(o){

if (o == "id"){
 document.getElementById("ropts").innerHTML='<br><br><input type="text" id="url_end" value="" placeholder="add a slash and primary request ID, and or secondary request ID"><input type="button" onclick="issues(\'helpIDs\')" value="wait, wha?" class="button-warning">';
}

else {
 document.getElementById("ropts").innerHTML='<br><br><input type="text" id="url_end" value="" placeholder="add a ? and query string if needed or use the presets"><input type="button" onclick="issues(\'helpIDs\')" value="wait, wha?" class="button-warning"><br><br><select onchange="startdate(value)" class="button-secondary"><option value="">Preset time options with subscribeDate</option><option value="1">startDatetime = Now with 1 hour interval</option><option value="24">startDatetime = Now with day interval</option><option value="168">startDatetime = Now with week interval</option></select>';
}

};

//ajax to pass url endpoint, component, method, keys, output type and version
function change(){
//for testing
var test = "sample_get.php?" + "q_component=" + component + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version

var live_sandy = document.getElementById("live_sand").value;
var url_end = document.getElementById("url_end").value;
//cahnge the amps and plus signs so they are passed on the ajax call
var res_amp = url_end.replace(/&/g, "!amp!");
var res_plus = res_amp.replace(/\+/g, "!plus!");
var url_ends = res_plus;
var component = document.getElementById("component").value;
var meth = document.getElementById("meth").value;
var api_key = document.getElementById("api_key").value;
var ancillary = document.getElementById("ancillary").value;
var out = document.getElementById("out").value;
var version = document.getElementById("version").value;

var xmlhttp;
if (test.length==0)
  { 
  document.getElementById("api_test").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("api_test").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","sample_get.php?" + "q_live="+ live_sandy + "&q_component=" + component + "&q_meth=" + meth + "&q_url=" + url_ends + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version, true);
xmlhttp.send();

};


//Common API issues buttons

function issues(i){

var is = i;

switch (is) {
  case "wp":
    alert("Trouble shooting the WordPress plugin begins with making sure the client has the latest version installed.\n\nMatch up any error code the plugin is reporting to the API docs.\nCommon error codes:\n 412(over hourly limit) wait an hour or reset the key in middleware. If you reset the key the client will need to update the key in WP\n\n403(call made without https). This is a SSL hosting issue and not something IDX Broker can do anything to fix. Client should contact the hosting to enable SSL.\n\n If a saved link, widget, etc are not appearing in WP, run the API call and verify the resource is in the return.\n\nElse reproduce issue in your test WP and ticket.");
 break;
case "AE":
    alert("AE themes use the API to bring in featured listings, saved links, and create search widgets.\n\nFirst verify the client has featured listings. All IDX Broker support can do is verify the API is able to bring in these resources with out error.\n\nFurther support will need to go to AE support.\n\nCheck the version setting in middleware. 1.0.4 should be used for AE themes");
 break;
 case "fb":
    alert("The facebook app uses the featured listings API call to bring in featured listings.\n\nFirst verify the client has featured listings.\nCheck the version setting in middleware. If 1.0.4, test the 1.0.4 featured listings call.\n\nIf the listings are in the return, but not in the app create a ticket");
 break;
  case "helpIDs":
    alert('The primary ID is an identifying ID for this call. For example a lead ID\n\nThe secondary ID is an ID that relates to the first ID. For example a note in a leads account.\n\nAdd /primaryID or /primaryID/secondaryID to this input to build the API call\n\nSo to get a specific lead you would select the Leads Component and enter slash and the lead ID here, example: /123\n\nTo get say a note for that lead you would select the Leads Component and enter slash lead ID and slash note ID example: /123/456');
 break;
   case "helptime":
    alert('To add a time filter you can specify the following:\n\nstartDatetime: This is the date you want the API call to start returning data from. This UTC format is year-month-date hour:minute:seconds.\nFor example Neil Armstrong took his first step on the moon on July 21 at 02:56 or in UTC format 1969-07-21 02:56:00\n\ninterval: This the number of hours before the startDateTime to return data\n\ndateType: Associated types are subscribeDate, lastEdited, lastLoginDate, lastPropertyUpdateDate, or lastActivityDate\n\nrf: specify the fields you want to return. If flieds are specified, non specified fields will be ignored.\n\n For more examples use the preset time options to generate a query.');
 break;
 
};

};

</script>
</head>
<body>
<br>
<div id="common_issues" class="inline">Common API troubleshooting: <input type="button" onclick="issues('wp')" value="WordPress Plugin" class="button-secondary"><input type="button" onclick="issues('AE')" value="AE themes" class="button-secondary"><input type="button" onclick="issues('fb')" value="fb app" class="button-secondary"></div>
<div id="docs" class="inline"><button class="button-secondary">
API Docs: <a href="http://middleware.idxbroker.com/docs/api/1.1/index.php" target="_blank">http://middleware.idxbroker.com/docs/api/1.1/index.php</button></a>
</div><div class="inline" style="font-size: 2.5em; padding-left:50px">You <div id="heart" class="inline"></div><div class="inline" style="padding-left:120px;">API</div></div>

<form action="">
<h2>API Endpoint</h2>
<div id="end_point" class="inline">
<div class="styled-select">
<select type="text" id="live_sand" value="">
<option value="0">https://api.idxbroker.com</option>
  <option value="1">http://api.idxsandbox.com</option>
  </select>
  </div><div class="slashes inline">/</div>
 <div class="styled-select"</div>
<select type="text" id="component" value="" onchange="sel_comp()">
<option value="First Choose Component">Choose Component </option>
<option value="leads">Leads</option>
  <option value="clients">Clients</option>
  <option value="mls">MLS</option>
  <option value="partners">Partner</option>
</select></div><div class="slashes inline">/</div>
<div class="styled-select" id="method">
<select type="text" id="meth" value="">
<option value="">First Choose Component</option>
</select></div></div>
<div id="ropts" class="inline"> <input type="button" onclick="options('id')" value="Add Optional Request IDs" class="button-secondary"> or <input type="button" onclick="options('query')" value="Add Optional ?query" class="button-secondary"></div>
<div id="id_query"><input style="display:none;" type="text" id="url_end" value="" placeholder="placeholder"></div>



<br><br>
<h2>Request Headers</h2>
Content-Type: application/x-www-form-urlencoded //required<br><br>
API Key: <input type="text" id="api_key" value="" placeholder=""> <div id="use_p_key" class="inline">//required</div><br><br>
<div id="anc_key">Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br></div>
Output: <select type="text" id="out" value="" class="button-secondary button-xlarge">
<option value="json">json</option>
  <option value="xml">xml</option>
  <option value="">none specified</option>
</select> //optional and overrides middleware settings
<br><br>
API Version: <select type="text" id="version" value="" class="button-secondary button-xlarge"> //be sure the method you are calling is available this version
<option value="1.0.4">1.0.4</option>
  <option value="1.1.1">1.1.1</option>
  <option value="">none specified</option>
</select> //optional and overrides middleware settings
<br>
<br>
<input type="button" onclick="change()" value="Run this API Call" id="gogo" class="button-success button-xlarge">
</form>
<div id="api_test"></div>
<br>
<br>
<hr>
</body>
</html>
