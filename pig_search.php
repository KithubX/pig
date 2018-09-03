<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
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
#  Page Name.................: Find Pig
#  Page Type.................: 2 - Search Page
#  Page GUID.................: 750CEC55-D7DF-45AC-9B9B-74B3AB627FA8
#  Page SerialID.............: 405
#  Page File Name............: pig_search
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:05:04
#  Language..................: PHP
#   
#  1 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Employee Name                            | 2   | [FirstName],[LastName]                   | Employee_Name                            |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
$row = "";
$err_string = "";
$strkeyword = "";
$sortstring = "";
$icon = "";
//Check security login 
$pagesecure_level = 1;
// >> START OF "on set page secure level" [SECLVL001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on set page secure level" [SECLVL001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

// >> START OF "before check logout request" [SECCHK001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check logout request" [SECCHK001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

if (strtoupper(qsrequest("logout"))=="Y") {
    $_SESSION["UserLevel"] = 0;
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["UserLogon"] = "";
    $_SESSION["RedirectURL"] = qssession("firstredirecturl");
    header ("Location: ./global_group_login.php");
// >> START OF "on logout redirect" [SECREDIR001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on logout redirect" [SECREDIR001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

    exit();
}
// >> START OF "after check logout request" [SECCHK001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check logout request" [SECCHK001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

// >> START OF "before check login status" [SECCHK002] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check login status" [SECCHK002] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

if (qssession("Logon") != "TRUE") {
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_search").".php?" . qsservervars("QUERY_STRING");
    header ("Location: ./global_group_login.php");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

    exit();
}
// >> START OF "after check login status" [SECCHK002] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check login status" [SECCHK002] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

if (qssession("UserLevel") == "") {
    $_SESSION["UserLevel"] = 0;
}
if (qssession("UserLevel") < $pagesecure_level) {
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig_search").".php?" . qsservervars("QUERY_STRING");
    include_once('global_group_login.php');
// >> START OF "on secure level redirect" [SECREDIR003] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on secure level redirect" [SECREDIR003] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>

    exit();
}
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>


$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "EmployeeCode";
$fields[1] = "FirstName";
$fields[2] = "LastName";
$fields[3] = "Title";
$fields[4] = "Department";
$fields[5] = "Address";
$fields[6] = "City";
$fields[7] = "Country";
$fields[8] = "Phone";
$fields[9] = "PhoneExt";
$fields[10] = "MobileNo";
$arryitemvalue = array();
$arryitemvalue[0] = "";
$arryitemvalue[1] = "";
$arryitemvalue[2] = "";
$arryitemvalue[3] = "";
$arryitemvalue[4] = "";
$arryitemvalue[5] = "";
$arryitemvalue[6] = "";
$arryitemvalue[7] = "";
$arryitemvalue[8] = "";
$arryitemvalue[9] = "";
$arryitemvalue[10] = "";
$arryopt = array();
$arryopt[0] = "";
$arryopt[1] = "";
$arryopt[2] = "";
$arryopt[3] = "";
$arryopt[4] = "";
$arryopt[5] = "";
$arryopt[6] = "";
$arryopt[7] = "";
$arryopt[8] = "";
$arryopt[9] = "";
$arryopt[10] = "";
$arryandoropt = array();
$arryandoropt[0] = "";
$arryandoropt[1] = "";
$arryandoropt[2] = "";
$arryandoropt[3] = "";
$arryandoropt[4] = "";
$arryandoropt[5] = "";
$arryandoropt[6] = "";
$arryandoropt[7] = "";
$arryandoropt[8] = "";
$arryandoropt[9] = "";
$arryandoropt[10] = "";
//Field Related Declarations
$req_Employee_Name   = "search_fd1";

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

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
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


