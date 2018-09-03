<?php
//***********************************************************************************
// ALL QS ADMIN FUNCTIONS IS AVAILABLE HERE
//***********************************************************************************   
@session_start();
include("qsAdminConnection.php"); // include("../qs_connection.php");

if (!isset($_SESSION["Sess_ASPAvailable"])) {
   $_SESSION["Sess_ASPAvailable"] = false;
} 

//Test MySQL connection function 
//Return: "CONNECTEDOK" is Success, otherwise return error message 
function qsTestMySQLConnection($sServerName, $sPortNumber,$sUserName, $sPassword, $sDBName){
   $result = "CONNECTEDOK";
   $ConnPortNumber; 
   if (trim($sPortNumber) != ""){
     $ConnPortNumber = $sPortNumber;
   } else {
     $ConnPortNumber = "3306";
   }

   $conn = @mysql_connect($sServerName . ":" . $ConnPortNumber, $sUserName, $sPassword);
   
   if (!$conn){
      $result = mysql_error();
   } else {
      if (trim($sDBName) != ""){
	     if (!@mysql_select_db($sDBName, $conn)) {
		    $result = @mysql_error();
		 }
	  }
   }
   @mysql_close($conn);
   //Return as string 
   return $result;
   
}//end function 

//Build QS Admin Menu List given by parameters 
function getQSAdminMenu($sCanLogin, $sDBType, $sHomepageFilename){
   if ($sCanLogin) {
	   $result  = "<p>";
	   $result .= "&bull;&nbsp;Test your site: <a  href=\"../". $sHomepageFilename ."\" target=\"_blank\" class=\"LinkText\">Launch Home Page</a><br />";
		
		if (strtoupper($sDBType) == "MYSQL"){ 
		   $result .= "&bull;&nbsp;Install Generated MySQL Scripts: <a href=\"javascript:ShowMySQLLaunchScriptAdmin();\" class=\"LinkText\"  >Launch Script Install Page</a><br />";
		}
		
		//print "&bull;&nbsp;PHP Files and Connection: <a href=\"ADOCheck.php\" target=\"_blank\" class=\"LinkText\">Check Database Connection</a><br />";
		$result .= "&bull;&nbsp;Check Server Details: <a href=\"QSCheckWebServer/checkserverphp.php\" target=\"_blank\" class=\"LinkText\">Check PHP Server Details</a>" ;
		 
		if ($_SESSION["Sess_ASPAvailable"]) {
		   $result .= "&nbsp;<a href=\"QSCheckWebServer/checkserverasp.asp\" target=\"_blank\" class=\"LinkText\">Check ASP Server Details</a>";
		} 
		
		$result .= "<br></p>";   
	
	} else {
	   $result = "<br />login failed "; 
       $result .= "<a href='QSSiteAdmin.html'>Show instructions again</a><br />";
	}
	
	return $result;
}


//Refresh MySQL Database Connection 
//Using connection info from connection config file (QSAdminConnection.php) 
function qsRefreshMySQLConnection(){
  global $host;
  global $user;
  global $passwd;
  global $port;
  global $db;
  //return "CONNECTEDOK" if success, otherwise return error message
  return qsTestMySQLConnection($host, $port, $user, $passwd, $db);
}//end function 

//Create HTML DropdownList of MySQL databases 
function LoadMySQLDBListAsHTML($sServerName, $sPortNumber, $sUserName, $sPassword){
   $HTMLResult = "<select name=\"selMySQLDBList\" id=\"selMySQLDBList\">";
   $arrDBName = LoadMySQLDBList($sServerName, $sPortNumber, $sUserName, $sPassword) ;

   foreach($arrDBName AS $dbName){
     if ($dbName != ""){
	    $HTMLResult = $HTMLResult . "<option value=\"" . $dbName . "\">" . $dbName .  "</option>" . "\n";
	 }
   }
   
   $HTMLResult = $HTMLResult . "</select>";
   return $HTMLResult;
}

//List All MySQL databases and return as array 
function LoadMySQLDBList($sServerName, $sPortNumber, $sUserName, $sPassword){
    $arrDBName = array();
	/*
	$SQL = "SELECT SCHEMA_NAME FROM SCHEMATA ORDER BY SCHEMA_NAME";
	if (qsTestMySQLConnection($sServerName, $sPortNumber, $sUserName, $sPassword, "information_schema") == "CONNECTEDOK") {	
	   if (trim($sPortNumber) != ""){
		 $ConnPortNumber = $sPortNumber;
	   } else {
		 $ConnPortNumber = "3306";
	   }
	   
	   $conn = @mysql_connect($sServerName . ":" . $ConnPortNumber, $sUserName, $sPassword);
	   @mysql_select_db("information_schema", $conn);
	   
	   $result = @mysql_query($SQL, $conn);
	   $i = 0;
	   while ($rs = mysql_fetch_array($result)){
          $arrDBName[$i] = $rs[0];
		  $i++;	   
	   }
	} else {
	    $arrDBName[0] = "";
	}
	*/
    if (trim($sPortNumber) != ""){
	  $ConnPortNumber = $sPortNumber;
    } else {
	  $ConnPortNumber = "3306";
    }
	$conn = @mysql_connect($sServerName . ":" . $ConnPortNumber, $sUserName, $sPassword);
	$db_list = @mysql_list_dbs($conn);
	$i=0;
	while ($row = @mysql_fetch_object($db_list)) {
		$arrDBName[$i] = $row->Database;
		$i++;
	} //end while 
	
	@mysql_close($conn);
	//Return result as array
    return $arrDBName;
} //end function


