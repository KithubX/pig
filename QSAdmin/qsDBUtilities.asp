<!-- #INCLUDE FILE="qsDBAdminConfig.asp" -->
<%
'***********************************************************************************
'ALL QS ADMIN FUNCTIONS IS AVAILABLE HERE
'***********************************************************************************
Response.Buffer = true 
'============================= ALL FUNCTIONS FOR MYSQL DATABASE ================================== 
'Create MySQL Connection String Function 
Function GetMySQLODBCConnString(sServerName, sPortNumber, sUserID, sPassword, sDBName)
  Dim strConn
  Dim PortNum 
  if trim(sPortNumber) = "" then 
    PortNum = "3306" 'Set default port 
  else 
    PortNum = sPortNumber
  end if 
   
  'strConn = "DRIVER=MySQL ODBC 3.51 Driver; SERVER={0}; UID={1}; PASSWORD={2}; DATABASE={3}; OPTION=3" 
  strConn = "DRIVER=MySQL ODBC 3.51 Driver; SERVER=" & sServerName & "; PORT=" & PortNum & "; DATABASE=" & _
                          sDBName & "; UID="& sUserID &";PASSWORD=" & sPassword & "; OPTION=3" 
 
  GetMySQLODBCConnString = strConn 
End Function 


'Test MySQL Connection fucntion
'Return "CONNECTEDOK" if success, otherwise return error message 
function qsTestMySQLConnection(sServerName, sPortNumber, sUserName, sPassword, sDBName)
   dim ResultMsg 
   dim ConnectString 
   dim objConn 
   ConnectString = GetMySQLODBCConnString(sServerName, sPortNumber, sUserName, sPassword, sDBName)
   on error resume next
   Set objConn = Server.CreateObject("ADODB.Connection") 
   'Begin Open Connection 
   objConn.Open(ConnectString) 
   'Check MySQL Connection Error 
   if err <> 0 then 
     ResultMsg = err.description 
   else 
     ResultMsg = "CONNECTEDOK"
   end if 
   objconn.close
   set objConn = Nothing
   'Return result as string 
   qsTestMySQLConnection = ResultMsg 
end function 

'ReConnect MySQL Connection given by settings from QSAdminConnection.asp
'Return "CONNECTEDOK" if success, otherwise return error message 
function qsRefreshMySQLConnection()
   qsRefreshMySQLConnection = qsTestMySQLConnection(ServerName, PortNumber, UserName, Password, DBName)
end function 

