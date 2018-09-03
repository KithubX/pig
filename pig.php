<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
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
#  Page Name.................: Pig Data
#  Page Type.................: 1 - Data Page
#  Page GUID.................: D452BDE1-AD96-461C-955F-CFB085919983
#  Page SerialID.............: 404
#  Page File Name............: pig
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:05:02
#  Language..................: PHP
#   
#  13 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Employee Code                            | 0   | [EmployeeCode]                           | Employee_Code                            |
#  |   1 | FirstName                                | 0   | [FirstName]                              | FirstName                                |
#  |   2 | LastName                                 | 0   | [LastName]                               | LastName                                 |
#  |   3 | Title                                    | 0   | [Title]                                  | Title                                    |
#  |   4 | Department                               | 0   | [Department]                             | Department                               |
#  |   5 | Address                                  | 0   | [Address]                                | Address                                  |
#  |   6 | City                                     | 0   | [City]                                   | City                                     |
#  |   7 | Country                                  | 0   | [Country]                                | Country                                  |
#  |   8 | Phone                                    | 0   | [Phone]                                  | Phone                                    |
#  |   9 | PhoneExt                                 | 0   | [PhoneExt]                               | PhoneExt                                 |
#  |  10 | MobileNo                                 | 0   | [MobileNo]                               | MobileNo                                 |
#  |  11 | Edit                                     | 0   | Edit                                     | Edit                                     |
#  |  12 | Delete                                   | 0   | Delete                                   | Delete                                   |
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

// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$_SESSION["SkipConnectMySQL"] = "";
// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
//Check security login 
$pagesecure_level = 1;
// >> START OF "on set page secure level" [SECLVL001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on set page secure level" [SECLVL001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

// >> START OF "before check logout request" [SECCHK001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check logout request" [SECCHK001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

if (strtoupper(qsrequest("logout"))=="Y") {
    $_SESSION["UserLevel"] = 0;
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["UserLogon"] = "";
    $_SESSION["RedirectURL"] = qssession("firstredirecturl");
    header ("Location: ./global_group_login.php");
// >> START OF "on logout redirect" [SECREDIR001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on logout redirect" [SECREDIR001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

    exit();
}
// >> START OF "after check logout request" [SECCHK001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check logout request" [SECCHK001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

// >> START OF "before check login status" [SECCHK002] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check login status" [SECCHK002] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

if (qssession("Logon") != "TRUE") {
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig").".php?" . qsservervars("QUERY_STRING");
    header ("Location: ./global_group_login.php");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

    exit();
}
// >> START OF "after check login status" [SECCHK002] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check login status" [SECCHK002] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

if (qssession("UserLevel") == "") {
    $_SESSION["UserLevel"] = 0;
}
if (qssession("UserLevel") < $pagesecure_level) {
    $_SESSION["Logon"] = "FALSE";
    $_SESSION["RedirectURL"] = "./" . rawurlencode("pig").".php?" . qsservervars("QUERY_STRING");
    include_once('global_group_login.php');
// >> START OF "on secure level redirect" [SECREDIR003] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on secure level redirect" [SECREDIR003] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

    exit();
}
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>


// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$err_string="";
$quotechar = "\"";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$SQL_GroupOnly = "";
$sqlmaster = "";
$sql_extmaster = "";
$cellvalue = "";
$istrdata = "";
$icon = "";
$ioldcon = "";
$sortstring = "";
$parammaster = array();
$fields = array();
$intColCount = 0;
$intColIndex = 0;
$fields[0] = "Employee.`EmployeeCode`";
$parammaster[0] = "";
$fields[1] = "Employee.`FirstName`";
$parammaster[1] = "";
$fields[2] = "Employee.`LastName`";
$parammaster[2] = "";
$fields[3] = "Employee.`Title`";
$parammaster[3] = "";
$fields[4] = "Employee.`Department`";
$parammaster[4] = "";
$fields[5] = "Employee.`Address`";
$parammaster[5] = "";
$fields[6] = "Employee.`City`";
$parammaster[6] = "";
$fields[7] = "Employee.`Country`";
$parammaster[7] = "";
$fields[8] = "Employee.`Phone`";
$parammaster[8] = "";
$fields[9] = "Employee.`PhoneExt`";
$parammaster[9] = "";
$fields[10] = "Employee.`MobileNo`";
$parammaster[10] = "";
$sql = $sql." Select"."\r\n";
$sql = $sql."     Employee.`EmployeeCode`,"."\r\n";
$sql = $sql."     Employee.`FirstName`,"."\r\n";
$sql = $sql."     Employee.`LastName`,"."\r\n";
$sql = $sql."     Employee.`Title`,"."\r\n";
$sql = $sql."     Employee.`Department`,"."\r\n";
$sql = $sql."     Employee.`Address`,"."\r\n";
$sql = $sql."     Employee.`City`,"."\r\n";
$sql = $sql."     Employee.`Country`,"."\r\n";
$sql = $sql."     Employee.`Phone`,"."\r\n";
$sql = $sql."     Employee.`PhoneExt`,"."\r\n";
$sql = $sql."     Employee.`MobileNo`"."\r\n";
$sql = $sql." From"."\r\n";
$sql = $sql."     Employee   Employee"."\r\n";



