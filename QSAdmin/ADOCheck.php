<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Database connection check</title>
<style type="text/css">
<!--
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	color: #666666;
}
.style1 {color: #993333}

.ConnecedOK{
   color:#009900;
   font-weight:bold;
}


-->
</style>
</head>

<body>
<script language="javascript" >

function ShowODBCConnectionPanel(){
  document.getElementById("rowServerName").style.display = "none";
  document.getElementById("rowDatabaseName").style.display = "none";
  document.getElementById("rowPortNumber").style.display = "none";
  document.getElementById("rowDataSource").style.display = "block";
  
}

function ShowMySQLConnectionPanel(){
  document.getElementById("rowServerName").style.display = "block";
  document.getElementById("rowDatabaseName").style.display = "block";
  document.getElementById("rowPortNumber").style.display = "block";
  document.getElementById("rowDataSource").style.display = "none";
}

</script>

<p class="style1"><strong>Quick and Dirty PHP  connect database checker.</strong></p>
<p class="style1">Instructions:</p>
<p class="style1">Fiddle with the folder location and database name and hopefully you will get a connection string that works. Once you get that copy it into your deployment ADO connection string or into your qs_connections.asp </p>
<hr />

<?php
    @session_start();
	//Check Login Security 
	if (!isset($_SESSION["QSAdminLogin"])){
	  header("Location:QSSiteAdmin.html");
	  exit;
	}
  
	$strCheckedFirst = "";
    if ($_POST["rdoDBType"] == "") { $strCheckedFirst = " checked "; } 
?>
<form action="" method="post" name="form1" id="form1" enctype="application/x-www-form-urlencoded">
  <label for="select"></label>
  <table width="59%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="30%" height="28">Database Type</td>
      <td height="28"><label></label>
        <label>
        <input name="rdoDBType" type="radio" onclick="ShowODBCConnectionPanel();" value="ODBC"  <?php if ($_POST["rdoDBType"] == "ODBC") { print " checked "; } else { print $strCheckedFirst; } ?> />
       ODBC
        </label>
		
		 &nbsp;
		<label>
			 <input name="rdoDBType" type="radio" onclick="ShowMySQLConnectionPanel();" value="MySQL" <?php if ($_POST["rdoDBType"] == "MySQL") { print " checked "; } ?> /> 
			 MySQL      </label></td>
    </tr>
	
	
	<tr>
	   <td colspan="2" align="left">
	      <div id="rowServerName">
			  <table border="0" cellpadding="0" cellspacing="0" width="100%">
			  	 <tr>
				  <td width="30%">Server</td>
				  <td height="28">
				  <input name="DBServerName" type="text" id="dbPath5" size="50" maxlength="255"
						value="<?php if ($_POST["DBServerName"] != "") { 
									 print $_POST["DBServerName"];
								  } else {
									 print "localhost";				
								  }
							  ?>" 
					  /></td>
				</tr>
			  
			  </table>
	     </div>
	   </td>
	</tr>
	
	<tr>
	   <td colspan="2" align="left">
	      <div id="rowDataSource">
			  <table border="0" cellpadding="0" cellspacing="0" width="100%">
			  		<tr>
					  <td width="30%">Datasource </td>
					  <td height="28"><input name="DBDataSourceName" type="text" id="DBDatabaseName" size="40"
								value="<?php if ($_POST["DBDataSourceName"] != "") { 
											 print $_POST["DBDataSourceName"];
										  } else {
											 print "";				
										  }
									  ?>" /></td>
					</tr>
			  
			  </table>
	     </div>
	   </td>
	</tr>
	
	<tr>
	   <td colspan="2" align="left">
	      <div id="rowPortNumber">
			  <table border="0" cellpadding="0" cellspacing="0" width="100%">
			  		<tr>
					  <td width="30%">Port </td>
					  <td height="28"><input name="DBPortNumber" type="text" id="DBPortNumber" size="10"
								value="<?php if ($_POST["DBPortNumber"] != "") { 
											 print $_POST["DBPortNumber"];
										  } else {
											 print "3306";				
										  }
									  ?>" /></td>
					</tr>
			  
			  </table>
	     </div>
	   </td>
	</tr>
	
	
    <tr>
      <td width="30%">Username</td>
      <td height="28"><input name="DBUserName" type="text" id="dbPath3" 
	           value="<?php if ($_POST["DBUserName"] != "") { 
				             print $_POST["DBUserName"];
				          } else {
						     print "";				
						  }
					  ?>" /></td>
    </tr>
    <tr>
      <td width="30%">Password</td>
      <td height="28"><input name="DBPassword" type="password" id="dbPath4" 
	          value="<?php if ($_POST["DBPassword"] != "") { 
				             print $_POST["DBPassword"];
				          } else {
						     print "";				
						  }
					  ?>"/></td>
    </tr>
	
    <tr>
	   <td colspan="2" align="left">
	      <div id="rowDatabaseName">
			  <table border="0" cellpadding="0" cellspacing="0" width="100%">
			  		<tr>
					  <td width="30%" >Database</td>
					  <td height="28"><input name="DBDatabaseName" type="text" id="dbPath2" size="40"
							value="<?php if ($_POST["DBDatabaseName"] != "") { 
										 print $_POST["DBDatabaseName"];
									  } else {
										 print "";				
									  }
								  ?>" /></td>
					</tr>
			 
			  </table>
	     </div>
	   </td>
	</tr>	
	
	
	
    <tr>
      <td height="33">&nbsp;</td>
      <td height="30"><input type="submit" name="test" value="Test Connection" id="Submit" /> <input type="reset" name="testreset" value="Clear" /></td>
    </tr>
  </table>
