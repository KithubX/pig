<?php
//variables used to contain the user authentication values
//$adminUserName;
//$adminPassword;
//include the authentication values

include("qsDBUtilities.php");
include("AdminSec.php");
@session_start();
//assign the request form fields to local variables
$inUserID = $_POST["AdminUser"];
$inPass   = $_POST["AdminPass"];

//validate the user authentication
if (($inUserID != $adminUserName) || ($inPass != $adminPassword)) {
    //failed authentication
	unset($_SESSION["QSAdminLogin"]);
	$isCanLogin = false;
} else { 
    //passed authentication display admin options
	$_SESSION["QSAdminLogin"] = "true";
	$isCanLogin = true;
} 

print getQSAdminMenu($isCanLogin, $_POST["dbType"], $homepageFileName);	

?>