$searchmode = array();
$stdsearchopt = array();
$searchmode[0] = 0;
$stdsearchopt[0]=0;
$searchmode[1] = 0;
$stdsearchopt[1]=0;
$searchmode[2] = 0;
$stdsearchopt[2]=0;
$searchmode[3] = 0;
$stdsearchopt[3]=0;
$searchmode[4] = 0;
$stdsearchopt[4]=0;
$searchmode[5] = 0;
$stdsearchopt[5]=0;
$searchmode[6] = 0;
$stdsearchopt[6]=0;
$searchmode[7] = 0;
$stdsearchopt[7]=0;
$searchmode[8] = 0;
$stdsearchopt[8]=0;
$searchmode[9] = 0;
$stdsearchopt[9]=0;
$searchmode[10] = 0;
$stdsearchopt[10]=0;
//Field Related Declarations
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

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
if (strpos(strtoupper($sql), "WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
if(!$result = @odbc_exec($conn, $sqltemp . " " . $sql_ext)){
    $err_string .= "<strong>Error:</strong>while connecting to database<br>" . odbc_errormsg();
// >> START OF "on connect error" [DBCONNERR001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on connect error" [DBCONNERR001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
}
if ($err_string != "") {
    print "<Center><Table Border=\"0\" Cellspacing=\"1\" bgcolor=\"#CCCCCC\" >";
    print "<tr>";
    print "<td height=\"80\" align=\"Default\" bgcolor=\"#FFFFFF\">";
    print "<font color=\"#000099\" size=\"2\">";
    print $err_string;
    print "</font>";
    print "</td>";
    print "</tr>";
    print "</Table></Center>";
    exit;
} //==end if $err_string != ""
// >> START OF "before request clear session" [REQCLRSESS001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before request clear session" [REQCLRSESS001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
if (qsrequest("clearsession") == "1") {
// >> START OF "on clear session" [CLEARSESS001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on clear session" [CLEARSESS001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
    $_SESSION["pig_pig"] = "";
    $_SESSION["pig_pig_PageNumber"] = "";
} //==end if clearsession
// >> START OF "after request clear session" [REQCLRSESS001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after request clear session" [REQCLRSESS001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$filter_string = "";
$filter_stringmaster = "";
$qry_string = "";
$i = 0;
$searchendkey ="";
$searchstartkey = "";
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
while ($i < odbc_num_fields($result)) {
    $meta = odbc_field_name($result, $i + 1);
    $field_name = $meta;
    $field_type = odbc_field_type($result, $i + 1);
    $type_field = "";
    $type_field = returntype($field_type);
    if (($searchmode[$i])==0) { # 0 = Std, 1 = Advance
        if (($stdsearchopt[$i])==0) { //==0=Contain , 1 = Equal : for standard mode
            $searchstartkey = "%";
            $searchendkey = "%";
        } else {
            $searchstartkey = "";
            $searchendkey = "";
        }
    } else { //==end if searchmode = 0
        $searchstartkey= "";
        $searchendkey = "";
    } //==end if searchmode <> 0
    if (qsrequest("clearsession") == "1") {
        $_SESSION["pig_search_fd" . $i] = "";
        $_SESSION["pig_multisearch_fd" . $i] = "";
        $_SESSION["pig_search_fd_" . $i] = "";
        $_SESSION["pig_search_fd" . $i . "_DateFormat"] = "";
        $_SESSION["pig_search_fd_" . $i . "_DateFormat"] = "";
    } //==end if clearsession
    if (qsrequest("search_fd" . $i) != "") {
        $_SESSION["pig_search_fd" . $i] = qsrequest("search_fd" . $i);
    }
    if (qsrequest("multisearch_fd" . $i) != "") {
        $_SESSION["pig_multisearch_fd" . $i] = qsrequest("multisearch_fd" . $i);
    }
    if (qsrequest("search_fd_" . $i) != "") {
        $_SESSION["pig_search_fd_" . $i] = qsrequest("search_fd_" . $i);
    }
    //Prepare date format of each item search to Session
    if (qsrequest("search_fd" . $i . "_DateFormat") != "") { 
      $_SESSION["pig_search_fd" . $i . "_DateFormat"] = qsrequest("search_fd" . $i . "_DateFormat"); 
    }
    if (qsrequest("search_fd_" . $i . "_DateFormat") != "") { 
      $_SESSION["pig_search_fd_" . $i . "_DateFormat"] = qsrequest("search_fd_" . $i . "_DateFormat"); 
    }
    if ((qssession("pig_search_fd" . $i) != "") && (qssession("pig_search_fd" . $i) != "*")) {
        $idata = qssession("pig_search_fd" . $i);
        $icon = " AND ";
        $ioldcon = "";
        if (substr($idata, 0, 2) == "||") {
            $icon = " Or ";
            $ioldcon = "||";
            $iopt = substr($idata, 2, 2);
            $idata = substr($idata, 2);
        }else{
            $iopt = substr($idata, 0, 2);
        }
        $idata = str_replace("*", "%", $idata);
        $irealdata = $idata;
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
        } else {
            $iopt = substr($idata, 0, 1);
            if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                $irealdata = substr($idata,1);
            } else {
                $iopt = "=";
            }
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
                    if (($iopt)=="="){
                        $conditionstr = " = ";
                    		 $istrdata = str_replace("=", "", $istrdata);
                    } else {
                        $conditionstr = $iopt;
                    		 $istrdata = $irealdata;
                    		 $searchstartkey = "";
                    		 $searchendkey   = "";
                    }
                    //Prepare  date format for each item search then convert to compatible format 
                    if (qssession("pig_search_fd" . $i . "_DateFormat") != ""){ 
                      $iDateFormat = qssession("pig_search_fd" . $i . "_DateFormat"); 
                    } else { 
                      $iDateFormat = ""; 
                    } 
                    if ((qssession("pig_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("pig_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . $conditionstr . " ". $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " ". $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                            $filter_string .= ")";
                        }
                    } else {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string = $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster = $parammaster[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string .= $icon . $fields[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster .= $icon . $parammaster[$i]  . $conditionstr . " " . $quotedate . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $quotedate;
                            }
                        }
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Invalid DateTime.<br>";
                }
            //==end $type_field == "type_datetime"
            } elseif ($type_field == "type_integer") {
                $irealdata = str_replace("%", "", $irealdata);
                if (is_numeric($irealdata) or strpos( $irealdata , "+" )) {
								 		if(strpos( $irealdata , "+" )) {
								 				$searcharray = explode("+", $irealdata);
                				if ($qry_string == "") {
                   				$qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode($searcharray[0]);
                   				$filter_string = "(". $fields[$i] ." ". $iopt ." ". $searcharray[0];
                       		for ($j = 1; $j < count($searcharray); $j++) {
                           	$filter_string .= " OR " . $fields[$i] ." ". $iopt ." ". $searcharray[$j];
                       		}
                       		$filter_string .= " )";
                   		} else {
                       		$qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode($searcharray[0]);
                       		$filter_string .= " AND (". $fields[$i] ." ". $iopt ." ". $searcharray[0];
                       		for ($j = 1; $j < count($searcharray); $j++) {
                           	$filter_string .= " OR " . $fields[$i] ." ". $iopt ." ". $searcharray[$j];
                       		}
                       		$filter_string .= ")";
                   			}
                    } else if ((qssession("pig_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("pig_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode($idata);
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . " " . $iopt . " " . $irealdata;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex] . " " . $iopt . " " . $irealdata;
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode($idata);
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i] . " " . $iopt . " " . $irealdata;
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex] . " " . $iopt . " " . $irealdata;
                            }
                            $filter_string .= ")";
                        }
                    } else {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode($idata);
                            $filter_string = $fields[$i] . " " . $iopt . " " . $irealdata;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster = $parammaster[$i] . " " . $iopt . " " . $irealdata;
                            }
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode($idata);
                            $filter_string .= $icon . $fields[$i] . " " . $iopt . " " . $irealdata;
                            if ($parammaster[$i] != ""){
                                $filter_stringmaster .= $icon . $parammaster[$i] . " " . $iopt . " " . $irealdata;
                            }
                        }
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            //==end $type_field == "type_integer"
            } elseif ($type_field == "type_string") {
                if (($iopt)=="="){
                    $conditionstr = " Like ";
                    	 $istrdata = str_replace("=", "", $istrdata);
                 } else {
                      $conditionstr = $iopt;
                  		 $istrdata = $irealdata;
                  		 $searchstartkey = "";
                  		 $searchendkey   = "";
                 }
                 if ((qssession("pig_multisearch_fd" . $i) != "")) {
                        $multisearch = qssession("pig_multisearch_fd" . $i);
                        $searcharray = split(",",$multisearch);
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string = "(" . $fields[$i] . $conditionstr . " '" .$searchstartkey.  preg_replace("/'/","''",stripslashes($irealdata)). $searchendkey . "'";
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " '" .$searchstartkey.  preg_replace("/'/","''",stripslashes($irealdata)). $searchendkey . "'";
                            }
                            $filter_string .= ")";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                            $filter_string .= " AND (" . $fields[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            $j = 0;
                            for ($j = 0; $j < count($searcharray); $j++) {
                                $searchindex = $searcharray[$j];
                                $filter_string .= " OR " . $fields[$searchindex]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                            $filter_string .= ")";
                        }
                    } else {
												if(strpos( $irealdata , "+" )) {
													$temp = $irealdata;
													if (substr($temp,0,1) == "%")
												   	$searchstartkey = "%";
													if (substr($temp,-1) == "%")
												   	$searchendkey = "%";
												   	$temp = str_replace("%","",$temp);
													$searcharray = explode("+", $temp);
                   			if ($qry_string == "") {
                       		$qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                       		$filter_string = "(" . $fields[$i] . $conditionstr . " '" .$searchstartkey.  preg_replace("/'/","''",stripslashes($searcharray[0])). $searchendkey . "'";
                       		for ($j = 1; $j < count($searcharray); $j++) {
                           	$filter_string .= " OR " . $fields[$i]  . $conditionstr . " '" .$searchstartkey.  preg_replace("/'/","''",stripslashes($searcharray[$j])). $searchendkey . "'";
                       		}
                       		$filter_string .= ")";
                   			} else {
                       		$qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                       		$filter_string .= " AND (" . $fields[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($searcharray[0])) . $searchendkey . "'";
                       		for ($j = 1; $j < count($searcharray); $j++) {
                           	$filter_string .= " OR " . $fields[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($searcharray[$j])) . $searchendkey . "'";
                       		}
                       		$filter_string .= ")";
                   			}
												} else {
                        	if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string = $fields[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            if ($parammaster[$i] != ""){
                                 $filter_stringmaster = $parammaster[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                        	} else {
                            $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                            $filter_string .= $icon . $fields[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            if ($parammaster[$i] != ""){
                                 $filter_stringmaster .= $icon . $parammaster[$i]  . $conditionstr . " '" .$searchstartkey. preg_replace("/'/","''",stripslashes($irealdata)) . $searchendkey . "'";
                            }
                        	}
                    }
                }
            //==end $type_field == "type_string"
            } else {
                if ((qssession("pig_multisearch_fd" . $i) != "")) {
                    $multisearch = qssession("pig_multisearch_fd" . $i);
                    $searcharray = split(",",$multisearch);
                    $irealdata = str_replace("%", "",  $irealdata);
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                        $filter_string = "(" . $fields[$i] . " = '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        $j = 0;
                        for ($j = 0; $j < count($searcharray); $j++) {
                            $searchindex = $searcharray[$j];
                            $filter_string .= " OR " . $fields[$searchindex] . " = '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        }
                        $filter_string .= ")";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $qry_string .= "&multisearch_fd" . $i . "=" . qssession("pig_multisearch_fd" . $i);
                        $filter_string .= " AND (" . $fields[$i] . " = '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        $j = 0;
                        for ($j = 0; $j < count($searcharray); $j++) {
                            $searchindex = $searcharray[$j];
                            $filter_string .= " OR " . $fields[$searchindex] . " = '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        }
                        $filter_string .= ")";
                    }
                } else {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $filter_string = $fields[$i] . " like '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        if ($parammaster[$i] != ""){
                            $filter_stringmaster = $parammaster[$i] . " like '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        }
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . $ioldcon . urlencode(stripslashes($idata));
                        $filter_string .= $icon . $fields[$i] . " like '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        if ($parammaster[$i] != ""){
                            $filter_stringmaster .= $icon . $parammaster[$i] . " like '" . preg_replace("/'/","''",stripslashes($irealdata)) . "'";
                        }
                    }
                }
            } //==end $type_field == "type_unknown
        } //==end if ($meta)
    } //==end if search_fd(n) <> ""
    //==Begin Search between
    if (qssession("pig_search_fd_" . $i)) {
        $idata = qssession("pig_search_fd_" . $i);
        $idata = str_replace("*", "%", $idata);
        $irealdata = $idata;
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
        } else {
            $iopt = substr($idata, 0, 1);
            if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                $irealdata = substr($idata,1);
            } else {
                $iopt = "=";
            }
        }
        if ($meta) {
            if ($type_field == "type_datetime") {
                if ((($timestamp = strtotime($irealdata)) !== -1)) {
                    if (($iopt)=="="){
                        $conditionstr = " = ";
                        $istrdata = str_replace("=", "", $istrdata);
                    } else {
                        $conditionstr = $iopt;
                        $istrdata = $irealdata;
                        $searchstartkey = "";
                        $searchendkey   = "";
                    }
                }
                    //Prepare  date format for each item search then convert to compatible format 
                    if (qssession("pig_search_fd_" . $i . "_DateFormat") != ""){ 
                      $iDateFormat = qssession("pig_search_fd_" . $i . "_DateFormat"); 
                    } else { 
                      $iDateFormat = ""; 
                    } 
                if ($qry_string == "") {
                    $qry_string = "search_fd_" . $i . "=" . $iopt . urlencode(stripslashes($irealdata));
                    $filter_string = $fields[$i]  . $conditionstr . " " . $quotedate .$searchstartkey . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $searchendkey . $quotedate;
                } else {
                    $qry_string .= "&search_fd_" . $i . "=" . $iopt . urlencode(stripslashes($irealdata));
                    $filter_string .= " AND " . $fields[$i]  . $conditionstr . " " . $quotedate . $searchstartkey . qsconvertdate2ansi($irealdata, $iDateFormat, "") . $searchendkey . $quotedate;
                }
            //==end $type_field == "type_datetime"
            } elseif ($type_field == "type_integer") {
                $irealdata = str_replace("%", "", $irealdata);
                if (is_numeric($irealdata)) {
                    if ($qry_string == "") {
                        $qry_string = "search_fd_" . $i . "=" . $iopt . $irealdata;
                        $filter_string = $fields[$i] . " " . $iopt . " " . $irealdata;
                    } else {
                        $qry_string .= "&search_fd_" . $i . "=" . $iopt . $irealdata;
                        $filter_string .= " AND " . $fields[$i] . " " . $iopt . " " . $irealdata;
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            } //==end $type_field == "type_integer"
        } //==end if ($meta)
    } //==end if search_fd_(n) <> "" for between search
    $i++;
} //==end while loop field index
if ($result > 0) {odbc_free_result($result);}
if ($filter_string != "") {
    $filter_string = "(" . $filter_string . ")";
    if (strpos(strtoupper($sql), " WHERE ")) {
         $sql .= " And " . $filter_string;
    }else{
         $sql .= " Where " . $filter_string;
    }
}
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
// >> START OF "before set page and size" [SETPAGESIZE001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before set page and size" [SETPAGESIZE001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$n = 0;
if (qssession("pig_pig") != "") {
    $parampage = explode("||", qssession("pig_pig"));
    $n = count($parampage);
}
$current_page = 1;
$page_size  = 20;
if ($n > 0) {
    if ($parampage[0] != "") {
        $current_page = $parampage[0];
    }
    if ($parampage[1] != "") {
        $page_size = $parampage[1];
    }
}
if (qsrequest("page")<>"") {
    $current_page = qsrequest("page");
}
else if (qssession("pig_pig_PageNumber")) {
    $current_page = qssession("pig_pig_PageNumber");
}
else {
    $current_page = 1;
}
$_SESSION["pig_pig_PageNumber"] = $current_page;
if (qsrequest("page_size")<>"") {
    if(qsrequest("page_size") != $page_size) {
        $current_page = 1;
    }
    $page_size = qsrequest("page_size");
}
// >> START OF "after set page and size" [SETPAGESIZE001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after set page and size" [SETPAGESIZE001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
// >> START OF "before set sort field" [SETSORTFLD001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before set sort field" [SETSORTFLD001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$_SESSION["pig_pig"] = $current_page . "||" . $page_size;
if (qsrequest("sortfield") != "") {
    $_SESSION["pig_sortfield"] = qsrequest("sortfield");
}
if (qsrequest("sortby") != "") {
    $_SESSION["pig_sortby"] = qsrequest("sortby");
}
if (qssession("pig_sortfield")) {
    $sql = $sql . " " . $SQL_GroupOnly;
    $sql = $sql . " Order By " . stripslashes(qssession("pig_sortfield")) . " " . stripslashes(qssession("pig_sortby"));
    $sortstring = "&sortfield=" . qssession("pig_sortfield") . "&sortby="  . qssession("pig_sortby");
} else {
    $sql = $sql . " " . $sql_ext;
}
// >> START OF "after set sort field" [SETSORTFLD001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after set sort field" [SETSORTFLD001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
if (isset($_GET["return"])) {
 $outLang = $_GET["return"];
	$toReturn = "";
	$dbType = "odbc";
	$result = odbc_exec($conn,$sql) or die("Invalid query");
	$outLang = strtoupper($outLang);
	if ($outLang == "XML") {
		$toReturn .= getXML($result,$fields,$dbType);
	} else {
		$toReturn .= getJSON($result,$fields,$dbType);
	}
 echo $toReturn; exit;
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<Title>Pig Data</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<link rel="stylesheet" type="text/css" href="pig_add.css">
<link rel="stylesheet" type="text/css" href="pig_edit.css">
<link rel="stylesheet" type="text/css" href="./css/container.css">
<link rel="stylesheet" type="text/css" href="pig.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
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
var qsPageItemsCount = 13
var _Employee_Code                            = 0;
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
var _Edit                                     = 11;
var _Delete                                   = 12;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Employee_Code] = "Employee Code";
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
fieldPrompts[_Edit] = "Edit";
fieldPrompts[_Delete] = "Delete";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Employee_Code] = "Employee_Code";
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
fieldTechNames[_Edit] = "Edit";
fieldTechNames[_Delete] = "Delete";

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
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Pig Data -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]-->
<!-- << END OF "Pig Data -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]-->




