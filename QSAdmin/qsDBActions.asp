<!-- #include file="AdminSec.asp"-->
<!-- #INCLUDE FILE="qsAdminConnection.asp" -->
<!-- #INCLUDE FILE="qsDBUtilities.asp" -->
<%
   '*************** qsDBActions.asp (AJAX service) *******************
   Response.Buffer = true 
   '========== Check Login Security ==============
   'if session("QSAdminLogin") <> "true" then 
   '  Response.write "NOTLOGIN"
   '  Response.End()
   'end if 
   
   reqAction = request("Action")
   
   '=========== Create database action ===========
   if (UCASE(reqAction) = "CREATEDATABASE") then 
       reqDBName = request("DBName")
       Response.write qsCreateDatabase(reqDBName) 
   end if 
   
   '=========== Create table action ==============
   if (UCASE(reqAction) = "CREATETABLE") then 
       reqTableName = request("TableName")
	   reqScriptFile = request("ScriptFile")
	   Response.write qsCreateTable(reqTableName, reqScriptFile)
   end if 
   
   '=========== Create all tables action ============
   if (UCASE(reqAction) = "CREATEALLTABLES") then 
      reqScriptFile = request("ScriptFile")
      Response.write  qsCreateTable("", reqScriptFile) 
   end if 
   
   '=========== Show MySQL Admin action ============
   if (UCASE(reqAction) = "SHOWMYSQLADMIN") then 
      %>
	    <!-- #INCLUDE FILE="qsMySQLDBAdmin.asp" -->
	  <% 
	   
   end if  
   
   '========== Show ADO Connection Test ============
   if (UCASE(reqAction) = "SHOWADOCONNECTIONTEST") then 
      %>
	    <!-- #INCLUDE FILE="ADOCheck.asp" -->
	  <%  
   end if  
   
   '========= TEST ADO ACCESS CONNECTION ============
   if (UCASE(reqAction) = "TESTACCESSADOCONN") then
      reqDBFolder = request("DBFolder")
	  reqDBFileName = request("DBFileName")
	  reqDBConnCode = request("DBConnCode")
	  
	  'if LCASE(ConnUseCustomCode) = "true" then 'Using parse ASP code 
	      Response.write qsTestACCESSADOConnectionByCode(reqDBConnCode)
	  'else  
	  '   Response.write qsTestACCESSADOConnection(reqDBFolder, reqDBFileName, "", "")
	  'end if 
   end if 
   
   '========== Test MySQL Connection action ==========
   if (UCASE(reqAction) = "TESTMYSQLCONNECTION") then 
      reqServerName = request("ServerName")
	  reqUserName = request("UserName")
	  reqPassword = request("Password")
	  reqPortNumber = request("PortNumber")
	  'Response.write "ooooo"
	  Response.write qsTestMySQLConnection(reqServerName, reqPortNumber, reqUserName, reqPassword , "") 
   end if 
   
   if (UCASE(reqAction) = "TESTMYSQLDBCONNECTION") then 
      reqServerName = request("ServerName")
	  reqUserName = request("UserName")
	  reqPassword = request("Password")
	  reqPortNumber = request("PortNumber")
	  reqDBName = request("DBName")
	  Response.write qsTestMySQLConnection(reqServerName, reqPortNumber, reqUserName, reqPassword, reqDBName) 
   end if 
   

   '========== Load MySQL Database list in Select HTML tag ================
   if (UCASE(reqAction) = "LOADMYSQLDATABASELIST") then 
      reqServerName = request("ServerName")
	  reqUserName = request("UserName")
	  reqPassword = request("Password")
	  reqPortNumber = request("PortNumber")
	 
	  Response.write LoadMySQLDBListAsHTML(reqServerName, reqPortNumber, reqUserName, reqPassword)
   end if 
   
   '========== Reconnect MySQL Connection : return status result as HTML ================
   if (UCASE(reqAction) = "REFRESHMYSQLCONNECTION") then 
		msgStr = qsRefreshMySQLConnection()
		if msgStr = "CONNECTEDOK" then 
		   Response.write "<span class=""cssConnectedOK"">Connected to MySQL Database is OK. </span>" & "<br><input name=""btn12"" class=""BtnCreateStyle"" type=""button"" id=""btn12"" value=""Test Connection!"" onclick=""ShowMySQLTestConnectionPanel();"" />"
		else 
		   Response.write "<span class=""cssConnectedNotOK""> <b>Failed to connect to your database.</b><br><b>Description: </b>" & msgStr & "</span>" & "<br><input name=""btn12"" class=""BtnCreateDBStyle"" type=""button"" id=""btn12"" value=""Test Connection Again!"" onclick=""ShowMySQLTestConnectionPanel();"" />"
		end if 	 
   end if 
   
   '========== BACK TO MENU ==============
   if (UCASE(reqAction) = "BACKTOMENU") then
       reqDBType = request("DBType")
       Response.write getQSAdminMenu(true, reqDBType, homepageFileName) 'True is Can Login 
   end if 
   
   
   '========= UPDATE ASP PHP SESSION AVAILABLE ======== 
   if (UCASE(reqAction) = "UPDATEASPPHPAVAILABLESESSION") then
       reqASP = request("ASPAvailable")
	   if UCASE(reqASP) = "TRUE" then 
	      session("Sess_ASPAvailable") = true
	   else 
	     session("Sess_ASPAvailable") = false
	   end if 
	   
	   reqPHP = request("PHPAvailable")
	   if UCASE(reqPHP) = "TRUE" then 
	      session("Sess_PHPAvailable") = true
	   else 
	     session("Sess_PHPAvailable") = false
	   end if 
	    
	   Response.write reqASP & "=" & reqPHP
	    
   end if 
	
	
	
%>