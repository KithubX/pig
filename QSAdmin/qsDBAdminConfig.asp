<!--#include file="qsAdminConnection.asp"--> 
<%
  '*******************************
  'qsDBAdminConfig.asp : Defined Constants Here 
  '*******************************

  'MySQL Connection String 
  MySQLConnString  = "DRIVER=MySQL ODBC 3.51 Driver; SERVER=" & ServerName & "; PORT=" & PortNumber & "; DATABASE=" & _
                          DBName & "; UID="& UserName &";PASSWORD=" & Password & "; OPTION=3" 
  'Note: ASP can connect MySQL database by MySQL ODBC provider with no database name provide   
  MySQLConnStringNoDBProvide = "DRIVER=MySQL ODBC 3.51 Driver; SERVER=" & ServerName & "; PORT=" & PortNumber & "; DATABASE=; UID="& _
                          UserName &";PASSWORD=" & Password & "; OPTION=3"  
						  
  'MySQL script access file 
  MySQLScriptFolder = "./MySQLScripts"
  CreateAllTablesScriptFileName = "./MySQLScripts/All Create Scripts/All Create Scripts.sql"
  CreateTableScriptFileName = "Create Table Script/Create Table Script.sql"
  DropTableScriptFileName = "Drop Table Script/Drop Table Script.sql"
 
  
%>