<script>

function usrEvent__Pig_Data__onload() {
  // >> START OF "Pig Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
  // << END OF "Pig Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
}



function usrEvent__Pig_Data__onunload() {
  // >> START OF "Pig Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
  // << END OF "Pig Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
}



function usrEvent__Pig_Data__onresize() {
  // >> START OF "Pig Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
  // << END OF "Pig Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [D452BDE1-AD96-461C-955F-CFB085919983]
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















</script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
 <style TYPE="text/css">
 	#qsInlinePanelHolder {visibility:hidden; }
 	#qsInlinePanel .hd { height: 16px;}
 	#qsInlinePanel .bd { overflow:auto;}
 	#qsInlinePanel .ft { height: 0px;}
 </style>

<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<SCRIPT language=JavaScript>
function cell_over(cell, classname) {
    if (document.all || document.getElementById) {
        cell.classBackup = cell.className;
        cell.className   = classname;
    }
}
function cell_out(cell)
{
    if (document.all || document.getElementById) {
        cell.className   = cell.classBackup;
    }
}
</SCRIPT>

<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<CENTER>
<center><hr /><font size="5">
Pig Data
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

<?php
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$result = odbc_exec($conn,$sql)
          or die("Invalid query");
// >> START OF "on open recordset" [RSOPEN001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset" [RSOPEN001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
   if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
   }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
