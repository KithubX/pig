<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: MyProject1
#  Project Source............: D:\host\MyProject1\MyProject1.dbh
#  Project Session ..........: F82E9A45-6343-4708-87C0-8DD9717875EB
#  Group Name................: Global Group
#  Group GUID................: 63366756-3AFE-424A-9B91-482AC4C4D3D0
#  Group SerialID............: 372
#  Page Name.................: Login settings
#  Page Type.................: 6 - Login Page
#  Page GUID.................: 56CAA36E-DDCB-4696-A6F7-BD21194F0E79
#  Page SerialID.............: 384
#  Page File Name............: global_group_login
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:04:59
#  Language..................: PHP
#   
#  0 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
require('qs_connection.php');
require_once('global_group_users.php');
require_once('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
$err_string = "";
// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
@ob_start();
if (isset($_POST["act"])) {
    $userlevel = 0;
// >> START OF "before check user login" [SECCHK004] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check user login" [SECCHK004] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
    $founduser = false;
    $loginuser = "";
    $loginpassword = "";
    $loginuser = qsrequest("User");
    $loginpassword = qsrequest("Password");
    $i = 0;
    if (($loginuser != "") && ($loginpassword != "")) {
        while (($i < count($users)) && ($founduser == false)) {
            $founduser = (strtoupper($loginuser) == strtoupper($users[$i]) and ($loginpassword == $passwords[$i]));
            if ($founduser) {
                $userlevel = $users_level[$i];
            }
	           $i++;
        }
    }
// >> START OF "after check user login" [SECCHK004] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check user login" [SECCHK004] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
// >> START OF "before check secure level" [SECCHK003] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before check secure level" [SECCHK003] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
    if ($userlevel > 0) {
        $_SESSION["Logon"] = "TRUE";
        $_SESSION["UserLogon"] = qsrequest("User");
        $_SESSION["UserLevel"] = $userlevel;
        $RedirectURL = qssession("RedirectURL");
#----get submit url page----
    $submiturl = "./pig.php?";
        if ($RedirectURL == "") {
          $RedirectURL = $submiturl;
        }
        if (qssession("firstredirecturl") == "") {
          $_SESSION["firstredirecturl"] = $RedirectURL;
        }
        header ("Location: $RedirectURL");
// >> START OF "on init login redirect" [SECREDIR002] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on init login redirect" [SECREDIR002] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
        @ob_end_flush();
        exit;
    } else {
        $err_string = "Login failed";
    }
// >> START OF "after check secure level" [SECCHK003] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after check secure level" [SECCHK003] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
} else{
    if ((qssession("UserLogon") != "") && (qssession("Logon") == "FALSE")) {
        $err_string = "Permission failed";
    }
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<Title>Login settings</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<link rel="stylesheet" type="text/css" href="global_group_login.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
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
var qsPageItemsCount = 0

// Declare Fields Prompts
var fieldPrompts = [];

// Declare Fields Technical Names
var fieldTechNames = [];

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
  qs_form                                  = document.getElementsByName("qs_login_form")[0];   //Define Form Object by Name.
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Login settings -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]-->
<!-- << END OF "Login settings -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]-->




<script>

function usrEvent__Login_settings__onload() {
  // >> START OF "Login settings -> On Load" [onload] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
  // << END OF "Login settings -> On Load" [onload] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
}



function usrEvent__Login_settings__onunload() {
  // >> START OF "Login settings -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
  // << END OF "Login settings -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
}



function usrEvent__Login_settings__onresize() {
  // >> START OF "Login settings -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
  // << END OF "Login settings -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
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
  document.getElementsByName("User")[0].focus(); 
   return true;                                        
}                                                      



function usrEvent__Login_settings__onsubmit(frm) {
  // >> START OF "Login settings -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
  // << END OF "Login settings -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
}



function usrEvent__Login_settings__onreset() {
  // >> START OF "Login settings -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
  // << END OF "Login settings -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79]
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
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<BODY>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<Center>
<center><hr /><font size="5">
Global Group Login
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>

<Form name="qs_login_form" method="post" action="./global_group_login.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before login form" [LOGINFRM001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before login form" [LOGINFRM001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#FFFFFF">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows Global_Group_6_TableTitle">Login settings</td>
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
<td class="ThRows Global_Group_6_TableText">Login:</td>
<td class="TrRows Global_Group_6_DataText"><input name="User" type="text"></td>
</tr>
<tr>
<td class="ThRows Global_Group_6_TableText">Password:</td>
<td class="TrRows Global_Group_6_DataText"><input name="Password" type="password"></td>
</tr>
<tr>
<td class="ThRows Global_Group_6_TableText">&nbsp;</td>
<td class="ThRows Global_Group_6_TableButtons">
<input type="hidden" name="act" value="n">
<input type="submit" name="QS_Submit" value="Submit">&nbsp;&nbsp;
<input type="reset" name="Reset" value="Reset">
</td>
</tr>
</Table><br>
<A HREF="global_group_password.php">Forgotten Password</A>
<?php
// >> START OF "after login form" [LOGINFRM001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after login form" [LOGINFRM001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
</Form>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [56CAA36E-DDCB-4696-A6F7-BD21194F0E79] [Login settings] END>>
?>
