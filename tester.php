<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<style>
body {width:100%;}

#url_end, #api_key, #ancillary{
height: 40px;
width: 60%;
}
#gogo {
height: 40px;
width: 60%;
font-size: 1.5em;
}

h3 {
font-size: 1.5em;
}

.styled-select {
   width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg) no-repeat right #ddd;
   border: 1px solid #ccc;
   display:inline;
   }
   .styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
   }
   
</style>

<script>
//create a startDatetime for url endpoint
function startdate() {
    var d = new Date();
var l = d.getUTCFullYear();
// plus one because arrays start a zero
var m = 1 + d.getUTCMonth();
    var n = d.getUTCDate();
var sdt = l+"-"+m+"-"+n;
    document.getElementById("demo").innerHTML = "startDatetime="+sdt+"+23:59:59";
};

//change the method by the component selected

function sel_meth(){

var sel_component = document.getElementById("component").value;
var p_comp = "partners";
var m_comp = "mls";
var c_comp = "clients";
var l_comp = "leads";
var d_comp = "First Choose Component";


if(sel_component == p_comp){
document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="clients"> clients </option><option value="propertytypes"> propertytypes </option><option value="aggregatedleads"> aggregatedleads </option><option value="aggregatedsearches"> aggregatedsearches </option><option value="aggregatedproperties"> aggregatedproperties </option><option value="aggregatedleadtraffic"> aggregatedleadtraffic </option><option value="aggregatedfeatured"> aggregatedfeatured </option><option value="aggregatedsupplemental"> aggregatedsupplemental </option><option value="aggregatedsoldpending"> aggregatedsoldpending </option><option value="aggregatedlistingstatus"> aggregatedlistingstatus </option><option value="aggregatedagents"> aggregatedagents </option></select>';
};
if(sel_component == m_comp){
document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="approvedmls"> approvedmls </option><option value="cities"> cities </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="prices"> prices </option><option value="propertytypes"> propertytypes </option><option value="propertycount"> propertycount </option><option value="age"> age </option><option value="searchfields"> searchfields </option></select>';
};
if(sel_component == c_comp){
document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="agents"> agents </option><option value="offices"> offices </option><option value="systemlinks"> systemlinks </option><option value="savedlinks"> savedlinks </option><option value="widgetsrc"> widgetsrc </option><option value="properties "> properties </option><option value="cities "> cities </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="wrappercache"> wrappercache </option><option value="accounttype"> accounttype </option>';
};
if(sel_component == l_comp){
document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="lead"> lead </option><option value="bulklead"> bulklead </option><option value="note"> note </option><option value="search"> search </option><option value="property"> property </option><option value="leadtraffic"> leadtraffic </option></select>';
};

if(sel_component == d_comp){
document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">First Choose Component</option></select>';
};

};



//ajax to pass url endpoint, component, method, keys, output type and version
function change(){
var test = "sample_get.php?" + "q_component=" + component + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version

var url_end = document.getElementById("url_end").value;
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
xmlhttp.open("GET","sample_get.php?" + "q_component=" + component + "&q_meth=" + meth + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version, true);
xmlhttp.send();

};

</script>
</head>
<body>
<a href="http://middleware.idxbroker.com/docs/api/1.1/index.php" target="_blank">http://middleware.idxbroker.com/docs/api/1.1/index.php</a>
<form action="">
<h2>URL Endpoint</h2>
<h3>https://api.idxbroker.com/
<div class="styled-select">
<select type="text" id="component" value="" onchange="sel_meth()">
<option value="First Choose Component">Choose Component </option>
<option value="leads">Leads</option>
  <option value="clients">Clients</option>
  <option value="mls">MLS</option>
  <option value="partners">Partner</option>
</select></div>/
<div class="styled-select" id="method">
<select type="text" id="meth" value="">
<option value="">First Choose Component</option>
</select></div>
<input type="text" id="url_end" value="" placeholder="add /primary, secondary request ID or ?optional query string"></h3>



<br><br>
<h2>Request Headers</h2>
Content-Type: application/x-www-form-urlencoded //required<br><br>
API Key: <input type="text" id="api_key" value="" placeholder=""> //required<br><br>
Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key"> // optional<br><br>
Output: <select type="text" id="out" value="">
<option value="json">json</option>
  <option value="xml">xml</option>
  <option value="">none specified</option>
</select> //optional and overrides middleware settings
<br><br>
API Version: <select type="text" id="version" value=""> //be sure the method you are calling is available this version
<option value="1.0.4">1.0.4</option>
  <option value="1.1.1">1.1.1</option>
  <option value="">none specified</option>
</select> //optional and overrides middleware settings
<br>
<br>
<input type="button" onclick="change()" value="Run this API Call" id="gogo">
</form>
<div id="api_test"></div>

</body>
</html>