//Database Exist function : return true if exist, otherwise return false 
function qsExistDatabase($sServerName, $sPortNumber, $sUserName, $sPassword, $sDBName){
   $arrDBName = LoadMySQLDBList($sServerName, $sPortNumber, $sUserName, $sPassword);
   $i = 0;
   $isDBExist = false;
   for ($i=0;i<count($arrDBName);$i++){
      if (strtoupper($arrDBName[$i]) == strtoupper($sDBName)){
	    $isDBExist = true;
	    break;
	  }
   }
   return $isDBExist;
} //end function 
 

//Create datebase given by name
function qsCreateDatabase($sDBName){
  $SQLCreate = "CREATE DATABASE `" . $sDBName . "`"; 
  $statusMsg = qsRunSQLScript($SQLCreate);
  if (trim($statusMsg) == ""){
    $statusMsg = "<span class=\"SuccessMessageStyle\"><b>Sucsess: </b> Database <b>'" . $sDBName . "'</b> has been created. </span>";
  } else {
    $statusMsg = "<span class=\"ErrorMessageStyle\"><b>Error: </b> " . $statusMsg . "</span>" ;
  }
  return $statusMsg;
} //end function 

//Create Table by given SQL script filename 
function qsCreateTable($sScriptFile, $sTableName, $sDBName){
  $errorMsg = "";
  $tmpStatusMsg = "";
  $SQLStr = "";
  $arrErrorMsg = array();
  $idx = 0;
  if (file_exists($sScriptFile)) {
    //Read SQL Script from file
	$handle = @fopen($sScriptFile, "r");
    //Loop all lines
	//$statusMsg = fread($handle, filesize($sScriptFile));
    while (!feof($handle)) {
	   $SQLStr = fgets($handle, 4096); // Read a line.
	   if (trim($SQLStr) != "") {
	     $errorMsg = qsRunSQLScript($SQLStr, $sDBName);
	     //Run SQL Script
	     if (trim($errorMsg) != ""){
		    $arrErrorMsg[$idx] = $errorMsg;
			$idx++;
		 }
	   }
	} //end while 
    fclose($handle);
  //Return error if file does not exist
  } else {
    $arrErrorMsg[$idx]= "<b>Cannot run SQL script:</b> File '" . $sScriptFile . "' does not exist.";
  }
  //Prepare status message 
  if (count($arrErrorMsg) > 0){
     $statusMsg = "<span class=\"ErrorMessageStyle\">";
     for ($i=0; $i < count($arrErrorMsg); $i++){
	    if (count($arrErrorMsg) == 1){
		  $statusMsg .=   "<b>Error: </b>" . $arrErrorMsg[$i];
	    } else {
		  $statusMsg .=   "<b>Error: </b>" . $arrErrorMsg[$i] . "&nbsp;&nbsp;<br>";
		}
		 
	 } 
	 $statusMsg .= "</span>";
  } else {
     if (trim($sTableName) != ""){ //Create All Tables
	   $statusMsg = "<span class=\"SuccessMessageStyle\"><b>Success: </b> Tables <b>'" . $sTableName . "</b>' has been created. </span>";
	 } else { 
	   $statusMsg = "<span class=\"SuccessMessageStyle\"><b>Success: </b> All Tables has been created in database <b>'" . $sDBName . "'</b>. </span>";
	 }
  }
  
  return $statusMsg ;    
} //end function  

//Run SQL script given by SQL statement
//Retunr blank if success, otherwise return error message  
function qsRunSQLScript($sSQLScript, $sDBName = ""){
  $statusMsg = "";
  global $host;
  global $user;
  global $passwd;
  $qsConn = @mysql_connect($host,$user,$passwd);
  if (!$qsConn){
    $statusMsg = mysql_error(); 
  } else { 
    if ($sDBName != ""){
       @mysql_select_db($sDBName, $qsConn);
    }
    if (!@mysql_query($sSQLScript, $qsConn)) {
	  $statusMsg = @mysql_error();
    }
	@mysql_close($qsConn);
  } //end if

  return $statusMsg; 
} //end fucntion 

//List files by directories fucntion    
function qsListFiles($dir){ 
  $arrFiles = array();
  $i = 0;
  if(is_dir($dir)){
    if($handle = opendir($dir)){
      while(($file = readdir($handle)) !== false){
        if($file != "." && $file != ".." && $file != "Thumbs.db"/*pesky windows, images..*/){
		  $arrFiles[$i] = $file;
		  $i++;
        }
      }
      closedir($handle);
    }
  }
  return $arrFiles;
} //end function 

//List directories function 
function qsListDirectories($dir){
  $arrDirectories = array();
  $i = 0;
  if(is_dir($dir)){
    if($handle = opendir($dir)){
      while(($file = readdir($handle)) !== false){
        if($file != "." && $file != ".." && $file != "Thumbs.db"/*pesky windows, images..*/){
		   if (!(substr_count($file, ".") > 0)) {
		      $arrDirectories[$i] = $file;
		      $i++;
		   }
        }
      }
      closedir($handle);
    }
  }
  return $arrDirectories;
} //end fucntion 


function qsrequest($paramval){
    if (isset($_GET[$paramval])) {
        $retval = $_GET[$paramval];
    }elseif (isset($_POST[$paramval])) {
        $retval = $_POST[$paramval];
    }else{
      $retval = "";
    }
    return $retval;
}
?>