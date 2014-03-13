<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>CLiCs</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="Cross-Linguistic Colexification">
<meta name="keywords" content="linguistics, historical linguistics,polysemy">
<meta NAME="resource-type" CONTENT="linguistics,historical linguistics">
<meta name="distribution" CONTENT="global">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link rel="icon" href="pics/favicon.png" type="image/png">  
<link rel="stylesheet" href="css/clips.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>   
<script src="js/concepts.js"></script>

</head>
<body id="home">


<div id="wrapper">
  <div id="header">
  <a href="http://clics.lingpy.org"><img id="logo" src="pics/favicon.png" width="60px" alt="logo" title="CLiCs" /></a>
  <div id="mainnav">
    <ul id="nav">
    <li>
      <a href="main.php">Home</a>
    </li>
    <li>
      <a href="about.php">About</a>
      <ul id="about">
	<li><a href="about.php">Introduction</a></li>
	<!--<li><a href="sources.php">Sources</a></li>-->
	<li><a href="faq.php">FAQ</a></li>
	<!--<li><a href="contact.php">Contact</a></li>-->
      </ul>
    </li>
    <li>
      <a href="query.php">Query</a>
      <ul id="query">
        <li><a href="direct.php">Direct Links</a></li>
        <li><a href="all.php">All Links</a></li>
      </ul>
    </li>
    <li>
      <a href="browse.php">Browse</a>
    </li>
    <li>
	<a href="download.php">Download</a>
    </li>
  </ul>
 </div><!--end mainnav-->
 </div><!-- end header -->  
 <div id="subnav">
    <h2> <a href="browse.php">Browse</a></h2>
   <ul>
    <!--<li><a href="news.php#news1">News (1)</a></li>
<li><a href="news.php#news2">News (2)</a></li>
    <li><a href="news.php#news3">News (3)</a></li>-->
  </ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR browse -->
<h3>Browse the Colexification Networks</h3>
<br>
<br>
<?php 
  if(isset($_POST['gloss']) or isset($_GET['key']))
  {
?>
<style>
#visualization {
  width: 100%; //800px;
  position: relative;
  height: 550px;
  background-color: white;
  //border: 3px dotted gray;
  overflow-right: hidden;
  }

#info {
  background-color: white;
	position: absolute;
	//font-family: Arial,Verdana,Helvetica,sans-serif;
	font-size: 10pt;
	left: 0px;
	top: 10px;
  width: 325px;
  height: 540px;
  overflow: auto;
  display: table-cell;
  //vertical-align: top;
}
#info.hidden {
	display: none;
}
#vis {
	position: absolute;
	left: 200px;
  top: 0px;
  //display: table-cell;
  //vertical-align: top;
}
label {
	//font-size: 10pt;
  //margin-left: 12px;
  //border: 1px dotted gray;
}


tr:nth-child(even) {background: #DDD}
tr:nth-child(odd) {background: #FFF}
table.infotable { counter-reset: line-number; border: 1px dotted gray;}
table.infotable td:first-child:before {
content: counter(line-number) ".";
counter-increment: line-number;
padding-right: 0.3em; }
.infotable td {
	padding-right: 5px;
}
.hidden {
	display: none;
}
#WorldColorScale {
	position: absolute;
	top: 10px;
	right: 10px;
}
</style>
<?php
  }
?>
<?php
  include('query/query_community.php');
  include('query/communities.php');
?>
<!-- Pieces of Thomas' code -->
<?php
  if(isset($_POST['gloss']) or isset($_GET['key']))
  {
?>
<script type="text/javascript" src="js/d3/d3.v2.js"></script>
<br>
<div style="border: 2px solid #2f95e3;">
<table id="control" class="query_table">
  <tr>
    <th>
      <label>Line opacity: </label>
    </th>
    <td>
      <input id="opacity" type='range' min="0" max="100" value="100">  
    </td>
    <th>
      <label>Line weights: </label>
    <th>
    </td>
	    <input id="weight" type='range' min="0" max="10" value="0">
    </td>
    <th>
      <label>Coloring: </label>
    </th>
    <td>
      <select class="submit_button" id="coloring">
        <option>Family</option>
        <option>Geolocation</option>
      </select>
    </td>
  </tr>
</table>
<img id="WorldColorScale" class='hidden' src="pics/ColorScaleWorld.png" width="300">

<br>
<div id="visualization">
      <div id="vis"></div>
      <div id="info" class="hidden"></div>

<script src="js/visualize.js" type="text/javascript"></script>

<!--<div id="test" onclick="init(filename);">TEST</div>-->

</div>
</div>
<br>

<?php
  }
?>


 </div>
 </div>
 <div id="footer">
<table><tr>

<td><div class="footer_left">
<a href="http://www.hhu.de/"><img width="120px" src="http://www.hhu.de/home/fileadmin/images/uni_duesseldorf_logo.gif" alt="HHUD" /></a>
 </div></td>

 <td><div class="footer_left">
<a href="http://www.dfg.de/"><img width="120px" src="http://www.dfg.de/zentralablage/bilder/service/bildarchiv/dfg_logo_blau.jpg" alt="DFG" /></a>
 </div></td>
<td><div class="footer_center">
 <p>Last updated on Mar. 13, 2014, 13:54 CET</p>
 <p>
This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p><br>
<p>
   <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US"><img
		alt="Creative Commons License" style="border-width:0;width:80px;"
		src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a> </p>
</div></td>

<td><div class="footer_right">
<a href="http://erc.europa.eu/"><img width="80px" src="http://quanthistling.info/theme/qhl/images/logo_erc.png" alt="ERC" /></a>
</div></td>
<td><div class="footer_right">
<a href="http://www.hum.leiden.edu/lucl"><img width="80px" src="http://www.hum2.leidenuniv.nl/pdf/lucl/practical_matters/lucl-logo-small.jpg" alt="LUCL" /></a>
</div></td>
<td><div class="footer_right">
<a href="http://www.uni-marburg.de/"><img width="120px" src="http://www.uni-marburg.de/bilder/logo_uni1.gif" alt="PUD" /></a>
</div></td></tr></table>
 </div><!-- end footer -->

</div><!-- end wrapper-->
</body>
</html>
