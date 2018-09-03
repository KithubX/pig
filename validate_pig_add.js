function check_pig_addSTART OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
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
#  Page Name.................: Add Pig
#  Page Type.................: 3 - Add Page
#  Page GUID.................: 1B213019-DC7B-40AE-AB03-991F74A7C98F
#  Page SerialID.............: 406
#  Page File Name............: pig_add
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:05:05
#  Language..................: PHP
#   
#  11 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | EmployeeCode                             | 2   | [EmployeeCode]                           | EmployeeCode                             |
#  |   1 | FirstName                                | 2   | [FirstName]                              | FirstName                                |
#  |   2 | LastName                                 | 2   | [LastName]                               | LastName                                 |
#  |   3 | Title                                    | 7   | [Title]                                  | Title                                    |
#  |   4 | Department                               | 2   | [Department]                             | Department                               |
#  |   5 | Address                                  | 2   | [Address]                                | Address                                  |
#  |   6 | City                                     | 2   | [City]                                   | City                                     |
#  |   7 | Country                                  | 2   | [Country]                                | Country                                  |
#  |   8 | Phone                                    | 2   | [Phone]                                  | Phone                                    |
#  |   9 | PhoneExt                                 | 2   | [PhoneExt]                               | PhoneExt                                 |
#  |  10 | MobileNo                                 | 2   | [MobileNo]                               | MobileNo                                 |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
$row = "";
$err_string = "";
$updateCond = "";
//Check security login 
$pagesecure_level = 1;
// >> START OF "on set page secure level" [SECLVL001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on set page secure level" [SECLVL001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

// >> START OF "before check logout request" [SECCHK001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check logout request" [SECCHK001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

if (strtoupper(qsrequest("logout"))=="Y") {
    $_SESSION["UserLevel"] = 0;
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["UserLogon"] = "";
    $_SESSION["RedirectURL"] = qssession("firstredirecturl");
   if( isset($_GET["inline"])) { echo "login_add<END>"; exit(); }
    header ("Location: ./global_group_login.php");
// >> START OF "on logout redirect" [SECREDIR001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on logout redirect" [SECREDIR001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

    exit();
}
// >> START OF "after check logout request" [SECCHK001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check logout request" [SECCHK001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

// >> START OF "before check login status" [SECCHK002] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check login status" [SECCHK002] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

if (qssession("Logon") != "TRUE") {
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_add").".php?" . qsservervars("QUERY_STRING");
   if( isset($_GET["inline"])) { echo "login_add<END>"; exit(); }
    header ("Location: ./global_group_login.php");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

    exit();
}
// >> START OF "after check login status" [SECCHK002] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check login status" [SECCHK002] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

if (qssession("UserLevel") == "") {
    $_SESSION["UserLevel"] = 0;
}
if (qssession("UserLevel") < $pagesecure_level) {
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_add").".php?" . qsservervars("QUERY_STRING");
   if( isset($_GET["inline"])) { echo "login_add<END>"; exit(); }
    include_once('global_group_login.php');
// >> START OF "on secure level redirect" [SECREDIR003] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on secure level redirect" [SECREDIR003] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

    exit();
}
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>


$hidden_tag = "";
//<!--inlineForm-->
if (isset($_GET["page"])) {
    $current_page = $_GET["page"];
} elseif (isset($_POST["page"])) {
    $current_page = $_POST["page"];
} else {
    $current_page = 1;
}
$quotechar = "\"";
$quotedate = "'";
$result = "";
$sql = "";
$sql_ext = "";
$formatdate = array();
$formatdate[0] = "";
$formatdate[1] = "";
$formatdate[2] = "";
$formatdate[3] = "";
$formatdate[4] = "";
$formatdate[5] = "";
$formatdate[6] = "";
$formatdate[7] = "";
$formatdate[8] = "";
$formatdate[9] = "";
$formatdate[10] = "";
$seperatedate = array();
$seperatedate[0] = " ";
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$seperatedate[3] = " ";
$seperatedate[4] = " ";
$seperatedate[5] = " ";
$seperatedate[6] = " ";
$seperatedate[7] = " ";
$seperatedate[8] = " ";
$seperatedate[9] = " ";
$seperatedate[10] = " ";
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


