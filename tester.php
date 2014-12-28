<html>
<head>
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <script>

  function change(){

    var test = "sample_get.php?" + "q_component=" + component + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version


    var url_end = document.getElementById("url_end").value;
    var component = document.getElementById("component").value;
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
  xmlhttp.open("GET","sample_get.php?" + "q_component=" + component + "&q_url=" + url_end + "&q_api_key=" + api_key + "&q_ancillary=" + ancillary + "&q_out=" + out + "&q_version=" + version, true);
  xmlhttp.send();

};

</script>
</head>
<body>

  <form action="">
    <h2>URL Endpoint</h2>
    https://api.idxbroker.com/
    <select type="text" id="component" value="">
      <option value="leads">Leads</option>
      <option value="client">Client</option>
      <option value="mls">MLS</option>
      <option value="partner">Partner</option>
    </select>/<input type="text" id="url_end" value="">
    <br><br>
    <h2>Request Headers</h2>
    API Key: <input type="text" id="api_key" value=""> //required<br>
    Ancillary Key: <input type="text" id="ancillary" value=""><br>
    Output: <select type="text" id="out" value="">
      <option value="json">json</option>
      <option value="xml">xml</option>
      <option value="">none specified</option>
    </select>
    <br>
    API Version: <select type="text" id="version" value="">
      <option value="1.0.4">1.0.4</option>
      <option value="1.1.1">1.1.1</option>
      <option value="">none specified</option>
    </select>

    <br>
    <input type="button" onclick="change()" value="Test">
  </form>
  <div id="api_test"></div>

</body>
</html>