$num_rows = qsodbc_num_rows($result);
$page_count = ceil($num_rows/$page_size);
if ($current_page > $page_count) { $current_page = 1; }
if ($current_page < 1) { $current_page = 1; }
if ($page_count < 1) { $page_count = 1; }
if ($filter_string !=""){
  print "Found ".$num_rows. " record(s)";
  print "<br>";
}
?>
<?php
// >> START OF "before top navigation toolbar" [TOPNAVBARTD001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before top navigation toolbar" [TOPNAVBARTD001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

<?php
if ($qry_string != "") {
  $navqry_string = "&" . $qry_string;
} else {
  $navqry_string = "";
}
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- row for tab button -->
  <tr>
    <td height="34">
      <table width="291" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
          <td width="97" height="34" align="left" valign="top"><a href="#" onclick="SwitchMenu('t1','o');"><img name="search" SRC="images/bbt_search_over.gif" border="0" title="Search"></a></td>
          <td width="97" height="34" align="left" valign="top"><a href="#" onclick="SwitchMenu('t2','o');"><img NAME="data" src="images/bbt_data.gif" width="97" height="34" border="0" title="Data"></a></td>
          <td width="97" height="34" align="left" valign="top"><a href="#" onclick="SwitchMenu('t3','o');"><img NAME="nav" src="images/bbt_navigator.gif" width="97" height="34" border="0" title="Navigator"></a></td>
        </tr>
      </table>
    </td>
  </tr>
  <!-- row for button navigator -->
  <tr>
    <td align="center" valign="top" height="40">
    <table border="0" cellpadding="0" cellspacing="0" height="100%">
    <tr>
    <td>
      <!-- row for button navigator tab1 -->
      <table id="t1" height="100%" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