if (strpos(strtoupper($sql), "WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
$result = odbc_exec($conn,$sqltemp . $sql_ext)
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
if (isset($_POST["act"])) {
    $_SESSION["pig_pig"] = "";
    $_SESSION["pig_pig_PageNumber"] = "";
    $filter_string = "";
    $qry_string = "";
    $i = 0;
    while ($i < odbc_num_fields($result)) {
        $meta = odbc_field_name($result, $i + 1);
        $field_name = $meta;
        $field_type = odbc_field_type($result, $i + 1);
        //get field type
        $type_field = "";
        $type_field = returntype($field_type);
        //clear session
        $_SESSION["pig_search_fd" . $i] = "";
        $_SESSION["pig_multisearch_fd" . $i] = "";
        $_SESSION["pig_search_fd_" . $i] = "";
        if ((qsrequest("search_fd" . $i) != "") && (qsrequest("search_fd" . $i) != "*")) {
            $idata = qsrequest("search_fd" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd".$i) != "") {
              $idata = qsrequest("search_optfd". $i) . $idata ;
            }
            $iopt = substr($idata, 0, 2);
            if (($iopt == "<=") || ($iopt == "=<")) {
                $iopt = "<=";
                $irealdata = substr($idata, 2);
            } elseif (($iopt == ">=") || ($iopt == "=>")) {
                $iopt = ">=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "==") {
                $iopt = "=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "<>") {
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "^^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata . $iopt; // Contain
                  } elseif ($iopt == "^*") {
                      $iopt = "*";
            	$idata =  $irealdata . $iopt; // Start With
                  } elseif ($iopt == "*^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata ; // End With
            } else {
                $iopt = substr($idata, 0, 1);
                if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                    $irealdata = substr($idata,1);
                } else {
                    $iopt = "=";
                }
            }
            if (qsrequest("andor_optfd".$i) != "") {
                $idata = qsrequest("andor_optfd". $i) . $idata ;
            }
        if (!strcasecmp($idata,"{current date and time}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current date}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current time}")) {
            $idata = time();
        }
            if ($meta) {
                if ($type_field == "type_datetime") {
                    if ((($timestamp = strtotime($irealdata)) !== -1)) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                            $filter_string = $field_name . " like '%" . $idata . "%'";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                            $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                        }
                        if (qsrequest("search_fd" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Invalid DateTime.<br>";
                    }
                } elseif ($type_field == "type_integer") {
                			$isNumeric = false;
                			if(strpos( $irealdata , "+" )) {
                					$isNumeric = true;
                					$intArray = explode("+", $irealdata);
                					foreach ($intArray as $elem) {
                         		if (!is_numeric($elem))
                									$isNumeric = false;
                					}
                			}
                     if (is_numeric($irealdata)  or $isNumeric == true  ) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                            $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                            $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                        }
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                    }
                } elseif ($type_field == "type_string") {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                        $filter_string = $field_name . " like '" . $irealdata . "%'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                        $filter_string .= " and " . $field_name . " like '" . $irealdata . "%'";
                    }
                } else {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                        $filter_string = $field_name . " = '" . $irealdata . "'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                        $filter_string .= " and " . $field_name . " = '" . $irealdata . "'";
                    }
                }
            }
        }
        if (qsrequest("multisearch_fd" . $i) != "") {
            if ($qry_string == "") {
                $qry_string = "multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            } else {
                $qry_string = $qry_string . "&multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            }
        }
        //begin search between see variable 'search_fd_(n)'
        if (qsrequest("search_fd_" . $i) != "") {
            $idata = qsrequest("search_fd_" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd_".$i) != "") {
                $idata = qsrequest("search_optfd_". $i) . $idata ;
            }
            $iopt = qsrequest("search_optfd_". $i);
            if ($meta) {
                if ($type_field == "type_datetime") {
                   if ((($timestamp = strtotime($irealdata)) !== -1)) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string = $field_name . " like '%" . $idata . "%'";
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                       }
                        if (qsrequest("search_fd_" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd_" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd_" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                   } else {
                       $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                       $err_string .= "Description: Invalid DateTime.<br>";
                   }
                } elseif ($type_field == "type_integer") {
                		 $isNumeric = false;
                		 if(strpos( $irealdata , "+" )) {
                				$isNumeric = true;
                				$intArray = explode("+", $irealdata);
                				foreach ($intArray as $elem) {
                          if (!is_numeric($elem))
                									$isNumeric = false;
                				}
                			}
                     if (is_numeric($irealdata)  or $isNumeric == true  ) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . urlencode(stripslashes($idata));
                           $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . urlencode(stripslashes($idata));
                           $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                       }
                   } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                   }
               }
           }
        }
        $i++;
    }
    if ($result > 0) {odbc_free_result($result);}
  if (qsrequest("search_sort") <> "") {
	    $sortstring = qsrequest("search_sort");
  }
  if (qsrequest("page_size") <> "") {
	    $page_size = qsrequest("page_size");
  }