</form>
<hr />

<?php
  if ($_POST["rdoDBType"] != "") {	     
      $ServerName = $_POST["DBServerName"];
	  $DatabaseName = $_POST["DBDatabaseName"];
	  $DataSourceName = $_POST["DBDataSourceName"];
	  $Username = $_POST["DBUserName"];
	  $Pwd = $_POST["DBPassword"];
	  $PortNumber = $_POST["PortNumber"];
	  
	  if ($_POST["rdoDBType"] == "ODBC") {  //ODBC
	     if (!@odbc_connect($DataSourceName, $Username, $Pwd)){
		    print "<strong>Error:</strong> Connecting to your database.<br>";
            print "<strong>Database Reports:</strong> " . odbc_errormsg() . "<br>";
		 } else{
		    print "<span class=\"ConnecedOK\">Connected to database OK </span>";
		 }
	  } else {   //MySQL
	     if ($PortNumber != ""){
	       $ServerName = $ServerName . ":" . $PortNumber;
	     } 
	  
	     if ($DatabaseName != "") {
		    $conn = @mysql_connect($ServerName, $Username, $Pwd);
			if (!$conn){
			   print "<strong>Error:</strong> Connecting to your sever.<br>";
               print "<strong>Server Reports:</strong> " .  mysql_error() . "<br>";
			} else {
			   if (!@mysql_select_db($DatabaseName, $conn)){
			     print "<strong>Error:</strong> Connecting to your database.<br>";
                 print "<strong>Database Reports:</strong> " .  mysql_error() . "<br>";
			   } else {
			     print "<span class=\"ConnecedOK\">Connected to database OK </span>";
			   }
			}
			
		 } else {
		    
		    if (!@mysql_connect($ServerName, $Username, $Pwd)){
			   print "<strong>Error:</strong> Connecting to your server.<br>";
               print "<strong>Server Reports:</strong> " .  mysql_error() . "<br>";
			} else {
			   print "<span class=\"ConnecedOK\">Connected to Server OK </span>";
			}
		 }
	  } //end check DBType
  } //end 
?>


<?php
if ($_POST["rdoDBType"] == "MySQL") { 
   print "<script language=\"javascript\"> ShowMySQLConnectionPanel();  </script>" ;
} else { 
   print "<script language=\"javascript\"> ShowODBCConnectionPanel(); </script>" ;
}
?>


</body>

</html>