<?php
print "<td width=\"35\" align=\"center\"><A HREF=\"pig.php?clearsession=1" . "\"><img src=\"images/bt_qsshowall.gif\" border=\"0\" align=\"absmiddle\" title=\"Show All\"></A></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"pig_search.php?" . $qry_string . "\"><img src=\"images/bt_qssearch.gif\" border=\"0\" align=\"absmiddle\" title=\"Search\"></A></td>";
print "<td width=\"12\" align=\"center\">&nbsp;<img src=\"images/bt_qsbetween.gif\" border=\"0\"></td>";
print "<td align=\"center\">";
?>
<Table Border="0" Cellpadding="1" Cellspacing="1">
<Form name="qs_search_form" method="post" action="./pig.php">
<?php
// >> START OF "before search form" [FRMSRCH001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before search form" [FRMSRCH001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<input name="sortfield" type="hidden" value="<?php print qssession("pig_sortfield"); ?>">
<input name="sortby" type="hidden" value="<?php print qssession("pig_sortby"); ?>">
<?php
$css_class = "\"TrOdd TrOdd Pig_1_OddDataText\"";
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr class="ThRows ThRows Pig_1_TableText">
<td>Category:</td>
<?php
if (($_SESSION["pig_search_fd0"] == "") || ($_SESSION["pig_search_fd0"] == "*")) {
    $itemvalue = "*";
} else {
    $itemvalue = $_SESSION["pig_search_fd0"];    $iopt = substr($itemvalue, 0, 2);
    if ($iopt == "==") {
        $itemvalue = substr($itemvalue, 2);
    }
}
$cellvalue  = "<select name=\"search_fd0\" onChange=\"this.form.submit();\">";
$cellvalue .= "<option value=\"*\"" . qscheckselected("*","*","selected") . ">All</option>";
$cellvalue .= qsodbcgen_listbox($conn,"  Select Distinct \"EmployeeCode\",\"EmployeeCode\" From \"Employee\" Order by \"EmployeeCode\" ","EmployeeCode","EmployeeCode",$itemvalue) . "</select>";
$cellvalue .= "<input type=\"hidden\" name=\"multisearch_fd0\" value=\"\">";
if ($cellvalue == "") {
    $cellvalue = "&nbsp;";
}
?>
<td align=Default> <?php print $cellvalue; ?>
</td>
</tr>
<?php
// >> START OF "after search form" [FRMSRCH001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after search form" [FRMSRCH001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
</Form>
</Table>
<A NAME=top></A>