//Field Related Declarations
$req_EmployeeCode    = "add_fd0";
$req_FirstName       = "add_fd1";
$req_LastName        = "add_fd2";
$req_Title           = "add_fd3";
$req_Department      = "add_fd4";
$req_Address         = "add_fd5";
$req_City            = "add_fd6";
$req_Country         = "add_fd7";
$req_Phone           = "add_fd8";
$req_PhoneExt        = "add_fd9";
$req_MobileNo        = "add_fd10";

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

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
// >> START OF "before server form processing" [FORMPROCESS001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before server form processing" [FORMPROCESS001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
   if ($ProcessForm  == "Y") { 
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
$result = odbc_exec($conn,$sqltemp . " " . $sql_ext)
          or die("Invalid query");
$qry_string = "";
$insert_sql = "";
$value_sql = "";
$i = 0;
$SourceFileUpload = array();
$DestFileUpload = array();
$NewFieldUpload = array();
 
//Set initial value for array
$SourceFileUpload[0] = "";
$DestFileUpload[0] = "";
$NewFieldUpload[0] = "";
$SourceFileUpload[1] = "";
$DestFileUpload[1] = "";
$NewFieldUpload[1] = "";
$SourceFileUpload[2] = "";
$DestFileUpload[2] = "";
$NewFieldUpload[2] = "";
$SourceFileUpload[3] = "";
$DestFileUpload[3] = "";
$NewFieldUpload[3] = "";
$SourceFileUpload[4] = "";
$DestFileUpload[4] = "";
$NewFieldUpload[4] = "";
$SourceFileUpload[5] = "";
$DestFileUpload[5] = "";
$NewFieldUpload[5] = "";
$SourceFileUpload[6] = "";
$DestFileUpload[6] = "";
$NewFieldUpload[6] = "";
$SourceFileUpload[7] = "";
$DestFileUpload[7] = "";
$NewFieldUpload[7] = "";
$SourceFileUpload[8] = "";
$DestFileUpload[8] = "";
$NewFieldUpload[8] = "";
$SourceFileUpload[9] = "";
$DestFileUpload[9] = "";
$NewFieldUpload[9] = "";
$SourceFileUpload[10] = "";
$DestFileUpload[10] = "";
$NewFieldUpload[10] = "";
 
$i = 0;
while ($i < odbc_num_fields($result)) {
    $meta = odbc_field_name($result, $i + 1);
    $field_name = $meta;
    $field_type = odbc_field_type($result, $i + 1);
    $type_field = "";
    $type_field = returntype($field_type);
    if (qsvalidRequest("search_fd" .$i)) {
        if ($qry_string == "") {
            $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        } else {
            $qry_string .= "&search_fd" .$i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"search_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("search_fd" . $i))) . "\">\n";
        if ($qry_string == "") {
            $qry_string = "multisearch_fd" . $i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        } else {
            $qry_string .= "&multisearch_fd" .$i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"multisearch_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("multisearch_fd" . $i))) . "\">\n";
    }
    if (qsvalidRequest("add_fd" .$i) 
       ) {
        $idata = qsrequest("add_fd" . $i);
        if ($meta) {
            if ($type_field == "type_datetime") {
// >> START OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .  $quotedate;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .$quotedate;
                    }
            } elseif ($type_field == "type_integer") {
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

                if (is_numeric($idata)) {
                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $idata;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $idata;
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while adding<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            } elseif ($type_field == "type_string") {
// >> START OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . preg_replace("/'/","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . preg_replace("/'/","''",stripslashes($idata)) . "'";
                }
            } else {
// >> START OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . preg_replace("/'/","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . preg_replace("/'/","''",stripslashes($idata)) . "'";
                }
            }
// >> START OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>

        }
    } else {
        if ((strtolower($field_type) != "int identity")
         && (strtolower($field_type) != "autoincrement")
         && (strtolower($field_type) != "counter")) {
            if ($insert_sql == "") {
                $insert_sql .= $quotechar . $field_name . $quotechar;
                $value_sql  .= "null";
            } else {
                $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                $value_sql  .= ", null";
            }
        }
    }
$i++;
}
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
$sql  = "";
$sql  = "insert into Employee";
$sql .= " (" . $insert_sql . ")";
$sql .= " values";
$sql .= " (" . $value_sql . ")";
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
#----get submit url page----
    $submiturl = "./pig.php?";
    if ($result > 0) {odbc_free_result($result);}
    if (!$result = @odbc_exec($conn,$sql)){
        $err_string .= "<strong>Error:</strong>while adding<br>" . odbc_errormsg();
// >> START OF "on add data error" [ADDDATAERR001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data error" [ADDDATAERR001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
    } else { 
// >> START OF "on add data success" [ADDDATASUCCESS001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data success" [ADDDATASUCCESS001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
    }
// >> START OF "before upload file" [UPLOAD001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before upload file" [UPLOAD001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
    if ($err_string == "") { 
       for ($i = 0; $i < 11; $i++)  
       { 
          if ($SourceFileUpload[$i] <> "") { 
              if (!(move_uploaded_file($SourceFileUpload[$i], $DestFileUpload[$i]))) {    // Upload Fail 
                  $err_string = 	"Cannot upload file! There is problem occured when upload."	; 
// >> START OF "on upload file error" [UPLOADERR001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on upload file error" [UPLOADERR001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
                } 
          } //end if  
       } 
    } //end if error string  
// >> START OF "after upload file" [UPLOAD001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after upload file" [UPLOAD001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
        header ("Location: $URL");
        exit;
    }
  } //end if ProcessForm
