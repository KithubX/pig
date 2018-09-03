<%
'variables used to contain the user authentication values
dim adminUserName
dim adminPassword
'include the authentication values
%>
<!--#include file="AdminSec.asp"-->
<!--#include file="qsDBUtilities.asp"-->
<% 
Response.Buffer = True
'variables containing the request values to athentical
dim inUserID
dim inPass
'assign the request form fields to local variables
inUserID = Request("AdminUser")
inPass   = Request("AdminPass")

'validate the user authentication	
if ((inUserID <> adminUserName) or ( inPass <> adminPassword)) then
'failed authentication
    session.Contents.remove("QSAdminLogin")
    isCanLogin = false
else 
	'passed authentication display admin options
	session("QSAdminLogin") = "true" 
    isCanLogin = true
end if 

Response.write getQSAdminMenu(isCanLogin, request("DBType"), homepageFileName)

%>

