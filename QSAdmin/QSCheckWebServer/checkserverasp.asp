<%
    'Response.Buffer = True
    'Check Login Security  
	'if session("QSAdminLogin") <> "true" then 
	'   Response.Redirect("../QSSiteAdmin.html")
	'   Response.End()
    'end if 
%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dbQwikSite</title>
<link rel="stylesheet" type="text/css" href="css.css">

</head>

<body>
<table width="721" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" align="center"><img src="Header_Webchecker.jpg" alt=" " width="791" height="98"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">You can use dbQwik Web Server Checker to check whether your server can run script or not.<br>
</td>
  </tr>
  
 <!--
  <tr align="center">
    <td align="right"><form name="form1" method="get" action="checkserverasp.html"> <input type="submit" name="Submit" value="ASP"></form></td>
    <td align="left"><form name="form2" method="get" action="checkserverphp.html"> <input type="submit" name="Submit" value="PHP"></form>  </td>
 -->
 
 
  <tr align="center">
    <td colspan="2">
	<iframe src="viewaspinfo.asp" width="100%" height="400"></iframe>
	</td>
  </tr>
</table>
</body>
</html>