// >> START OF "after server form processing" [FORMPROCESS001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after server form processing" [FORMPROCESS001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
} //end if act
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<Title>Add Pig</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<link rel="stylesheet" type="text/css" href="pig_add.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
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
  document.getElementsByName("add_fd0")[0].id = fieldTechNames[_EmployeeCode];
  document.getElementsByName("add_fd1")[0].id = fieldTechNames[_FirstName];
  document.getElementsByName("add_fd2")[0].id = fieldTechNames[_LastName];
  document.getElementsByName("add_fd3")[0].id = fieldTechNames[_Title];
  document.getElementsByName("add_fd4")[0].id = fieldTechNames[_Department];
  document.getElementsByName("add_fd5")[0].id = fieldTechNames[_Address];
  document.getElementsByName("add_fd6")[0].id = fieldTechNames[_City];
  document.getElementsByName("add_fd7")[0].id = fieldTechNames[_Country];
  document.getElementsByName("add_fd8")[0].id = fieldTechNames[_Phone];
  document.getElementsByName("add_fd9")[0].id = fieldTechNames[_PhoneExt];
  document.getElementsByName("add_fd10")[0].id = fieldTechNames[_MobileNo];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_add_form")[0];   //Define Form Object by Name.
  pgitm_EmployeeCode                       = document.getElementsByName("add_fd0")[0];
  pgitm_FirstName                          = document.getElementsByName("add_fd1")[0];
  pgitm_LastName                           = document.getElementsByName("add_fd2")[0];
  pgitm_Title                              = document.getElementsByName("add_fd3")[0];
  pgitm_Department                         = document.getElementsByName("add_fd4")[0];
  pgitm_Address                            = document.getElementsByName("add_fd5")[0];
  pgitm_City                               = document.getElementsByName("add_fd6")[0];
  pgitm_Country                            = document.getElementsByName("add_fd7")[0];
  pgitm_Phone                              = document.getElementsByName("add_fd8")[0];
  pgitm_PhoneExt                           = document.getElementsByName("add_fd9")[0];
  pgitm_MobileNo                           = document.getElementsByName("add_fd10")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Add Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]-->
<!-- << END OF "Add Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]-->





<script>

function usrEvent__Add_Pig__onload() {
  // >> START OF "Add Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
  // << END OF "Add Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
}



function usrEvent__Add_Pig__onunload() {
  // >> START OF "Add Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
  // << END OF "Add Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
}



function usrEvent__Add_Pig__onresize() {
  // >> START OF "Add Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
  // << END OF "Add Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
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
  pgitm_EmployeeCode.focus();
   return true;                                        
}                                                      


