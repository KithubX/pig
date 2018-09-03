<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: MyProject1
#  Project Source............: D:\host\MyProject1\MyProject1.dbh
#  Project Session ..........: F82E9A45-6343-4708-87C0-8DD9717875EB
#  Group Name................: Pig
#  Group GUID................: 6A36A15B-4C91-433F-8067-71C288AE7895
#  Group SerialID............: 403
#  Page Name.................: Delete Pig
#  Page Type.................: 5 - Delete Page
#  Page GUID.................: 37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66
#  Page SerialID.............: 408
#  Page File Name............: pig_delete
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:05:11
#  Language..................: PHP
#   
#  11 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | EmployeeCode                             | 5   | [EmployeeCode]                           | EmployeeCode                             |
#  |   1 | FirstName                                | 5   | [FirstName]                              | FirstName                                |
#  |   2 | LastName                                 | 5   | [LastName]                               | LastName                                 |
#  |   3 | Title                                    | 5   | [Title]                                  | Title                                    |
#  |   4 | Department                               | 5   | [Department]                             | Department                               |
#  |   5 | Address                                  | 5   | [Address]                                | Address                                  |
#  |   6 | City                                     | 5   | [City]                                   | City                                     |
#  |   7 | Country                                  | 5   | [Country]                                | Country                                  |
#  |   8 | Phone                                    | 5   | [Phone]                                  | Phone                                    |
#  |   9 | PhoneExt                                 | 5   | [PhoneExt]                               | PhoneExt                                 |
#  |  10 | MobileNo                                 | 5   | [MobileNo]                               | MobileNo                                 |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#   
#  Field Types Definition:
#     0 - TEXT       
#     1 - IMAGE      
#     2 - TEXTBOX    
#     3 - RADIOBUTTON
#     4 - LISTMENU   
#     5 - STATICTEXT 
#     6 - HIDDEN     
#     8 - UPLOAD     
#     7 - DATEPICKER 
#     9 - FIELD      
#    10 - CHECKBOX   
#   
#  *** END OF GENERATION INFORMATION *** 
#   

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
$err_string = "";
//Check security login 
$pagesecure_level = 1;
// >> START OF "on set page secure level" [SECLVL001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on set page secure level" [SECLVL001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

// >> START OF "before check logout request" [SECCHK001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check logout request" [SECCHK001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

if (strtoupper(qsrequest("logout"))=="Y") {
    $_SESSION["UserLevel"] = 0;
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["UserLogon"] = "";
    $_SESSION["RedirectURL"] = qssession("firstredirecturl");
    header ("Location: ./global_group_login.php");
// >> START OF "on logout redirect" [SECREDIR001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on logout redirect" [SECREDIR001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

    exit();
}
// >> START OF "after check logout request" [SECCHK001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check logout request" [SECCHK001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

// >> START OF "before check login status" [SECCHK002] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check login status" [SECCHK002] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

if (qssession("Logon") != "TRUE") {
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_delete").".php?" . qsservervars("QUERY_STRING");
    header ("Location: ./global_group_login.php");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

    exit();
}
// >> START OF "after check login status" [SECCHK002] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check login status" [SECCHK002] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

if (qssession("UserLevel") == "") {
    $_SESSION["UserLevel"] = 0;
}
if (qssession("UserLevel") < $pagesecure_level) {
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_delete").".php?" . qsservervars("QUERY_STRING");
    include_once('global_group_login.php');
// >> START OF "on secure level redirect" [SECREDIR003] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on secure level redirect" [SECREDIR003] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>

    exit();
}
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>


$quotechar = "\"";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "Employee.EmployeeCode";
$fields[1] = "Employee.FirstName";
$fields[2] = "Employee.LastName";
$fields[3] = "Employee.Title";
$fields[4] = "Employee.Department";
$fields[5] = "Employee.Address";
$fields[6] = "Employee.City";
$fields[7] = "Employee.Country";
$fields[8] = "Employee.Phone";
$fields[9] = "Employee.PhoneExt";
$fields[10] = "Employee.MobileNo";
$fields = array();
$fields[0] = "Employee.EmployeeCode";
$fields[1] = "Employee.FirstName";
$fields[2] = "Employee.LastName";
$fields[3] = "Employee.Title";
$fields[4] = "Employee.Department";
$fields[5] = "Employee.Address";
$fields[6] = "Employee.City";
$fields[7] = "Employee.Country";
$fields[8] = "Employee.Phone";
$fields[9] = "Employee.PhoneExt";
$fields[10] = "Employee.MobileNo";

