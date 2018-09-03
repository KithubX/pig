<?php
   /* @session_start();
	//Check Login Security 
	if (!isset($_SESSION["QSAdminLogin"])){
	  header("Location:../QSSiteAdmin.html");
	  exit;
	}*/
?>
<head>
<title>ASP Information</title>
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
<center>	
<?php print phpinfo() ;?>
</center></body></html>