function usrEvent__EmployeeCode__onfocus(HTMLElement) {
  // >> START OF "EmployeeCode -> On Focus" [onfocus] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Focus" [onfocus] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onblur(HTMLElement) {
  // >> START OF "EmployeeCode -> On Blur (loss of focus)" [onblur] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Blur (loss of focus)" [onblur] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onclick(HTMLElement) {
  // >> START OF "EmployeeCode -> On Click" [onclick] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Click" [onclick] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__ondblclick(HTMLElement) {
  // >> START OF "EmployeeCode -> On Double Click" [ondblclick] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Double Click" [ondblclick] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onkeydown(HTMLElement) {
  // >> START OF "EmployeeCode -> On Key Down" [onkeydown] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Key Down" [onkeydown] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onkeypress(HTMLElement) {
  // >> START OF "EmployeeCode -> On Key Press" [onkeypress] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Key Press" [onkeypress] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onkeyup(HTMLElement) {
  // >> START OF "EmployeeCode -> On Key Up" [onkeyup] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Key Up" [onkeyup] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onchange(HTMLElement) {
  // >> START OF "EmployeeCode -> On Change" [onchange] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Change" [onchange] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onmousedown(HTMLElement) {
  // >> START OF "EmployeeCode -> On Mouse Down" [onmousedown] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Mouse Down" [onmousedown] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onmousemove(HTMLElement) {
  // >> START OF "EmployeeCode -> On Mouse Move" [onmousemove] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Mouse Move" [onmousemove] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onmouseout(HTMLElement) {
  // >> START OF "EmployeeCode -> On Mouse Out" [onmouseout] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Mouse Out" [onmouseout] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onmouseover(HTMLElement) {
  // >> START OF "EmployeeCode -> On Mouse Over" [onmouseover] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Mouse Over" [onmouseover] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onmouseup(HTMLElement) {
  // >> START OF "EmployeeCode -> On Mouse Up" [onmouseup] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Mouse Up" [onmouseup] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}
function usrEvent__EmployeeCode__onselect(HTMLElement) {
  // >> START OF "EmployeeCode -> On Select" [onselect] [EmployeeCode] [START] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
  // << END OF "EmployeeCode -> On Select" [onselect] [EmployeeCode] [STOP] [JS] [08C5F38E-B626-4855-A1E1-F76F9F95BB54]
}

function usrEvent__FirstName__onfocus(HTMLElement) {
  // >> START OF "FirstName -> On Focus" [onfocus] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Focus" [onfocus] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onblur(HTMLElement) {
  // >> START OF "FirstName -> On Blur (loss of focus)" [onblur] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Blur (loss of focus)" [onblur] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onclick(HTMLElement) {
  // >> START OF "FirstName -> On Click" [onclick] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Click" [onclick] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__ondblclick(HTMLElement) {
  // >> START OF "FirstName -> On Double Click" [ondblclick] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Double Click" [ondblclick] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onkeydown(HTMLElement) {
  // >> START OF "FirstName -> On Key Down" [onkeydown] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Key Down" [onkeydown] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onkeypress(HTMLElement) {
  // >> START OF "FirstName -> On Key Press" [onkeypress] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Key Press" [onkeypress] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onkeyup(HTMLElement) {
  // >> START OF "FirstName -> On Key Up" [onkeyup] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Key Up" [onkeyup] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onchange(HTMLElement) {
  // >> START OF "FirstName -> On Change" [onchange] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Change" [onchange] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onmousedown(HTMLElement) {
  // >> START OF "FirstName -> On Mouse Down" [onmousedown] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Mouse Down" [onmousedown] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onmousemove(HTMLElement) {
  // >> START OF "FirstName -> On Mouse Move" [onmousemove] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Mouse Move" [onmousemove] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onmouseout(HTMLElement) {
  // >> START OF "FirstName -> On Mouse Out" [onmouseout] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Mouse Out" [onmouseout] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onmouseover(HTMLElement) {
  // >> START OF "FirstName -> On Mouse Over" [onmouseover] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Mouse Over" [onmouseover] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onmouseup(HTMLElement) {
  // >> START OF "FirstName -> On Mouse Up" [onmouseup] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Mouse Up" [onmouseup] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}
function usrEvent__FirstName__onselect(HTMLElement) {
  // >> START OF "FirstName -> On Select" [onselect] [FirstName] [START] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
  // << END OF "FirstName -> On Select" [onselect] [FirstName] [STOP] [JS] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5]
}

function usrEvent__LastName__onfocus(HTMLElement) {
  // >> START OF "LastName -> On Focus" [onfocus] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Focus" [onfocus] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onblur(HTMLElement) {
  // >> START OF "LastName -> On Blur (loss of focus)" [onblur] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Blur (loss of focus)" [onblur] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onclick(HTMLElement) {
  // >> START OF "LastName -> On Click" [onclick] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Click" [onclick] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__ondblclick(HTMLElement) {
  // >> START OF "LastName -> On Double Click" [ondblclick] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Double Click" [ondblclick] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onkeydown(HTMLElement) {
  // >> START OF "LastName -> On Key Down" [onkeydown] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Key Down" [onkeydown] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onkeypress(HTMLElement) {
  // >> START OF "LastName -> On Key Press" [onkeypress] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Key Press" [onkeypress] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onkeyup(HTMLElement) {
  // >> START OF "LastName -> On Key Up" [onkeyup] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Key Up" [onkeyup] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onchange(HTMLElement) {
  // >> START OF "LastName -> On Change" [onchange] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Change" [onchange] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onmousedown(HTMLElement) {
  // >> START OF "LastName -> On Mouse Down" [onmousedown] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Mouse Down" [onmousedown] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onmousemove(HTMLElement) {
  // >> START OF "LastName -> On Mouse Move" [onmousemove] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Mouse Move" [onmousemove] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onmouseout(HTMLElement) {
  // >> START OF "LastName -> On Mouse Out" [onmouseout] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Mouse Out" [onmouseout] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onmouseover(HTMLElement) {
  // >> START OF "LastName -> On Mouse Over" [onmouseover] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Mouse Over" [onmouseover] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onmouseup(HTMLElement) {
  // >> START OF "LastName -> On Mouse Up" [onmouseup] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Mouse Up" [onmouseup] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}
function usrEvent__LastName__onselect(HTMLElement) {
  // >> START OF "LastName -> On Select" [onselect] [LastName] [START] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
  // << END OF "LastName -> On Select" [onselect] [LastName] [STOP] [JS] [886DC34E-C941-4F04-83F6-92DE391B2BEE]
}

function usrEvent__Title__onfocus(HTMLElement) {
  // >> START OF "Title -> On Focus" [onfocus] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Focus" [onfocus] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onblur(HTMLElement) {
  // >> START OF "Title -> On Blur (loss of focus)" [onblur] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Blur (loss of focus)" [onblur] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onclick(HTMLElement) {
  // >> START OF "Title -> On Click" [onclick] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Click" [onclick] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__ondblclick(HTMLElement) {
  // >> START OF "Title -> On Double Click" [ondblclick] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Double Click" [ondblclick] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onkeydown(HTMLElement) {
  // >> START OF "Title -> On Key Down" [onkeydown] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Key Down" [onkeydown] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onkeypress(HTMLElement) {
  // >> START OF "Title -> On Key Press" [onkeypress] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Key Press" [onkeypress] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onkeyup(HTMLElement) {
  // >> START OF "Title -> On Key Up" [onkeyup] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Key Up" [onkeyup] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onchange(HTMLElement) {
  // >> START OF "Title -> On Change" [onchange] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Change" [onchange] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onmousedown(HTMLElement) {
  // >> START OF "Title -> On Mouse Down" [onmousedown] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Mouse Down" [onmousedown] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onmousemove(HTMLElement) {
  // >> START OF "Title -> On Mouse Move" [onmousemove] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Mouse Move" [onmousemove] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onmouseout(HTMLElement) {
  // >> START OF "Title -> On Mouse Out" [onmouseout] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Mouse Out" [onmouseout] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onmouseover(HTMLElement) {
  // >> START OF "Title -> On Mouse Over" [onmouseover] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Mouse Over" [onmouseover] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}
function usrEvent__Title__onmouseup(HTMLElement) {
  // >> START OF "Title -> On Mouse Up" [onmouseup] [Title] [START] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
  // << END OF "Title -> On Mouse Up" [onmouseup] [Title] [STOP] [JS] [4A562E56-622F-4243-B4E0-885A9C4B5757]
}

function usrEvent__Department__onfocus(HTMLElement) {
  // >> START OF "Department -> On Focus" [onfocus] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Focus" [onfocus] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onblur(HTMLElement) {
  // >> START OF "Department -> On Blur (loss of focus)" [onblur] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Blur (loss of focus)" [onblur] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onclick(HTMLElement) {
  // >> START OF "Department -> On Click" [onclick] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Click" [onclick] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__ondblclick(HTMLElement) {
  // >> START OF "Department -> On Double Click" [ondblclick] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Double Click" [ondblclick] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onkeydown(HTMLElement) {
  // >> START OF "Department -> On Key Down" [onkeydown] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Key Down" [onkeydown] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onkeypress(HTMLElement) {
  // >> START OF "Department -> On Key Press" [onkeypress] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Key Press" [onkeypress] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onkeyup(HTMLElement) {
  // >> START OF "Department -> On Key Up" [onkeyup] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Key Up" [onkeyup] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onchange(HTMLElement) {
  // >> START OF "Department -> On Change" [onchange] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Change" [onchange] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onmousedown(HTMLElement) {
  // >> START OF "Department -> On Mouse Down" [onmousedown] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Mouse Down" [onmousedown] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onmousemove(HTMLElement) {
  // >> START OF "Department -> On Mouse Move" [onmousemove] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Mouse Move" [onmousemove] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onmouseout(HTMLElement) {
  // >> START OF "Department -> On Mouse Out" [onmouseout] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Mouse Out" [onmouseout] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onmouseover(HTMLElement) {
  // >> START OF "Department -> On Mouse Over" [onmouseover] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Mouse Over" [onmouseover] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onmouseup(HTMLElement) {
  // >> START OF "Department -> On Mouse Up" [onmouseup] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Mouse Up" [onmouseup] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}
function usrEvent__Department__onselect(HTMLElement) {
  // >> START OF "Department -> On Select" [onselect] [Department] [START] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
  // << END OF "Department -> On Select" [onselect] [Department] [STOP] [JS] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7]
}

function usrEvent__Address__onfocus(HTMLElement) {
  // >> START OF "Address -> On Focus" [onfocus] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Focus" [onfocus] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onblur(HTMLElement) {
  // >> START OF "Address -> On Blur (loss of focus)" [onblur] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Blur (loss of focus)" [onblur] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onclick(HTMLElement) {
  // >> START OF "Address -> On Click" [onclick] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Click" [onclick] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__ondblclick(HTMLElement) {
  // >> START OF "Address -> On Double Click" [ondblclick] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Double Click" [ondblclick] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onkeydown(HTMLElement) {
  // >> START OF "Address -> On Key Down" [onkeydown] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Key Down" [onkeydown] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onkeypress(HTMLElement) {
  // >> START OF "Address -> On Key Press" [onkeypress] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Key Press" [onkeypress] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onkeyup(HTMLElement) {
  // >> START OF "Address -> On Key Up" [onkeyup] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Key Up" [onkeyup] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onchange(HTMLElement) {
  // >> START OF "Address -> On Change" [onchange] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Change" [onchange] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onmousedown(HTMLElement) {
  // >> START OF "Address -> On Mouse Down" [onmousedown] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Mouse Down" [onmousedown] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onmousemove(HTMLElement) {
  // >> START OF "Address -> On Mouse Move" [onmousemove] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Mouse Move" [onmousemove] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onmouseout(HTMLElement) {
  // >> START OF "Address -> On Mouse Out" [onmouseout] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Mouse Out" [onmouseout] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onmouseover(HTMLElement) {
  // >> START OF "Address -> On Mouse Over" [onmouseover] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Mouse Over" [onmouseover] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onmouseup(HTMLElement) {
  // >> START OF "Address -> On Mouse Up" [onmouseup] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Mouse Up" [onmouseup] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}
function usrEvent__Address__onselect(HTMLElement) {
  // >> START OF "Address -> On Select" [onselect] [Address] [START] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
  // << END OF "Address -> On Select" [onselect] [Address] [STOP] [JS] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D]
}

function usrEvent__City__onfocus(HTMLElement) {
  // >> START OF "City -> On Focus" [onfocus] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Focus" [onfocus] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onblur(HTMLElement) {
  // >> START OF "City -> On Blur (loss of focus)" [onblur] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Blur (loss of focus)" [onblur] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onclick(HTMLElement) {
  // >> START OF "City -> On Click" [onclick] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Click" [onclick] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__ondblclick(HTMLElement) {
  // >> START OF "City -> On Double Click" [ondblclick] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Double Click" [ondblclick] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onkeydown(HTMLElement) {
  // >> START OF "City -> On Key Down" [onkeydown] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Key Down" [onkeydown] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onkeypress(HTMLElement) {
  // >> START OF "City -> On Key Press" [onkeypress] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Key Press" [onkeypress] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onkeyup(HTMLElement) {
  // >> START OF "City -> On Key Up" [onkeyup] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Key Up" [onkeyup] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onchange(HTMLElement) {
  // >> START OF "City -> On Change" [onchange] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Change" [onchange] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onmousedown(HTMLElement) {
  // >> START OF "City -> On Mouse Down" [onmousedown] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Mouse Down" [onmousedown] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onmousemove(HTMLElement) {
  // >> START OF "City -> On Mouse Move" [onmousemove] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Mouse Move" [onmousemove] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onmouseout(HTMLElement) {
  // >> START OF "City -> On Mouse Out" [onmouseout] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Mouse Out" [onmouseout] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onmouseover(HTMLElement) {
  // >> START OF "City -> On Mouse Over" [onmouseover] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Mouse Over" [onmouseover] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onmouseup(HTMLElement) {
  // >> START OF "City -> On Mouse Up" [onmouseup] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Mouse Up" [onmouseup] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}
function usrEvent__City__onselect(HTMLElement) {
  // >> START OF "City -> On Select" [onselect] [City] [START] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
  // << END OF "City -> On Select" [onselect] [City] [STOP] [JS] [35574115-5787-40BC-B91C-298D989DE6ED]
}

function usrEvent__Country__onfocus(HTMLElement) {
  // >> START OF "Country -> On Focus" [onfocus] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Focus" [onfocus] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onblur(HTMLElement) {
  // >> START OF "Country -> On Blur (loss of focus)" [onblur] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Blur (loss of focus)" [onblur] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onclick(HTMLElement) {
  // >> START OF "Country -> On Click" [onclick] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Click" [onclick] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__ondblclick(HTMLElement) {
  // >> START OF "Country -> On Double Click" [ondblclick] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Double Click" [ondblclick] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onkeydown(HTMLElement) {
  // >> START OF "Country -> On Key Down" [onkeydown] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Key Down" [onkeydown] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onkeypress(HTMLElement) {
  // >> START OF "Country -> On Key Press" [onkeypress] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Key Press" [onkeypress] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onkeyup(HTMLElement) {
  // >> START OF "Country -> On Key Up" [onkeyup] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Key Up" [onkeyup] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onchange(HTMLElement) {
  // >> START OF "Country -> On Change" [onchange] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Change" [onchange] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onmousedown(HTMLElement) {
  // >> START OF "Country -> On Mouse Down" [onmousedown] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Mouse Down" [onmousedown] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onmousemove(HTMLElement) {
  // >> START OF "Country -> On Mouse Move" [onmousemove] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Mouse Move" [onmousemove] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onmouseout(HTMLElement) {
  // >> START OF "Country -> On Mouse Out" [onmouseout] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Mouse Out" [onmouseout] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onmouseover(HTMLElement) {
  // >> START OF "Country -> On Mouse Over" [onmouseover] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Mouse Over" [onmouseover] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onmouseup(HTMLElement) {
  // >> START OF "Country -> On Mouse Up" [onmouseup] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Mouse Up" [onmouseup] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}
function usrEvent__Country__onselect(HTMLElement) {
  // >> START OF "Country -> On Select" [onselect] [Country] [START] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
  // << END OF "Country -> On Select" [onselect] [Country] [STOP] [JS] [621F7DCF-226B-4882-835D-16ED43DBE308]
}

function usrEvent__Phone__onfocus(HTMLElement) {
  // >> START OF "Phone -> On Focus" [onfocus] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Focus" [onfocus] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onblur(HTMLElement) {
  // >> START OF "Phone -> On Blur (loss of focus)" [onblur] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Blur (loss of focus)" [onblur] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onclick(HTMLElement) {
  // >> START OF "Phone -> On Click" [onclick] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Click" [onclick] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__ondblclick(HTMLElement) {
  // >> START OF "Phone -> On Double Click" [ondblclick] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Double Click" [ondblclick] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onkeydown(HTMLElement) {
  // >> START OF "Phone -> On Key Down" [onkeydown] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Key Down" [onkeydown] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onkeypress(HTMLElement) {
  // >> START OF "Phone -> On Key Press" [onkeypress] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Key Press" [onkeypress] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onkeyup(HTMLElement) {
  // >> START OF "Phone -> On Key Up" [onkeyup] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Key Up" [onkeyup] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onchange(HTMLElement) {
  // >> START OF "Phone -> On Change" [onchange] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Change" [onchange] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onmousedown(HTMLElement) {
  // >> START OF "Phone -> On Mouse Down" [onmousedown] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Mouse Down" [onmousedown] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onmousemove(HTMLElement) {
  // >> START OF "Phone -> On Mouse Move" [onmousemove] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Mouse Move" [onmousemove] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onmouseout(HTMLElement) {
  // >> START OF "Phone -> On Mouse Out" [onmouseout] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Mouse Out" [onmouseout] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onmouseover(HTMLElement) {
  // >> START OF "Phone -> On Mouse Over" [onmouseover] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Mouse Over" [onmouseover] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onmouseup(HTMLElement) {
  // >> START OF "Phone -> On Mouse Up" [onmouseup] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Mouse Up" [onmouseup] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}
function usrEvent__Phone__onselect(HTMLElement) {
  // >> START OF "Phone -> On Select" [onselect] [Phone] [START] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
  // << END OF "Phone -> On Select" [onselect] [Phone] [STOP] [JS] [10701D40-7EFC-4E23-AE80-614F25760CA7]
}

function usrEvent__PhoneExt__onfocus(HTMLElement) {
  // >> START OF "PhoneExt -> On Focus" [onfocus] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Focus" [onfocus] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onblur(HTMLElement) {
  // >> START OF "PhoneExt -> On Blur (loss of focus)" [onblur] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Blur (loss of focus)" [onblur] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onclick(HTMLElement) {
  // >> START OF "PhoneExt -> On Click" [onclick] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Click" [onclick] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__ondblclick(HTMLElement) {
  // >> START OF "PhoneExt -> On Double Click" [ondblclick] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Double Click" [ondblclick] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onkeydown(HTMLElement) {
  // >> START OF "PhoneExt -> On Key Down" [onkeydown] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Key Down" [onkeydown] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onkeypress(HTMLElement) {
  // >> START OF "PhoneExt -> On Key Press" [onkeypress] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Key Press" [onkeypress] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onkeyup(HTMLElement) {
  // >> START OF "PhoneExt -> On Key Up" [onkeyup] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Key Up" [onkeyup] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onchange(HTMLElement) {
  // >> START OF "PhoneExt -> On Change" [onchange] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Change" [onchange] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onmousedown(HTMLElement) {
  // >> START OF "PhoneExt -> On Mouse Down" [onmousedown] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Mouse Down" [onmousedown] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onmousemove(HTMLElement) {
  // >> START OF "PhoneExt -> On Mouse Move" [onmousemove] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Mouse Move" [onmousemove] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onmouseout(HTMLElement) {
  // >> START OF "PhoneExt -> On Mouse Out" [onmouseout] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Mouse Out" [onmouseout] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onmouseover(HTMLElement) {
  // >> START OF "PhoneExt -> On Mouse Over" [onmouseover] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Mouse Over" [onmouseover] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onmouseup(HTMLElement) {
  // >> START OF "PhoneExt -> On Mouse Up" [onmouseup] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Mouse Up" [onmouseup] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}
function usrEvent__PhoneExt__onselect(HTMLElement) {
  // >> START OF "PhoneExt -> On Select" [onselect] [PhoneExt] [START] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
  // << END OF "PhoneExt -> On Select" [onselect] [PhoneExt] [STOP] [JS] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855]
}

function usrEvent__MobileNo__onfocus(HTMLElement) {
  // >> START OF "MobileNo -> On Focus" [onfocus] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Focus" [onfocus] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onblur(HTMLElement) {
  // >> START OF "MobileNo -> On Blur (loss of focus)" [onblur] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Blur (loss of focus)" [onblur] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onclick(HTMLElement) {
  // >> START OF "MobileNo -> On Click" [onclick] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Click" [onclick] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__ondblclick(HTMLElement) {
  // >> START OF "MobileNo -> On Double Click" [ondblclick] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Double Click" [ondblclick] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onkeydown(HTMLElement) {
  // >> START OF "MobileNo -> On Key Down" [onkeydown] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Key Down" [onkeydown] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onkeypress(HTMLElement) {
  // >> START OF "MobileNo -> On Key Press" [onkeypress] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Key Press" [onkeypress] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onkeyup(HTMLElement) {
  // >> START OF "MobileNo -> On Key Up" [onkeyup] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Key Up" [onkeyup] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onchange(HTMLElement) {
  // >> START OF "MobileNo -> On Change" [onchange] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Change" [onchange] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onmousedown(HTMLElement) {
  // >> START OF "MobileNo -> On Mouse Down" [onmousedown] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Mouse Down" [onmousedown] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onmousemove(HTMLElement) {
  // >> START OF "MobileNo -> On Mouse Move" [onmousemove] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Mouse Move" [onmousemove] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onmouseout(HTMLElement) {
  // >> START OF "MobileNo -> On Mouse Out" [onmouseout] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Mouse Out" [onmouseout] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onmouseover(HTMLElement) {
  // >> START OF "MobileNo -> On Mouse Over" [onmouseover] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Mouse Over" [onmouseover] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onmouseup(HTMLElement) {
  // >> START OF "MobileNo -> On Mouse Up" [onmouseup] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Mouse Up" [onmouseup] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}
function usrEvent__MobileNo__onselect(HTMLElement) {
  // >> START OF "MobileNo -> On Select" [onselect] [MobileNo] [START] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
  // << END OF "MobileNo -> On Select" [onselect] [MobileNo] [STOP] [JS] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218]
}


function usrEvent__Add_Pig__onsubmit(frm) {
  // >> START OF "Add Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
  // << END OF "Add Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
}



function usrEvent__Add_Pig__onreset() {
  // >> START OF "Add Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
  // << END OF "Add Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [1B213019-DC7B-40AE-AB03-991F74A7C98F]
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

<script language='javascript' src='qwikcalendar.js'></script>
<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>

</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<CENTER>
<center><hr /><font size="5">
Add Pig
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>


<script>
function getURLParam(strParamName){
var strReturn = "";
var strHref = window.location.href;
if ( strHref.indexOf("?") > -1 ){
  var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
  var aQueryString = strQueryString.split("&");
  for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
    if (
	aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
      var aParam = aQueryString[iParam].split("=");
      strReturn = aParam[1];
      break;
    }
  }
}
return strReturn;
}
</script>


<!--inlineFormStart-->
<Form name="qs_add_form" method="post" action="./pig_add.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before add data form" [ADDFRM001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add data form" [ADDFRM001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<?php
print $hidden_tag;
?>
<Table Border="0" Cellpadding="4" Cellspacing="1" BgColor="#C0C0C0">

<?php
$css_class = "\"TrOdd Pig_3_OddDataText\"";
?>
<tr>
<td colspan="2" class="ThRows Pig_3_TableTitle">Add Pig</td>
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
<td class="ThRows Pig_3_TableText"><span id="Pig_3_EmployeeCode_label">EmployeeCode</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd0"])) && (!isset($_POST["add_fd0"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd0");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd0\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"10\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "EmployeeCode -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [08C5F38E-B626-4855-A1E1-F76F9F95BB54] [EmployeeCode]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "EmployeeCode -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [08C5F38E-B626-4855-A1E1-F76F9F95BB54] [EmployeeCode] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_EmployeeCode_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_FirstName_label">FirstName</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd1"])) && (!isset($_POST["add_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd1");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd1\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5] [FirstName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [CBADE195-FFDF-4DB1-8D2F-98CDEF1A4EF5] [FirstName] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_FirstName_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_LastName_label">LastName</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd2"])) && (!isset($_POST["add_fd2"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd2");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [886DC34E-C941-4F04-83F6-92DE391B2BEE] [LastName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [886DC34E-C941-4F04-83F6-92DE391B2BEE] [LastName] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_LastName_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_Title_label">Title</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd3"])) && (!isset($_POST["add_fd3"]))) {
    $itemvalue = "";
        if ($itemvalue == "") {
            $itemvalue = qsconvertdate(date("Y-m-d h:i:s"),"mm/dd/yyyy");
        }
} else {
    $itemvalue = qsrequest("add_fd3");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd3\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\"><a href=\"#add_fd3\"><a name=\"add_fd3\"><img src=\"images/Calendar.gif\" width=\"20\" height=\"21\" border=0 align=\"absmiddle\" onClick=\"popUpCalendar(this, qs_form.add_fd3, 'mm/dd/yyyy', 0, 0)\"></a><input type=\"hidden\" name=\"add_fd3_DateFormat\" value=\"mm/dd/yyyy\" />";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4A562E56-622F-4243-B4E0-885A9C4B5757] [Title]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4A562E56-622F-4243-B4E0-885A9C4B5757] [Title] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_Title_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_Department_label">Department</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd4"])) && (!isset($_POST["add_fd4"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd4");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd4\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7] [Department]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [10B9A354-9519-4F11-9DD2-5AD1271B4EA7] [Department] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_Department_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_Address_label">Address</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd5"])) && (!isset($_POST["add_fd5"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd5");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd5\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"40\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D] [Address]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [CFC160F7-A10B-4516-BC26-06A54AB0AD2D] [Address] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_Address_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_City_label">City</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd6"])) && (!isset($_POST["add_fd6"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd6");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [35574115-5787-40BC-B91C-298D989DE6ED] [City]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [35574115-5787-40BC-B91C-298D989DE6ED] [City] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_City_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_Country_label">Country</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd7"])) && (!isset($_POST["add_fd7"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd7");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd7\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [621F7DCF-226B-4882-835D-16ED43DBE308] [Country]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [621F7DCF-226B-4882-835D-16ED43DBE308] [Country] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_Country_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_Phone_label">Phone</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd8"])) && (!isset($_POST["add_fd8"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd8");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd8\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [10701D40-7EFC-4E23-AE80-614F25760CA7] [Phone]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [10701D40-7EFC-4E23-AE80-614F25760CA7] [Phone] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_Phone_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_PhoneExt_label">PhoneExt</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd9"])) && (!isset($_POST["add_fd9"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd9");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd9\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855] [PhoneExt]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [11D7EF6C-DDD7-42B5-8B0E-C0E7582DB855] [PhoneExt] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_PhoneExt_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<tr>
<td class="ThRows Pig_3_TableText"><span id="Pig_3_MobileNo_label">MobileNo</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["add_fd10"])) && (!isset($_POST["add_fd10"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd10");
}

    $cellvalue = "<input type=\"text\" name=\"add_fd10\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218] [MobileNo]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [6C1A8C47-649C-4740-A3AC-FFFF84CFB218] [MobileNo] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_3_MobileNo_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./pig.php?";
?>
<tr>
<td class="ThRows Pig_3_TableText">&nbsp;</td>
<td class="ThRows Pig_3_TableButtons">
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Add">&nbsp;&nbsp;
<input type="reset" name="QS_Reset" value="Reset">
</td>
</tr>
</Table><br>
</Form>
<!--inlineFormEnd-->
<?php
// >> START OF "after add data form" [ADDFRM001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add data form" [ADDFRM001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<?php
if ($result > 0) {odbc_free_result($result);}
if ($conn > 0) {odbc_close($conn);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
</Center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" align="center" valign="middle" background="images/bg_buttom.gif"><font size="2"><strong><font color="#000000">Copyright 
      2018.</font></strong></font></td>
  </tr>
</table>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [1B213019-DC7B-40AE-AB03-991F74A7C98F] [Add Pig] END>>
?>
