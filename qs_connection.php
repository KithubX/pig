<?php
$dsn = "C:\Inetpub\wwwroot\DBQwikSite\Data\DBTemplates\ContactList.mdb";
$user = "admin";
$passwd = "admin";
$conn = @odbc_connect($dsn,$user,$passwd);
$link = $conn;
if(!$conn) {
	print "Could not connect to database using DSN [C:\Inetpub\wwwroot\DBQwikSite\Data\DBTemplates\ContactList.mdb]<br><br>Message(s):<br>" . odbc_error() . " - " . odbc_errormsg() . "<br>";
	exit ;
}

$HTTP_ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$HTTP_ACCEPT_LANGUAGE = explode(";", $HTTP_ACCEPT_LANGUAGE);
$HTTP_ACCEPT_LANGUAGE = explode(",", $HTTP_ACCEPT_LANGUAGE[0]);
setlocale(LC_ALL, $HTTP_ACCEPT_LANGUAGE);
$locale = localeconv();
$decimal_point = $locale['decimal_point'];
$thousands_sep = $locale['thousands_sep'];
?>