'Create List of MySQL database as DropdownList HTML tag 
function LoadMySQLDBListAsHTML(sServerName, sPortNumber, sUserName, sPassword)
   dim HTMLResult
   dim arrDBName 
   dim i  
   HTMLResult = "<select name=""selMySQLDBList"" id=""selMySQLDBList"">"
   arrDBName = LoadMySQLDBList(sServerName, sPortNumber, sUserName, sPassword) 
   
   for i=0 to UBound(arrDBName) - 1 
      if trim(arrDBName(i)) <> "" then 
         HTMLResult = HTMLResult& "<option value=""" & arrDBName(i) & """>" & arrDBName(i) &  "</option>" & vbCrLf
      end if 
   next 

   HTMLResult = HTMLResult& "</select>"
   LoadMySQLDBListAsHTML  = HTMLResult
end function 

'Load MySQL Database and return result as a collection of databases
function LoadMySQLDBList(sServerName, sPortNumber, sUserName, sPassword)
   dim arrDBName 
   dim ConnectString 
   dim SQL 
   dim objConn
   dim RS 
   dim idx 
   
   'Check MySQL Connection Error?
   if qsTestMySQLConnection(sServerName, sPortNumber, sUserName, sPassword, "information_schema") = "CONNECTEDOK" then 
      ConnectString = GetMySQLODBCConnString(sServerName, sPortNumber, sUserName, sPassword, "information_schema") 
       
      on error resume next
	  Set objConn = Server.CreateObject("ADODB.Connection") 
	  set RS = Server.CreateObject("ADODB.Recordset")
	  'Begin Open Connection 
	  objConn.Open ConnectString 
      'Run SQL for list MySQL databases  
	  RS.Open "SELECT SCHEMA_NAME FROM SCHEMATA ORDER BY SCHEMA_NAME", objConn
	  
	  if NOT RS.EOF  then 
	  	 redim arrDBName(99) 
		 idx = 0
		 Do While Not RS.EOF
		   arrDBName(idx) = RS(0) 'Put database name into array 
           idx = idx + 1
           RS.movenext
	     loop 'end while 
 
	  else
        redim arrDBName(1) 
	  end if 
	  'Release all object 
	  objconn.close
	  set objConn = Nothing
	  set RS = Nothing
   else 
      'Set array result length  
      redim arrDBName(1)
   end if 
   'return retult as collection of database name 
   LoadMySQLDBList = arrDBName   
end function 

'Create MySQL Script database function 
Function qsCreateDatabase(sDBName)
   Dim statusMsg 
   Dim SQLStr 
   SQLStr = "CREATE DATABASE `" & sDBName & "`"
   'Run SQL create database 
   statusMsg = qsRunSQLScript(SQLStr, False)
   'Prepare result message 
   if (trim(statusMsg) = "") then
     'Success 
     statusMsg = "<span class=""SuccessMessageStyle""><b>Success: </b> Database <b>'" & sDBName & "'</b> has been created. </span>"
   else
     'Failed 
     statusMsg = "<span class=""ErrorMessageStyle""><b>Error: </b>" & statusMsg & "</span>" 
   end if 
   'Return result as Status Message 
   qsCreateDatabase = statusMsg 
End Function 

'Create MySQL Table(all) function 
Function qsCreateTable(sTableName, sSQLScriptFile)
  Dim statusMsg 
  Dim SQLStr 
  Dim arrErrorMsg 
  Dim i
  Dim FSO
  Dim SQLFile 
  Dim TextStream
  Dim Filepath
  Redim arrErrorMsg(999)
  statusMsg = ""
  isHasErrors = false 
  i = 0
  if qsFileExist(sSQLScriptFile) then 
     On Error Resume next
     set FSO = server.createObject("Scripting.FileSystemObject")
     ' Map the logical path to the physical system path
     Filepath = Server.MapPath(sSQLScriptFile)
	 'Get file from specific path
     set SQLFile = FSO.GetFile(Filepath)
	 'Read file as file stream 
     Set TextStream = SQLFile.OpenAsTextStream()
	 'Check Open File error 
	 if err <> 0 then 
	     arrErrorMsg(0) = err.description
	 else 
	    'Begin Read SQL file and Run Script  
        Do While Not TextStream.AtEndOfStream
           SQLStr = TextStream.readline
           if (trim(SQLStr) <> "") then 
		      'Run SQL Script by line 
			  arrErrorMsg(i) = qsRunSQLScript(SQLStr, True) 
			  i = i + 1
		   end if 
        Loop
		'Release all object 
		FSO.close
		TextStream.close 
		SQLFile.close
		FSO = nothing 
		TextStream = nothing
		SQLFile = nothing 
	 end if 
  else 
    arrErrorMsg(0) =  "<b>Cannot run SQL script:</b> File '" & sSQLScriptFile & "' does not exist."
  end if 
  
  'Find is found error or not?
  for i=0 to Ubound(arrErrorMsg)-1
     if trim(arrErrorMsg(i)) <> "" then 
	   isHasErrors = true 
	   exit for  
	 end if 
  next 

  'Prepare Result Messages
  if (isHasErrors) then 
     statusMsg = "<span class=""ErrorMessageStyle"">"
     for i=0 to Ubound(arrErrorMsg)
	   if trim(arrErrorMsg(i)) <> "" then
	      statusMsg = statusMsg &  "<b>Error: </b> " & arrErrorMsg(i) & "&nbsp;&nbsp;<br>"
		end if 
	 next 
	 statusMsg = statusMsg & "</span>"
  else 
     'Success 
     if trim(sTableName) <> "" then 
	    statusMsg = "<span class=""SuccessMessageStyle""><b>Success: </b>Tables <b>'" & sTableName & "</b>' has been created. </span>"
	 else 
	    statusMsg = "<span class=""SuccessMessageStyle""><b>Success: </b> All Tables has been created.</b></span>"
	 end if 
  end if 
  'Return result as status message 
  qsCreateTable = statusMsg
End Function 

'Run SQL Script Command Function 
'Note: ASP can connect MySQL database by MySQL ODBC provider with no database name provide
'Return blank if success, otherwise return error message    
Function qsRunSQLScript(sSQL, isDBNameProvide)
   Dim statusMsg 
   Dim ConnString  
   Dim objConn 
   statusMsg = ""
   if (isDBNameProvide) then 
      ConnString = MySQLConnString 'Using connection string with Database Provide 
   else 
      ConnString = MySQLConnStringNoDBProvide 'Using connection string with No Databse provide 
   end if 
   On Error Resume next
   'Create Database Connenction Object 
   Set objConn = Server.CreateObject("ADODB.Connection") 
   'Begin Open Connection 
   objConn.Open(ConnString) 
   'Check MySQL Connection Error 
   if err <> 0 then 
     statusMsg = err.description 
   else 
      'Run SQL Command 
      objConn.Execute sSQL
	  'Check Run SQL Script Error 
	  if err <> 0 then 
	     statusMsg = err.description 
	  end if 

   end if  	  
   'Release all object 
   objConn.Close
   set objConn = Nothing
   
   'Retrun result as Status Message 
   qsRunSQLScript = statusMsg 
End Function 


'============================== ALL OTHER FUNCTIONS ===========================
'Get QS Admin Menu
function getQSAdminMenu(isCanLogin, sDBType, sHomepageFilename)
   if isCanLogin then 
	 result =  "<p>"
	 result = result & "&bull;&nbsp;Test your site: <a  href=""../"& sHomepageFilename &""" target=""_blank"" class=""LinkText"">Launch Home Page</a><br />"
	
	 if UCASE(sDBType) = "MYSQL" then 
		result = result &  "&bull;&nbsp;Install Generated MySQL Scripts: <a href=""javascript:ShowMySQLLaunchScriptAdmin();"" class=""LinkText"" >Launch Script Install Page</a><br />"
	 end if 
	 
	 if UCASE(sDBType) = "ACCESS" then 
		result = result &  "&bull;&nbsp;Test ACCESS ADO Connection: <a href=""javascript:ShowADOConnectionTest();"" class=""LinkText"" >Launch ADO Connection Test</a><br />"
	 end if

	 'Response.write "&bull;&nbsp;ASP Files and Connection: <a href=""ADOCheck.asp"" target=""_blank"" class=""LinkText"">Check Database Connection</a><br />"
	 result = result &  "&bull;&nbsp;Check Server Details: <a href=""QSCheckWebServer/checkserverasp.asp"" target=""_blank"" class=""LinkText"">Check ASP Server Details</a>" 
	 
	 if session("Sess_PHPAvailable") then 
	    result = result &  "&nbsp;<a href=""QSCheckWebServer/checkserverphp.php"" target=""_blank"" class=""LinkText"">Check PHP Server Details</a> "
	 end if 
	 
	 result = result &  "<br></p>"
   else 
     result = result & ("<br />login failed ") 
     result = result & ("<a href='QSSiteAdmin.html' target='_self'>Show instructions again</a><br />") 
   end if 
   
   getQSAdminMenu = result