<?php
print "</td>";
?>
        </tr>
      </table>
      <!-- row for button navigator tab2 -->
      <table id="t2" height="100%" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
<?php
print "<td width=\"35\" align=\"center\"><A HREF=\"pig_add.php?" . $qry_string . "\"><img src=\"images/bt_qsadd_new.gif\" border=\"0\" align=\"absmiddle\" title=\"Add New\"></A></td>";
?>
        </tr>
      </table>
      <!-- row for button navigator tab3 -->
      <table id="t3" height="100%" border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
<?php
if ($current_page > 1) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"pig.php?page=" . ($current_page - 1) . "\"><img src=\"images/bt_qsback.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></A></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsback_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><select name=\"page\"  onChange=\"window.location='pig.php?page=' + this.value; \">";
for ($i = 1; $i <= $page_count; $i++) {
    if ($i == $current_page) {
        print "<option value=\"". $i . "\" selected>" . ($i) . "</option>";
    } else {
        print "<option value=\"". $i . "\">" . ($i) . "</option>";
    }
}
print "</select></td>";
if ($current_page < $page_count) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"pig.php?page=" . ($current_page + 1) . "\"><img src=\"images/bt_qsnext.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></A></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsnext_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></td>";
}
print "<td width=\"35\" align=\"center\"><A HREF=#bottom><img src=\"images/bt_qsbottom.gif\" border=\"0\" align=\"absmiddle\" title=\"Bottom\"></A></td><td width=\"8\"></td>";
print "<td width=\"12\" align=\"center\"><IMG src=\"images/bt_qsbetween.gif\" border=\"0\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"pig.php?logout=y\"><img src=\"images/bt_qslogout.gif\" border=\"0\" align=\"absmiddle\" title=\"Logout\"></A></td>"; 
print "</form>";
print "</tr>";
print "</table>";
?>
        </tr>
      </table>
    </td>
    </tr>
    </table>
    </td>
  </tr>
</table>
<script language="javascript">
function getURLParam(strParamName){
  var strReturn = "";
  var strHref = window.location.href;
  if ( strHref.indexOf("?") > -1 ){
    var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
    var aQueryString = strQueryString.split("&");
    for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
      if (aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
        var aParam = aQueryString[iParam].split("=");
        strReturn = aParam[1];
        break;
      }
    }
  }
