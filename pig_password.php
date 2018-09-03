<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
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
#  Page Name.................: Forgotten Password
#  Page Type.................: 16 - Retrieval Page
#  Page GUID.................: 413E675B-0BBE-4670-84E0-C5DD76EA21CE
#  Page SerialID.............: 424
#  Page File Name............: pig_password
#   
#  Generated on..............: Monday, September 3, 2018
#  Generation Timestamp......: 2018-03-09 21:05:13
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
require('qs_connection.php');
require_once('pig_users.php');
require_once('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
$err_string = "";
// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
if (isset($_POST["act"])) {
    $emailrequest = qsrequest("email");
    $header_body   = "";
    $header_body .= " Header for body E-mail\n";
    $footer_body   = "";
    $footer_body .= " Footer for body E-mail\n";
    $msg_success   = "";
    $msg_success .= " <center>Successfully sent E-mail.</center>\n";
    $msg_success   .= "<br><br><a href=\"javascript:self.history.back();\">Go Back </a>";
    $str_emailfrom = "myemail@mydomainname.com";
    $str_subject = "";
    $str_emailcc = "";
    $str_emailbcc = "";
    $str_replyto = "myemail@mydomainname.com";
    $email_priority = "3"; // 1 = High , 3 = Normal, 5 = Low
    $userlevel = 0;
    $ifound = 0;
    $foundemail = false;
    $emailrequest = qsrequest("email");
    if ($emailrequest != "") {
        $foundemail = false;
        $i = 0;
        while (($i <= count($emails)) && ($foundemail == false)) {
            $foundemail = (strtoupper($emails[$i]) == strtoupper($emailrequest));
            $i++;
        };
    }
    if ($foundemail) {
        $str_body = "";
        $str_body = $str_body . $header_body . "\n\n" . "User name : " . $users[0] . "\n" . "Password : " . $passwords[0]  . "\n\n" . $footer_body;
        $str_emailto = $emailrequest;
        $header  = "";
        $header  = "From:".$str_emailfrom."\r\n";
        $header .= "Reply-to:".$str_replyto."\r\n";
        $header .= "Cc:".$str_emailcc ."\r\n";
        $header .= "Bcc:".$str_emailbcc ."\r\n";
        $header .= "X-Priority : ".$email_priority."\n";
        $success = @mail($str_emailto, $str_subject, $str_body, $header);
        if (!$success) {
            print "<br><br><font color=\"FF0000\"><center><center>Cannot send your E-mail.</center></center></font>";
// >> START OF "on send mail error" [SNDMAILERR001] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on send mail error" [SNDMAILERR001] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
        } else { //' Successfully send email
            print $msg_success;
        }
    } else {
            print "<br><br><font color=\"FF0000\"><center>Sorry, E-mail not found!</center></font>";
    }
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<Title>Forgotten Password</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<link rel="stylesheet" type="text/css" href="pig_password.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
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
  qs_form                                  = document.getElementsByName("qs_password_form")[0];   //Define Form Object by Name.
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Forgotten Password -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]-->
<!-- << END OF "Forgotten Password -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]-->




<script>

function usrEvent__Forgotten_Password__onload() {
  // >> START OF "Forgotten Password -> On Load" [onload] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
  // << END OF "Forgotten Password -> On Load" [onload] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
}



function usrEvent__Forgotten_Password__onunload() {
  // >> START OF "Forgotten Password -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
  // << END OF "Forgotten Password -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
}



function usrEvent__Forgotten_Password__onresize() {
  // >> START OF "Forgotten Password -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
  // << END OF "Forgotten Password -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
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
  document.getElementsByName("email")[0].focus(); 
   return true;                                        
}                                                      



function usrEvent__Forgotten_Password__onsubmit(frm) {
  // >> START OF "Forgotten Password -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
  // << END OF "Forgotten Password -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
}



function usrEvent__Forgotten_Password__onreset() {
  // >> START OF "Forgotten Password -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
  // << END OF "Forgotten Password -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [413E675B-0BBE-4670-84E0-C5DD76EA21CE]
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
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>

<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<BODY>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<CENTER>
<center><hr /><font size="5">
Forgotten Password
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>

<Form name="qs_password_form" method="post" action="./pig_password.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before password form" [PASSWFRM001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before password form" [PASSWFRM001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#C0C0C0">

<?php
$css_class = "\"TrOdd Pig_16_OddDataText\"";
?>
<tr>
<td class="ThRows Pig_16_TableTitle" align=Center>Your password will be sent to your account</td>
</tr>
<tr>
<td class="ThRows Pig_16_TableText"><input type="text" name="email"  size="40"></td>
</tr>
<tr>
<td class="ThRows Pig_16_TableButtons">
<?php
#----get back url page----
  $backurl = "./pig.php?";
?>
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="hidden" name="act" value="n">
<input type="submit" name="QS_Submit" value="Submit">&nbsp;&nbsp;
<input type="reset" name="Reset" value="Reset">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after password form" [PASSWFRM001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after password form" [PASSWFRM001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
</Form>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
</Center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" align="center" valign="middle" background="images/bg_buttom.gif"><font size="2"><strong><font color="#000000">Copyright 
      2018.</font></strong></font></td>
  </tr>
</table>
</CENTER>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [413E675B-0BBE-4670-84E0-C5DD76EA21CE] [Forgotten Password] END>>
?>
