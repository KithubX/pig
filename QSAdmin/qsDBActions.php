<?php
 //*****************************
 //qsDBAction.php  : AJAX service
 //***************************** 
 include("AdminSec.php");
 include("qsDBUtilities.php");
 @session_start();

 //=========== Check Login Security ===============
 /*if (!isset($_SESSION["QSAdminLogin"])){
   print "NOTLOGIN";
   //header ("Location: QSSiteAdmin.html");
   exit;
 }*/
 
 $reqAction = qsrequest("Action"); 

 //======== Create database by given name ========= 
 if (strtoupper($reqAction) == "CREATEDATABASE") {
   $reqDBName = qsrequest("DBName");
   print qsCreateDatabase($reqDBName);  
 }
 
 //======== Create Table by given SQL script file ========
 if (strtoupper($reqAction) == "CREATETABLE") {
   $reqScriptFileName = qsrequest("ScriptFile");
   $reqTableName = qsrequest("TableName");
   $reqDBName = qsrequest("DBName");
   //print $reqTableName;
   print qsCreateTable($reqScriptFileName, $reqTableName, $reqDBName);
 } 
 
 //======== Create All Tables ==========
 if (strtoupper($reqAction) == "CREATEALLTABLES") {
    $reqScriptFileName = qsrequest("ScriptFile");
	$reqDBName = qsrequest("DBName");
	print qsCreateTable($reqScriptFileName, "", $reqDBName);
 }
 
 
 //======== Show MySQL Admin ==========
 if (strtoupper($reqAction) == "SHOWMYSQLADMIN") {
    include("qsMySQLDBAdmin.php");
 }
 
 
 //======== Test MySQL Connection =========
 if (strtoupper($reqAction) == "TESTMYSQLCONNECTION") {
    $reqServer = qsrequest("ServerName");
	$reqPortNumber = qsrequest("PortNumber");
	$reqUser = qsrequest("UserName");
	$reqPass = qsrequest("Password");
	$reqDBName = qsrequest("DBName");
	
	print qsTestMySQLConnection($reqServer, $reqPortNumber, $reqUser, $reqPass, ""); 
 }
 
  //======== Test MySQL Database Connection =========
  if (strtoupper($reqAction) == "TESTMYSQLDBCONNECTION") {
      $reqServerName = qsrequest("ServerName");
	  $reqUserName = qsrequest("UserName");
	  $reqPassword = qsrequest("Password");
	  $reqPortNumber = qsrequest("PortNumber");
	  $reqDBName = qsrequest("DBName");
	  
	  print qsTestMySQLConnection($reqServerName, $reqPortNumber, $reqUserName, $reqPassword , $reqDBName); 
   } 
   
   
   //========== Load MySQL Database list in Select HTML tag ================
   if (strtoupper($reqAction) == "LOADMYSQLDATABASELIST"){ 
      $reqServerName = qsrequest("ServerName");
	  $reqUserName = qsrequest("UserName");
	  $reqPassword = qsrequest("Password");
	  $reqPortNumber = qsrequest("PortNumber");
	 
	  print LoadMySQLDBListAsHTML($reqServerName, $reqPortNumber, $reqUserName, $reqPassword);
   }
 
   //========= Refresh MySQL Connection ==================
   //Return a status as HTML 
   if (strtoupper($reqAction) == "REFRESHMYSQLCONNECTION"){ 
        $msgStr = qsRefreshMySQLConnection();		
		if ($msgStr == "CONNECTEDOK"){ 
		   print "<span class=\"cssConnectedOK\">Connected to MySQL Database is OK. </span>" . "<br><input name=\"btn12\" class=\"BtnCreateStyle\" type=\"button\" id=\"btn12\" value=\"Test Connection!\" onclick=\"ShowMySQLTestConnectionPanel();\" />";
		}else {
		   print "<span class=\"cssConnectedNotOK\"> <b>Failed to connect to your database.</b><br><b>Description: </b>" . $msgStr . "</span>" . "<br><input name=\"btn12\" class=\"BtnCreateDBStyle\" type=\"button\" id=\"btn12\" value=\"Test Connection Again!\" onclick=\"ShowMySQLTestConnectionPanel();\" />";
		}	 
   } 
   
   
   //=========== BACK TO MENU =============
   if (strtoupper($reqAction) == "BACKTOMENU"){ 
      $reqDBType = qsrequest("DBType"); 
	  print getQSAdminMenu(true, $reqDBType, $homepageFileName);	  
   } 
   
   
    //========= UPDATE ASP PHP SESSION AVAILABLE ======== 
   if (strtoupper($reqAction) == "UPDATEASPPHPAVAILABLESESSION") {
       $reqASP = qsrequest("ASPAvailable");
	   if (strtoupper($reqASP) == "TRUE") { 
	      $_SESSION["Sess_ASPAvailable"] = true;
	   } else {
	     $_SESSION["Sess_ASPAvailable"] = false;
	   }
	   
       $reqPHP = qsrequest("PHPAvailable");
	   if (strtoupper($reqPHP) == "TRUE") { 
	      $_SESSION["Sess_PHPAvailable"] = true;
	   } else {
	     $_SESSION["Sess_PHPAvailable"] = false;
	   }
	   
	   print  $reqASP . " = " . $reqPHP ;
  }
   
   
   
 
?>