#----get submit url page----
    $submiturl = "./pig.php?";
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
        header ("Location: $URL");
        exit;
    }
} else {
    $sortstring  = "";
    if (qssession("sortfield") != "") {
         $sortstring = "&sortfield=" . urlencode(stripslashes(qssession("sortfield"))) . "&sortby=" . urlencode(stripslashes(qssession("sortby")));
    }
    if (qssession("page_size") != "") {
         $page_size = urlencode(stripslashes(qssession("page_size")));
    }
    $i=0;
    while ($i < odbc_num_fields($result)) {
$strkeyword = "";
$iopt = "";
$idata = "";
if ((!isset($_GET["search_fd".$i])) && (!isset($_POST["search_fd".$i]))) {
    $arryitemvalue[$i] = "";
    $arryopt[$i]="";
} else {
    # Check value for advance search
    $idata = qsrequest("search_fd" . $i);
    $icon = "";
    if (substr($idata, 0, 2) == "||") {
        $icon = "||";
        $idata = substr($idata, 2);
    }
    $iopt = substr($idata, 0, 2); // Get 2 of left keyword
    if (($iopt == "<=") || ($iopt == "=<")){
        $iopt  = "<=";
        $strkeyword = substr($idata, 2);
    }elseif (($iopt == ">=") || ($iopt == "=>")){
        $iopt = ">=";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "==" ){
        $iopt = "==";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "<>"){
        $strkeyword = substr($idata, 2);
    } else {
        $startstrdata = substr($idata,0,1) ;
        $endstrdata = $idata[strlen($idata) - 1];
        if (($startstrdata != "%" ) && ($endstrdata != "%")){
            if (($startstrdata == "<") || ($startstrdata == ">") || ($startstrdata == "=")) {
                if ($startstrdata == "<") {
                    $strkeyword = str_replace("<","", $idata) ;
                    $iopt = "<";
                }elseif($startstrdata == ">")  {
                    $strkeyword = str_replace(">","", $idata) ;
                    $iopt = ">";
                } else {
                    $strkeyword = str_replace("=","", $idata) ;
                    $iopt = "=";
                }
            }else {
                $arryitemvalue[$i] = $idata;
                $strkeyword = $idata;
            }
        }else {
            if (($startstrdata == "%" ) && ($endstrdata == "%")) {  # Contain Case
                $startstrdata = str_replace("%","", $idata) ;
                $strkeyword  = substr($idata,1, (strlen($idata)-2));
                $iopt = "^^" ;
            }elseif (($startstrdata != "%" ) && ($endstrdata == "%")) {  # Start With Case xx*
                $strkeyword  = substr($idata,0, (strlen($idata)-1));
                $iopt = "^*";
            }elseif (($startstrdata == "%" ) && ($endstrdata != "%")) { # End With Case *xx
                $strkeyword  = substr($idata,1, (strlen($idata)));
                $iopt = "*^";
            }
        }// end eheck one charator
   }//end of check 2 first character
   $arryitemvalue[$i] = $strkeyword;
   $arryopt[$i] = $iopt;
   $arryandoropt[$i] = $icon;
}
$i += 1;
}// end while
if ($result > 0) {odbc_free_result($result);}
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<Title>Find Pig</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<link rel="stylesheet" type="text/css" href="pig_search.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
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
var qsPageItemsCount = 1
var _Employee_Name                            = 0;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Employee_Name] = "Employee Name";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Employee_Name] = "Employee_Name";

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
  document.getElementsByName("search_fd1")[0].id = fieldTechNames[_Employee_Name];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_search_form")[0];   //Define Form Object by Name.
  pgitm_Employee_Name                      = document.getElementsByName("search_fd1")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Find Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]-->
<!-- << END OF "Find Pig -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]-->




<script>

function usrEvent__Find_Pig__onload() {
  // >> START OF "Find Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
  // << END OF "Find Pig -> On Load" [onload] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
}



function usrEvent__Find_Pig__onunload() {
  // >> START OF "Find Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
  // << END OF "Find Pig -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
}



function usrEvent__Find_Pig__onresize() {
  // >> START OF "Find Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
  // << END OF "Find Pig -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
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
  pgitm_Employee_Name.focus();
   return true;                                        
}                                                      


