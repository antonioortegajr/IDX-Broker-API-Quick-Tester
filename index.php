<html>
<head>
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>&#9829; API</title>
    <!-- this code is presented as is. If you have improvements source is available https://github.com/antonioortegajr/IDX-Broker-API-Quick-Tester -->

    <style>
    body {
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
      color: #326de6 !Important; text-decoration:none;
    }
    .red{
      color:red;
    }
    p {
  color: #7d7d7d;
  font-family: "Muli",sans-serif;
  font-size: 16px;

}

h1 {
  font-size: 40px;
  font-family: "Montserrat",sans-serif;
  font-weight: 700;
  text-align: center;
  line-height: normal;
  letter-spacing: 0em;
  padding-bottom: 12px;
color: #002D4A;
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
        document.getElementById("anc_key").innerHTML = '<input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour" style="display:none;">';
        break;
        case "mls":
        document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="approvedmls"> approvedmls </option><option value="cities"> cities </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="prices"> prices </option><option value="propertytypes"> propertytypes </option><option value="propertycount"> propertycount </option><option value="age"> age </option><option value="searchfields"> searchfields </option><option value="searchfieldvalues"> searchfieldvalues </option></select>';
        document.getElementById("anc_key").innerHTML = 'Ancillary Key: <input type="text" id="ancillary" value="" placeholder="This is the partner level key and is used to raise the rate limit to 750 calls per hour"> // optional<br><br>';
        document.getElementById("docs").innerHTML = '<a href="http://middleware.idxbroker.com/docs/api/1.1/' + m_comp +'.php" target="_blank"><button class="button-secondary">API Docs: http://middleware.idxbroker.com/docs/api/1.1/' + m_comp +'.php</button></a>';
        break;
        case "clients":
        document.getElementById("method").innerHTML = '<select type="text" id="meth" value=""><option value="">Choose Method</option><option value="listcomponents"> listcomponents </option><option value="listmethods"> listmethods </option><option value="agents"> agents </option><option value="offices"> offices </option><option value="systemlinks"> systemlinks </option><option value="savedlinks"> savedlinks </option><option value="widgetsrc"> widgetsrc </option><option value="featured"> featured </option><option value="soldpending"> soldpending </option><option value="supplemental"> supplemental </option><option value="historical "> historical </option><option value="cities"> cities </option><option value="citieslistname"> citieslistname </option><option value="counties"> counties </option><option value="zipcodes"> zipcodes </option><option value="accounttype"> accounttype </option></select>';
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

      var test = "sample_get.php?" + "q_component=" + component + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version;

      var live_sandy = document.getElementById("live_sand").value;
      var url_end = document.getElementById("url_end").value;
      //change the amps and plus signs so they are passed on the ajax call
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


      document.getElementById("debug").innerHTML= "sample_get.php?" + "q_live="+ live_sandy + "&q_component=" + component + "&q_meth=" + meth + "&q_url=" + url_ends + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version;


    };

  </script>
</head>
<body>
<a href="https://github.com/antonioortegajr/IDX-Broker-API-Quick-Tester"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
<div>
<h1>Test Calls to the IDX Broker API</h1><p>This is a simple tester of API keys and calls to the IDX Broker API system.
<br><br>
All GET calls. Returns by default are json. This tester is meant for validating the functionality of an API key or method.
<br><br>
This only tests GET calls as shown in the <a href="http://middleware.idxbroker.com/docs/api/methods/index.html">current docs</a>. Post questions on the <a href="http://developers.idxbroker.com/forums/forum/api/">IDX Broker Developer forums</a>. Enjoy and happy testing!
</p><!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/antonioortegajr" data-style="mega" data-count-href="/antonioortegajr/followers" data-count-api="/users/antonioortegajr#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @antonioortegajr on GitHub">Follow @antonioortegajr</a></div>
  <form action="">
    <h2>API Endpoint</h2>
    <div id="end_point" class="inline">
      <div class="styled-select">
        <select type="text" id="live_sand" value="">
          <option value="0">https://api.idxbroker.com</option>
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
            <option value="1.2.0">1.2.0</option>
            <option value="1.2.1">1.2.1</option>
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
        <div id="debug"></div>
      </body>
      </html>