$fieldcons = array();
$fieldcons[0] = "Employee.EmployeeCode";
$fieldcons[1] = "Employee.FirstName";
$fieldcons[2] = "Employee.LastName";
$fieldcons[3] = "Employee.Title";
$fieldcons[4] = "Employee.Department";
$fieldcons[5] = "Employee.Address";
$fieldcons[6] = "Employee.City";
$fieldcons[7] = "Employee.Country";
$fieldcons[8] = "Employee.Phone";
$fieldcons[9] = "Employee.PhoneExt";
$fieldcons[10] = "Employee.MobileNo";

$sql = $sql." Select"."\r\n";
$sql = $sql."     Employee.\"EmployeeCode\","."\r\n";
$sql = $sql."     Employee.\"FirstName\","."\r\n";
$sql = $sql."     Employee.\"LastName\","."\r\n";
$sql = $sql."     Employee.\"Title\","."\r\n";
$sql = $sql."     Employee.\"Department\","."\r\n";
$sql = $sql."     Employee.\"Address\","."\r\n";
$sql = $sql."     Employee.\"City\","."\r\n";
$sql = $sql."     Employee.\"Country\","."\r\n";
$sql = $sql."     Employee.\"Phone\","."\r\n";
$sql = $sql."     Employee.\"PhoneExt\","."\r\n";
$sql = $sql."     Employee.\"MobileNo\""."\r\n";
$sql = $sql." From"."\r\n";
$sql = $sql."     Employee   Employee"."\r\n";


if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
//Field Related Declarations
$req_EmployeeCode    = "del_fd0";
$req_FirstName       = "del_fd1";
$req_LastName        = "del_fd2";
$req_Title           = "del_fd3";
$req_Department      = "del_fd4";
$req_Address         = "del_fd5";
$req_City            = "del_fd6";
$req_Country         = "del_fd7";
$req_Phone           = "del_fd8";
$req_PhoneExt        = "del_fd9";
$req_MobileNo        = "del_fd10";

//Assign Recordset Field Index
$rs_idx_EmployeeCode = 0;
$rs_idx_FirstName    = 1;
$rs_idx_LastName     = 2;
$rs_idx_Title        = 3;
$rs_idx_Department   = 4;
$rs_idx_Address      = 5;
$rs_idx_City         = 6;
$rs_idx_Country      = 7;
$rs_idx_Phone        = 8;
$rs_idx_PhoneExt     = 9;
$rs_idx_MobileNo     = 10;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
$result = odbc_exec($conn,$sqltemp . " " . $sql_ext)
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
$qry_string = "";
$value_sql = "";
$currentrow_sql = "";
$hidden_tag = "";
$hiddenrow_tag = "";
$i = 0;
while ($i < odbc_num_fields($result)) {
    $meta = odbc_field_name($result, $i + 1);
    $field_name = $meta;
    $field_type = odbc_field_type($result, $i + 1);
    $type_field = "";
    $type_field = returntype($field_type);
    $quotedata = "";
    switch ($type_field) {
      case "type_datetime": $quotedata = $quotedate; break;
      case "type_string": $quotedata = "'"; break;
      case "type_integer": $quotedata = ""; break;
      case "type_unknown": $quotedata = "'"; break;
      default: $quotedata = "'";
    } 
    if (qsrequest("currentrow_fd" .$i) != "") {
        if ($currentrow_sql == "") {
            $currentrow_sql  = $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        } else {
            $currentrow_sql .= " and " . $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        }
        $hiddenrow_tag .= "<input type=\"hidden\" name=\"currentrow_fd" . $i . "\" value=\"" . qsrequest("currentrow_fd" . $i) . "\">\n";
    }
    $i++;
}
//Create recordset data 
    if ($result > 0) {odbc_free_result($result);}
    $sql = "";
$sql = $sql." Select"."\r\n";
$sql = $sql."     Employee.\"EmployeeCode\","."\r\n";
$sql = $sql."     Employee.\"FirstName\","."\r\n";
$sql = $sql."     Employee.\"LastName\","."\r\n";
$sql = $sql."     Employee.\"Title\","."\r\n";
$sql = $sql."     Employee.\"Department\","."\r\n";
$sql = $sql."     Employee.\"Address\","."\r\n";
$sql = $sql."     Employee.\"City\","."\r\n";
$sql = $sql."     Employee.\"Country\","."\r\n";
$sql = $sql."     Employee.\"Phone\","."\r\n";
$sql = $sql."     Employee.\"PhoneExt\","."\r\n";
$sql = $sql."     Employee.\"MobileNo\""."\r\n";
$sql = $sql." From"."\r\n";
$sql = $sql."     Employee   Employee"."\r\n";

    $sql .= " where ".$currentrow_sql ;
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    $result =  odbc_exec($conn,$sql) or die("Invalid query");
    if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    $row = qsodbc_fetch_array($result,1);

