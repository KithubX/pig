<?php
   /* @session_start();
	//Check Login Security 
	if (!isset($_SESSION["QSAdminLogin"])){
	  header("Location:../QSSiteAdmin.html");
	  exit;
	}*/
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dbQwikSite</title>
<link rel="stylesheet" type="text/css" href="css.css">

</head>

<body>
<table width="721" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td align="center"><img src="Header_Webchecker.jpg" alt=" " width="791" height="98"></td>
  </tr>
  <tr>
    <td align="center">You can use dbQwik Web Server Checker to check whether your server can run script or not.</td>
  </tr><tr align="center">
    <td>
	<iframe src="viewphpinfo.php" width="100%" height="400" ></iframe></td>
</table>
</body>
</html>