return strReturn;
}
if(getURLParam("tab")=="2") {
  SwitchMenu("t1","c");
  SwitchMenu("t2","o");
  SwitchMenu("t3","c");
} else if(getURLParam("tab")=="3") {
  SwitchMenu("t1","c");
  SwitchMenu("t2","c");
  SwitchMenu("t3","o");
} else {
  SwitchMenu("t1","o");
  SwitchMenu("t2","c");
  SwitchMenu("t3","c");
}
function SwitchMenu(obj,op)
{
  if(document.getElementById) {
    var el = document.getElementById(obj);
	  if(op=="c") {
	  	el.style.display = "none";
	  }else if(op=="o") {
	  	if(obj=="t1") {
	  		el.style.display = "block";
	  		SwitchMenu("t2","c");
	    	SwitchMenu("t3","c");
	  		document["search"].src = "images/bbt_search_over.gif";
	  		document["data"].src = "images/bbt_data.gif";
	  		document["nav"].src = "images/bbt_navigator.gif";
	  		tab = 1;	  	}else if(obj=="t2") {
	  		el.style.display = "block";
	  		SwitchMenu("t1","c");
	  		SwitchMenu("t3","c");
	  		document["search"].src = "images/bbt_search.gif";
	  		document["data"].src = "images/bbt_data_over.gif";
	  		document["nav"].src = "images/bbt_navigator.gif";
	  		tab = 2;	  	}else if(obj=="t3") {
	  		el.style.display = "block";
	  		SwitchMenu("t1","c");
	  		SwitchMenu("t2","c");
	  		document["search"].src = "images/bbt_search.gif";
	  		document["data"].src = "images/bbt_data.gif";
	  		document["nav"].src = "images/bbt_navigator_over.gif";
	  		tab = 3;	  	}
	  }
  }
}
function links(str) {
  str = str + '&tab=' + tab;
  window.location.href= str;
}
</script>

<?php
// >> START OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
if ($num_rows > 0) {
// >> START OF "on record found" [RECORDFOUND001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on record found" [RECORDFOUND001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
   <div ID="qsInlinePanelHolder" class="yui-skin-sam">
     <div ID="qsInlinePanel" >
 	    <div class="hd"></div>
	      <div class="bd">
           <table><tr><td><span id="inlineForm"></span></td></tr></table>
	      </div>
     </div>
   </div>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<Table  id="masterDataTable"  Border="0" Cellpadding="4" Cellspacing="1"BgColor="#C0C0C0">
<?php
// >> START OF "before data header row" [TBLHDR001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data header row" [TBLHDR001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<tr>
<?php
// >> START OF "before header row first cell" [TBLDATAHDRCELL] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before header row first cell" [TBLDATAHDRCELL] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

<td id="Employee_Code_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Employee_Code_label"><span id="Employee_Code_caption_div">Employee Code</span></span></td>
<td id="FirstName_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_FirstName_label"><span id="FirstName_caption_div">FirstName</span></span></td>
<td id="LastName_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_LastName_label"><span id="LastName_caption_div">LastName</span></span></td>
<td id="Title_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Title_label"><span id="Title_caption_div">Title</span></span></td>
<td id="Department_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Department_label"><span id="Department_caption_div">Department</span></span></td>
<td id="Address_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Address_label"><span id="Address_caption_div">Address</span></span></td>
<td id="City_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_City_label"><span id="City_caption_div">City</span></span></td>
<td id="Country_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Country_label"><span id="Country_caption_div">Country</span></span></td>
<td id="Phone_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Phone_label"><span id="Phone_caption_div">Phone</span></span></td>
<td id="PhoneExt_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_PhoneExt_label"><span id="PhoneExt_caption_div">PhoneExt</span></span></td>
<td id="MobileNo_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_MobileNo_label"><span id="MobileNo_caption_div">MobileNo</span></span></td>
<td id="Edit_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Edit_label"><span id="Edit_caption_div">Edit</span></span></td>
<td id="Delete_caption_cell" class="ThRows Pig_1_TableTitle"  NOWRAP><span id="Pig_1_Delete_label"><span id="Delete_caption_div">Delete</span></span></td><?php
// >> START OF "after header row last cell" [TBLDATAHDRCELL] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after header row last cell" [TBLDATAHDRCELL] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

</tr>
<?php
// >> START OF "after data header row" [TBLHDR001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data header row" [TBLHDR001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
$rowcount = 0;
$current_row = ($current_page - 1)*$page_size;
$current_row = $current_row + 1;
if ($current_row < 1) { $current_row = 1;}
while (($row = qsodbc_fetch_array($result,$current_row + $rowcount)) && ($rowcount < $page_size)) {
// >> START OF "on fetch data" [DATAFETCH001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on fetch data" [DATAFETCH001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

// >> START OF "before table row" [ROWTR001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before table row" [ROWTR001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

  $intColCount = 0;
// >> START OF "on row class style" [ROWCLASS001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on row class style" [ROWCLASS001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

    if (($rowcount%2) == 0) {
        $css_class = "\"TrOdd Pig_1_OddDataText\"";
    } else {
        $css_class = "\"TrRows Pig_1_DataText\"";
    }
    print "<tr class=" . $css_class . " onmouseover=\"cell_over(this, 'TrHover')\"  onmouseout=\"cell_out(this)\">";
// >> START OF "before table column" [ROWTD001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before table column" [ROWTD001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

   $intColCount++;
   $intColIndex = 0;

    $cellvalue = "" . number_format($row[0],0, $decimal_point,"") . "";
// >> START OF "Employee_Code -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E6C6541F-F4D7-47C7-B182-75CFD19A8BB9] [Employee_Code]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Employee_Code -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E6C6541F-F4D7-47C7-B182-75CFD19A8BB9] [Employee_Code] END>>

    print "<td align=Right ><span id=\"Pig_1_Employee_Code_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 1;

    $cellvalue = "" . $row[1] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [7A6FF121-E3D5-450E-AA6A-9AA44D8AB495] [FirstName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "FirstName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [7A6FF121-E3D5-450E-AA6A-9AA44D8AB495] [FirstName] END>>

    print "<td align=Default ><span id=\"Pig_1_FirstName_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 2;

    $cellvalue = "" . $row[2] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [D122FF4C-E1B8-4815-B372-3049942DC8F6] [LastName]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "LastName -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [D122FF4C-E1B8-4815-B372-3049942DC8F6] [LastName] END>>

    print "<td align=Default ><span id=\"Pig_1_LastName_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 3;

    $cellvalue = "" . $row[3] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [754517B9-A052-4784-996D-BBBFB637B474] [Title]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Title -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [754517B9-A052-4784-996D-BBBFB637B474] [Title] END>>

    print "<td align=Default ><span id=\"Pig_1_Title_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 4;

    $cellvalue = "" . $row[4] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [157D2B88-8E3C-4390-A2C7-7FAA9A85957F] [Department]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Department -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [157D2B88-8E3C-4390-A2C7-7FAA9A85957F] [Department] END>>

    print "<td align=Default ><span id=\"Pig_1_Department_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 5;

    $cellvalue = "" . $row[5] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [1F1F9815-645F-40F3-8A0B-265575BA84D6] [Address]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Address -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [1F1F9815-645F-40F3-8A0B-265575BA84D6] [Address] END>>

    print "<td align=Default ><span id=\"Pig_1_Address_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 6;

    $cellvalue = "" . $row[6] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [00D0B998-DE41-4A42-AB7D-FD7ED8BD6B4E] [City]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "City -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [00D0B998-DE41-4A42-AB7D-FD7ED8BD6B4E] [City] END>>

    print "<td align=Default ><span id=\"Pig_1_City_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 7;

    $cellvalue = "" . $row[7] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2879B25B-8AAD-4E41-BEFB-A022A63DED4F] [Country]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Country -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2879B25B-8AAD-4E41-BEFB-A022A63DED4F] [Country] END>>

    print "<td align=Default ><span id=\"Pig_1_Country_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 8;

    $cellvalue = "" . $row[8] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [90D9897D-998A-41F0-B60B-8AA5C5F32673] [Phone]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Phone -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [90D9897D-998A-41F0-B60B-8AA5C5F32673] [Phone] END>>

    print "<td align=Default ><span id=\"Pig_1_Phone_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 9;

    $cellvalue = "" . $row[9] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [9A135F04-D57F-45B4-9C2F-EBD4095D8560] [PhoneExt]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "PhoneExt -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [9A135F04-D57F-45B4-9C2F-EBD4095D8560] [PhoneExt] END>>

    print "<td align=Default ><span id=\"Pig_1_PhoneExt_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 10;

    $cellvalue = "" . $row[10] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [B48342E6-5226-4DC4-B6CF-01AB0D70F383] [MobileNo]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "MobileNo -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [B48342E6-5226-4DC4-B6CF-01AB0D70F383] [MobileNo] END>>

    print "<td align=Default ><span id=\"Pig_1_MobileNo_value_".$rowcount."\"";
print ">";
    print $cellvalue."</span></td>";
   $intColCount++;
   $intColIndex = 11;

    $cellvalue = "Edit";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Edit -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [B6EFA66B-72BC-4B70-8985-502A06F90D4A] [Edit]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Edit -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [B6EFA66B-72BC-4B70-8985-502A06F90D4A] [Edit] END>>

    print "<td align=Center ><span id=\"Pig_1_Edit_value_".$rowcount."\"";
print ">";
    print "<a href=\"" . "./pig_edit.php?" . ""."currentrow_fd0=" . urlencode($row[0]) . "" . "\" >" . $cellvalue . "</a>";
    print "</span></td>";
   $intColCount++;
   $intColIndex = 12;

    $cellvalue = "Delete";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Delete -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E7AF0675-2172-4689-A5F7-8039423358C6] [Delete]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Delete -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E7AF0675-2172-4689-A5F7-8039423358C6] [Delete] END>>

    print "<td align=Center ><span id=\"Pig_1_Delete_value_".$rowcount."\"";