//Check form submit 
if (isset($_POST["act"])) {
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    $sql  = "";
    $sql  = "delete from Employee";
    $sql .= " where ";
    $sql .= qsreplace_backslashes(stripslashes($currentrow_sql));
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
#----get submit url page----
    $submiturl = "./pig.php?";
    if ($result > 0) {odbc_free_result($result);}
    if ($err_string == "") {
    if (!$result = @odbc_exec($conn,$sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . odbc_errormsg();
// >> START OF "on delete data error" [DELDATAERR001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data error" [DELDATAERR001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    } else { 
// >> START OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
    }
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
            header ("Location: $URL");
            exit;
        }
    }
} //end if act
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<Title>Delete Pig</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<link rel="stylesheet" type="text/css" href="pig_delete.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\YUI-JSLoader.txt] file -->   
<!-- This file is included in all generated pages, right after JS basic initialization -->   
<!-- If you need more of the Yahoo UI libraries for your own custom use, you may add libraries here. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->
<!-- So you may chose to add other libraries via the 'ClientIncludes' Custom Code insertion point. -->

<!-- Load the YUI Loader scripts needed by dbQwikSite -->   
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>


<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>

	<!--[if IE]> <style type="text/css"> #qs_listmenu_div { display:inline; zoom: 1; } </style> <![endif]-->
	<!--[if !IE]><!--> <style type="text/css"> #qs_listmenu_div { display:inline-block; } </style> <![endif]-->

<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 11
var _EmployeeCode                             = 0;
var _FirstName                                = 1;
var _LastName                                 = 2;
var _Title                                    = 3;
var _Department                               = 4;
var _Address                                  = 5;
var _City                                     = 6;
var _Country                                  = 7;
var _Phone                                    = 8;
var _PhoneExt                                 = 9;
var _MobileNo                                 = 10;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_EmployeeCode] = "EmployeeCode";
fieldPrompts[_FirstName] = "FirstName";
fieldPrompts[_LastName] = "LastName";
fieldPrompts[_Title] = "Title";
fieldPrompts[_Department] = "Department";
fieldPrompts[_Address] = "Address";
fieldPrompts[_City] = "City";
fieldPrompts[_Country] = "Country";
fieldPrompts[_Phone] = "Phone";
fieldPrompts[_PhoneExt] = "PhoneExt";
fieldPrompts[_MobileNo] = "MobileNo";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_EmployeeCode] = "EmployeeCode";
fieldTechNames[_FirstName] = "FirstName";
fieldTechNames[_LastName] = "LastName";
fieldTechNames[_Title] = "Title";
fieldTechNames[_Department] = "Department";
fieldTechNames[_Address] = "Address";
fieldTechNames[_City] = "City";
fieldTechNames[_Country] = "Country";
fieldTechNames[_Phone] = "Phone";
fieldTechNames[_PhoneExt] = "PhoneExt";
fieldTechNames[_MobileNo] = "MobileNo";

// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className.substr(0, 6) == "ThRows" || element.className.substr(0, 5) == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_delete_form")[0];   //Define Form Object by Name.











}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Delete Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]-->
<!-- << END OF "Delete Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]-->




<script>

function usrEvent__Delete_Pig__onload() {
  // >> START OF "Delete Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
  // << END OF "Delete Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
}



function usrEvent__Delete_Pig__onunload() {
  // >> START OF "Delete Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
  // << END OF "Delete Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
}



function usrEvent__Delete_Pig__onresize() {
  // >> START OF "Delete Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
  // << END OF "Delete Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();


   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available

   return true;                                        
}                                                      














function usrEvent__Delete_Pig__onsubmit(frm) {
  // >> START OF "Delete Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
  // << END OF "Delete Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
}



function usrEvent__Delete_Pig__onreset() {
  // >> START OF "Delete Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
  // << END OF "Delete Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66]
}



// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>

<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<BODY>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<CENTER>
<center><hr /><font size="5">
Delete Pig
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>

