<?php
    /*@session_start();
	//Check Login Security 
	if (!isset($_SESSION["QSAdminLogin"])){
	  header("Location:QSSiteAdmin.html");
	  exit;
	}*/
?>
<html>
<head>
<title>PHP Information</title>
<style type="text/css">
body {	font-family:verdana; font-size:12px; background-color:#FBFDFF; }
table { padding:0px; border:0px; margin:0px; font-family:verdana; font-size:12px; color:#000000; text-align:left; }
.main{	border: 0px solid #abb6dc; margin:0px; background-color:#ffffff; }
.header, .header td {
	font-weight:bold;
	padding:2px;
	background-color:#f7b932;
	color:white;
}
.header a:link,.header a:active,.header a:visited,.header a:hover { color : #FFFFFF; }
.title  {
	padding:4px;
	background-color:#FBDA95;
	color:#000000;
	font-weight: normal;
}					
.cell { background-color:#F1F4F7; padding:4px; }

a:link,a:active,a:visited { color : #5c72ba; }
a:hover { text-decoration: underline; color : #000000; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgColor="#ffffff" text="#000000" link="#0000ff" vLink="#0000ff" aLink="#0000ff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
		<table  class="main" width="100%" border="0" cellspacing="2" cellpadding="2" align="center">
		  <tr>
			<td class="header" align="left" colspan="2">&nbsp;PHPInfo&nbsp;</td>
		  </tr>
		  <tr>
			<td width="150" nowrap class="title">Date</td>
			<td class="cell"><?php print  date("F d Y"); ?></td>
		  </tr>
		  <tr>
			<td width="150" nowrap class="title">Script&nbsp;URL</td>
			<td class="cell">
			http://<?php print  $_SERVER['SERVER_NAME']. $_SERVER["SCRIPT_NAME"] ; ?>
			</td>
		  </tr>
		  <tr>
			<td width="150" nowrap class="title">Physical&nbsp;Path</td>
			<td class="cell"><?php print  $_SERVER["SCRIPT_FILENAME"] ;?></td>
		  </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
		<table  class="main" width="100%" border="0" cellspacing="2" cellpadding="2" align="center">
		  <tr>
			<td class="header" align="left" colspan="2">&nbsp;&nbsp;Server&nbsp;Information&nbsp;</td>
		  </tr>
		  <tr>
			<td width="150" nowrap class="title">Server&nbsp;Name</td>
			<td class="cell"><?php print  $_SERVER['SERVER_NAME'] ; ?></td>
		  </tr>
		  <tr>
			<td width="150" nowrap class="title">Server&nbsp;IP&nbsp;Address</td>
			<td class="cell"><?php print  $_SERVER['SERVER_ADDR'] ;?></td>
		  </tr>
		  <tr>
		    <td width="150" nowrap class="title">Server&nbsp;Port</td>
		    <td class="cell"><?php print  $_SERVER['SERVER_PORT'] ;?></td>
	      </tr>
		  <tr>
		    <td width="150" nowrap class="title">Server&nbsp;Software</td>
		    <td class="cell"><?php print  $_SERVER["SERVER_SOFTWARE"] ;?></td>
	      </tr>
		  <tr>
		    <td width="150" nowrap class="title">Operating&nbsp;System</td>
		    <td class="cell"><?php print  $_SERVER["OS"] ;?></td>
	      </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td align="center"><a href="phpinfo.php">More</a></td>
  </tr>
</table>
</body>
</html>