print ">";
    print "<a href=\"" . "./pig_delete.php?" . ""."currentrow_fd0=" . urlencode($row[0]) . "" . "\" >" . $cellvalue . "</a>";
    print "</span></td>";
// >> START OF "after table column" [ROWTD001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after table column" [ROWTD001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

    print "</tr>";
// >> START OF "after table row" [ROWTR001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after table row" [ROWTR001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>

  $rowcount = $rowcount + 1;
}//end while
?>
<?php
// >> START OF "before end of data table" [BEFOREENDDATATABLE] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before end of data table" [BEFOREENDDATATABLE] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
    </Table>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
  <br>
<?php
// >> START OF "before bottom navigation toolbar" [BOTNAVBARTD001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before bottom navigation toolbar" [BOTNAVBARTD001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
}else{
// >> START OF "on no record found" [NORECFOUND001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on no record found" [NORECFOUND001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>

<?php
if ($filter_string != ""){
?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record matched your search criteria.
      </font>
    </td>
  </tr>
</Table><br>

<?php
}else{
 ?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record found.
      </font>
    </td>
  </tr>
</Table><br>

 <?php
 }
}
?>
<?php
// >> START OF "after bottom navigation toolbar" [BOTNAVBARTD001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after bottom navigation toolbar" [BOTNAVBARTD001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
if ($result > 0) {odbc_free_result($result);}
if ($conn > 0) {odbc_close($conn);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
</Center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" align="center" valign="middle" background="images/bg_buttom.gif"><font size="2"><strong><font color="#000000">Copyright 
      2018.</font></strong></font></td>
  </tr>
</table>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
</BODY>
</HTML>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [D452BDE1-AD96-461C-955F-CFB085919983] [Pig Data] END>>
?>