end function  

'List Directories Given by Path - return result as array 
Function qsListDirectories(sPath)
  Dim arrDirectories
  Dim FSO 
  Dim Folders
  Dim idx 
  On Error Resume next
  Set FSO = CreateObject("Scripting.FileSystemObject")
  Set Folders = FSO.GetFolder(server.mappath(sPath))
  idx = 0
  'Redeclare array size as directory count 
  if err = 0 then 
    Redim arrDirectories(Folders.SubFolders.count)
  else 
    Redim arrDirectories(1)
  end if 
  
  For each Directory in Folders.SubFolders
      arrDirectories(idx) = Directory.Name
	  idx = idx +1
  Next
  'Release all object 
  FSO.Close
  Folders.close 
  FSO = nothing 
  Folders = nothing  
  'Return result as array 
  qsListDirectories = arrDirectories 
End function

'List Files Given by Path - Return result as array 
Function qsListFiles(sPath)
  Dim arrFiles
  Dim FSO 
  Dim FileList
  Dim idx 
  On Error Resume next
  Set FSO = CreateObject("Scripting.FileSystemObject")
  Set FileList = FSO.GetFolder(server.mappath(sPath))
  'Redeclare array size as file count 
  if err = 0 then 
     Redim arrFiles(FileList.Files.count)
  else 
     Redim arrFiles(1)
  end if 
  
  idx = 0
  For each FileObj in FileList.Files
     arrFiles(idx) = FileObj.Name
	 idx = idx +1
  Next
  'Release all object 
  FSO.Close
  FileList.close 
  FSO = nothing 
  FileList = nothing  
  'Return result as array 
  qsListFiles = arrFiles 
End function  

'Check File Exist
Function qsFileExist(sFile)
  Dim isFileExist 
  Dim FSO
  Dim FilePath
  isFileExist = false
  On Error Resume next
  set FSO = server.createObject("Scripting.FileSystemObject")
  ' Map the logical path to the physical system path
  FilePath = Server.MapPath(sFile)
  isFileExist = FSO.FileExists(FilePath)
  'Release all object 
  FSO.close 
  FSO = nothing 
  'Return result as boolean 
  qsFileExist = isFileExist
End Function  
%>