function usrEvent__Employee_Name__onfocus(HTMLElement) {
  // >> START OF "Employee Name -> On Focus" [onfocus] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Focus" [onfocus] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onblur(HTMLElement) {
  // >> START OF "Employee Name -> On Blur (loss of focus)" [onblur] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Blur (loss of focus)" [onblur] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onclick(HTMLElement) {
  // >> START OF "Employee Name -> On Click" [onclick] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Click" [onclick] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__ondblclick(HTMLElement) {
  // >> START OF "Employee Name -> On Double Click" [ondblclick] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Double Click" [ondblclick] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onkeydown(HTMLElement) {
  // >> START OF "Employee Name -> On Key Down" [onkeydown] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Key Down" [onkeydown] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onkeypress(HTMLElement) {
  // >> START OF "Employee Name -> On Key Press" [onkeypress] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Key Press" [onkeypress] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onkeyup(HTMLElement) {
  // >> START OF "Employee Name -> On Key Up" [onkeyup] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Key Up" [onkeyup] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onchange(HTMLElement) {
  // >> START OF "Employee Name -> On Change" [onchange] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Change" [onchange] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onmousedown(HTMLElement) {
  // >> START OF "Employee Name -> On Mouse Down" [onmousedown] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Mouse Down" [onmousedown] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onmousemove(HTMLElement) {
  // >> START OF "Employee Name -> On Mouse Move" [onmousemove] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Mouse Move" [onmousemove] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onmouseout(HTMLElement) {
  // >> START OF "Employee Name -> On Mouse Out" [onmouseout] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Mouse Out" [onmouseout] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onmouseover(HTMLElement) {
  // >> START OF "Employee Name -> On Mouse Over" [onmouseover] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Mouse Over" [onmouseover] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onmouseup(HTMLElement) {
  // >> START OF "Employee Name -> On Mouse Up" [onmouseup] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Mouse Up" [onmouseup] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}
function usrEvent__Employee_Name__onselect(HTMLElement) {
  // >> START OF "Employee Name -> On Select" [onselect] [Employee_Name] [START] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
  // << END OF "Employee Name -> On Select" [onselect] [Employee_Name] [STOP] [JS] [E2542575-0CAB-4D2B-9477-D79DF9AF1886]
}


function usrEvent__Find_Pig__onsubmit(frm) {
  // >> START OF "Find Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
  // << END OF "Find Pig -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
}



function usrEvent__Find_Pig__onreset() {
  // >> START OF "Find Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
  // << END OF "Find Pig -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8]
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
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>

<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<CENTER>
<center><hr /><font size="5">
Find Pig
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>

<A NAME=top></A>
<Form name="qs_search_form" method="post" action="./pig_search.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before search form" [FRMSRCH001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before search form" [FRMSRCH001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
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


<script language="javascript">
var nodeCount =1; var offsets = new Array(20);	 var textV = new Array(20);  var optSelect = -1;
function addSearchNode(thisNode,itemName) {
   var PNode = thisNode.parentNode.innerHTML;
   var PPNode = thisNode.parentNode.parentNode.innerHTML;
   var pos = PPNode.toLowerCase().indexOf('<span id');
   var $theForm = window.document.qs_search_form;
   if(offsets[itemName] == null) offsets[itemName]=1;
   PPNode = PPNode.slice(0,pos);
 	textV[0] = $theForm["search_fd"+itemName].value;
 	if(typeof $theForm["search_optfd"+itemName] != "undefined") {
 		optSelect = $theForm["search_optfd"+itemName].selectedIndex;
 	}
 	var tWidth = $theForm["search_fd"+itemName].size;
	  for(i=1;typeof $theForm["search_fd"+itemName+"_"+i] != "undefined";i++) {
			textV[i] = $theForm["search_fd"+itemName+"_"+i].value;
	  }
   newNode = PPNode+'&nbsp;&nbsp;OR&nbsp;&nbsp;<br /><input type="text" name="search_fd'+itemName+'_'+offsets[itemName]+'" size="'+tWidth+'" value="" /><span id="orSearch">'+PNode+'</span>';
   thisNode.parentNode.parentNode.innerHTML = newNode;
	  $theForm["search_fd"+itemName].value = textV[0];
	  if(optSelect != -1) {
	  $theForm["search_optfd"+itemName].selectedIndex = optSelect;
	  }
	  for(j=1; j<i; j++) {
			$theForm["search_fd"+itemName+"_"+j].value = textV[j];
	  }
   offsets[itemName] ++;
}
</script>
<Table Border="0" Cellpadding="4" Cellspacing="1" BgColor="#C0C0C0">

<tr>
<td colspan="2" class="ThRows Pig_2_TableTitle">Find Pig</td>
</tr>
<?php
$css_class = "\"TrOdd Pig_2_OddDataText\"";
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows Pig_2_TableText"><span id="Pig_2_Employee_Name_label">Employee Name</span></td>

<?php
$cellvalue = "";
if ((!isset($_GET["search_fd1"])) && (!isset($_POST["search_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[1];
}

    $cellvalue = "<input type=\"text\" name=\"search_fd1\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">" . "<input type=\"hidden\" name=\"multisearch_fd1\" value=\"2\">" . "";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Employee_Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E2542575-0CAB-4D2B-9477-D79DF9AF1886] [Employee_Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Employee_Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E2542575-0CAB-4D2B-9477-D79DF9AF1886] [Employee_Name] END>>

    print "<td class=" . $css_class . " style=\"text-align:Default\" ><span id=\"Pig_2_Employee_Name_value\"";
print ">" . $cellvalue . "</span></td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./pig.php?";
?>
<tr>
<td colspan="2" class="ThRows Pig_2_TableButtons">
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Search">&nbsp;&nbsp;
<input type="button" name="QS_Clear" value="Clear" OnClick="location='pig_search.php'">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after search form" [FRMSRCH001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after search form" [FRMSRCH001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
</Form>
<?php
if ($conn > 0) {odbc_close($conn);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
</Center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" align="center" valign="middle" background="images/bg_buttom.gif"><font size="2"><strong><font color="#000000">Copyright 
      2018.</font></strong></font></td>
  </tr>
</table>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [750CEC55-D7DF-45AC-9B9B-74B3AB627FA8] [Find Pig] END>>
?>