<?php
// >> START OF "before delete form" [FRMDEL001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before delete form" [FRMDEL001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<Form name="qs_delete_form" method="post" action="./pig_delete.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
print $hidden_tag;
print $hiddenrow_tag;
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<Table Border="0" Cellpadding="4" Cellspacing="1" BgColor="#C0C0C0">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows Pig_5_TableTitle">Delete Pig</td>
</tr>
<?php
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_EmployeeCode_label">EmployeeCode</span></td>

<?php
$itemvalue = "" . number_format($row[0],0, $decimal_point, $thousands_sep) . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "EmployeeCode -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [EC847115-1597-4FCF-8688-7FE3CF6620C2] [EmployeeCode]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "EmployeeCode -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [EC847115-1597-4FCF-8688-7FE3CF6620C2] [EmployeeCode] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_EmployeeCode_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_FirstName_label">FirstName</span></td>

<?php
$itemvalue = "" . $row[1] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [5946BD3B-745A-41BF-A720-C26F807873CF] [FirstName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [5946BD3B-745A-41BF-A720-C26F807873CF] [FirstName] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_FirstName_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_LastName_label">LastName</span></td>

<?php
$itemvalue = "" . $row[2] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [61232ED2-17FA-48D9-826A-A5F95328EF57] [LastName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [61232ED2-17FA-48D9-826A-A5F95328EF57] [LastName] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_LastName_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_Title_label">Title</span></td>

<?php
$itemvalue = "" . $row[3] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [DCD9E569-5B40-49FE-80DD-64A81CB3469F] [Title]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [DCD9E569-5B40-49FE-80DD-64A81CB3469F] [Title] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_Title_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_Department_label">Department</span></td>

<?php
$itemvalue = "" . $row[4] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D3F8F0E4-05F3-44A2-B6E2-909B365CA098] [Department]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D3F8F0E4-05F3-44A2-B6E2-909B365CA098] [Department] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_Department_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_Address_label">Address</span></td>

<?php
$itemvalue = "" . $row[5] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [91490ABA-70D5-40C4-8106-A389EEB0FD2C] [Address]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [91490ABA-70D5-40C4-8106-A389EEB0FD2C] [Address] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_Address_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_City_label">City</span></td>

<?php
$itemvalue = "" . $row[6] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [356AFA56-AEC4-4E9E-8AFD-CC56F3490132] [City]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [356AFA56-AEC4-4E9E-8AFD-CC56F3490132] [City] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_City_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_Country_label">Country</span></td>

<?php
$itemvalue = "" . $row[7] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A2260213-54A0-4C72-BE4B-8E144F87D49F] [Country]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A2260213-54A0-4C72-BE4B-8E144F87D49F] [Country] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_Country_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_Phone_label">Phone</span></td>

<?php
$itemvalue = "" . $row[8] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A0A6B466-627A-4C38-981B-248D4BD05D02] [Phone]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A0A6B466-627A-4C38-981B-248D4BD05D02] [Phone] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_Phone_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_PhoneExt_label">PhoneExt</span></td>

<?php
$itemvalue = "" . $row[9] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [661ED332-F380-4608-9CF4-B74235F99076] [PhoneExt]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [661ED332-F380-4608-9CF4-B74235F99076] [PhoneExt] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_PhoneExt_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_5_TableText"><span id="Pig_5_MobileNo_label">MobileNo</span></td>

<?php
$itemvalue = "" . $row[10] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A2ED21C1-752D-459D-84DB-5C7C0EECC432] [MobileNo]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A2ED21C1-752D-459D-84DB-5C7C0EECC432] [MobileNo] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_5_MobileNo_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./pig.php?";
?>
<tr>
<td class="ThRows Pig_5_TableText">&nbsp;</td>
<td class="ThRows Pig_5_TableButtons">
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Delete">&nbsp;&nbsp;
</td>
</tr>
</Table><br>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<?php
// >> START OF "after delete form" [FRMDEL001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after delete form" [FRMDEL001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
</Form>
<?php
if ($result > 0) {odbc_free_result($result);}
if ($conn > 0) {odbc_close($conn);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
</Center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" align="center" valign="middle" background="images/bg_buttom.gif"><font size="2"><strong><font color="#000000">Copyright 
      2018.</font></strong></font></td>
  </tr>
</table>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [37A9CDEC-BB2D-4F83-A3C5-F64B151A2A66] [Delete Pig] END>>
?>
