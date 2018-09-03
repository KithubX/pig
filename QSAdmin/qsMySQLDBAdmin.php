<?php 
   @session_start();
   
   include("qsDBAdminConfig.php");
   include("qsAdminConnection.php");
   //include("qsDBUtilities.php");
  
   global $db;
?>


<table width="99%" border="0" align="left" cellpadding="0" cellspacing="2" bgcolor="#E9E9E9">
  <tr>
    <td height="19" bgcolor="#E9E9E9"><div align="center"><b>Install Generated MySQL Scripts</b></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
	<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="38" class="CreateTableText"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="24" colspan="2"  class="TextCaption"><strong>1. Database Connection</strong></td>
            </tr>
            <tr>
              <td width="15" nowrap="nowrap">&nbsp;</td>
              <td width="100%" ><span id="spConnectionStatus">
                <?php
				
				$msgStr = qsTestMySQLConnection($host, $port, $user, $passwd, $db);
				
				if ($msgStr == "CONNECTEDOK"){ 
				   $isConnectedOK = true;
				   print "<span class=\"cssConnectedOK\">Connected to MySQL Database is OK. </span>" . "<br><input name=\"btn12\" class=\"BtnCreateStyle\" type=\"button\" id=\"btn12\" value=\"Test Connection!\" onclick=\"ShowMySQLTestConnectionPanel();\" />";
				}else {
				   $isConnectedOK  = false;
				   print "<span class=\"cssConnectedNotOK\"> <b>Failed to connect to your database.</b><br><b>Description: </b>" . $msgStr . "</span>" . "<br><input name=\"btn12\" class=\"BtnCreateDBStyle\" type=\"button\" id=\"btn12\" value=\"Test Connection Again!\" onclick=\"ShowMySQLTestConnectionPanel();\" />";
				}	 
				
			 ?>
              </span></td>
            </tr>
            <tr>
              <td ></td>
              <td ><div id="div">
                
              </div></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td ><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="24" colspan="2"  class="TextCaption"><strong>2. Database Name </strong> &quot;<?php print  $db; ?>&quot;</td>
            </tr>
			<tr>
			   <td width="15" nowrap="nowrap">&nbsp;</td>
			   <td width="100%">
			   <?php if (!$isConnectedOK){ ?>
			        <input name="btn1" class="BtnCreateStyle" type="button" id="btn1" value="Create Database" onclick="CreateDatabase(this, 'divCreateDBStatus', '<?php print  $db; ?>')" />
			   <?php } else { 
			        print "<span class=\"cssConnectedOK\">Ready to use.</span>";    
			      } 
			   ?>
			   </td>
			</tr>
            <tr>
			  <td ></td>
              <td ><div id="divCreateDBStatus"></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="24" class="TextCaption"><strong>3. Create Tables </strong></td>
      </tr>
	  <tr>
	     <td>

		 </td>
	  </tr>
	  
      <tr>
        <td >
		
		
   <div id="divTablesList" style="overflow:auto; height:220px" >	
		
		
		 <table width="97%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td nowrap="nowrap" width="15">&nbsp;</td>
			    <td width="100%" colspan="2">
				    <?php if (file_exists($CreateAllTablesScriptFileName)) { ?> 
				         <input name="btn12" class="BtnCreateStyle" type="button" id="btn12" value="Create All Tables" onClick="CreateAllTables(this, 'divCreateAllTablesStatus', '<?php print  $CreateAllTablesScriptFileName; ?>', '<?php print  $db; ?>');" />
				    <?php } else { 
					     print "<span class=\"WarningText\">There are no SQL scripts for creating tables! </span>";
					   }
					?> 
				  </td>
				</tr>
			  <tr>
			    <td nowrap="nowrap" ></td>
                <td colspan="2"><div id="divCreateAllTablesStatus"></div></td>
              </tr>
			  </table>	
<?php 
						  
  $arrDirectories = qsListDirectories($MySQLScriptFolder);
  $i = 0;	
  foreach ($arrDirectories AS $directoryName){
     $TableName = $directoryName;
     $TableScriptFile = $MySQLScriptFolder . "/" . $directoryName . "/" . $CreateTableScriptFileName;
	 
	 if (file_exists($TableScriptFile)) {
	 
	      if (($i%2) == 0){
			  $rowStyle = " class=\"trTableRowOdd\"";
		   }else {
			  $rowStyle = " class=\"trTableRow\"";
		   }
	 
?>

            <table width="97%" border="0" cellspacing="0" cellpadding="0">
              <tr <?php print $rowStyle; ?> height="24px" onmouseover="cell_over(this, 'trTableRowHover');" onmouseout="cell_out(this);" >
			    <td nowrap="nowrap" width="20">&nbsp;&nbsp;&bull;</td>
                <td width="100%" ><span class="CreateTableText"><?php print $TableName; ?></span></td>
                <td width="74" nowrap="nowrap">&nbsp;<span class="CreateTableText">
                  <input name="btnCreateTable" type="button" class="BtnCreateStyle"  id="btnCreateTable" value="Create" onclick="CreateTable(this, 'divCreateStatus<?php print $i; ?>', '<?php print $TableScriptFile; ?>', '<?php print $TableName; ?>', '<?php print $db; ?>')" />
&nbsp;                </span></td>
              </tr>
              <tr>
			    <td nowrap="nowrap" width="20"></td>
                <td colspan="2"><div id="divCreateStatus<?php print  $i; ?>"></div></td>
              </tr>
            </table>
			
<?php   
	   $i++; 
	 } //end if 
   } //end for 
?>   

</div>
<br>
</td>
</tr>
</table></td>
  </tr>
</table>

<div id="divMySQLConnTest" style="display:none; z-index:999">
  <table width="420" height="149" border="0" cellpadding="1" cellspacing="0">
    <tr bgcolor="#D59715">
      <td height="149"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="25" colspan="2" bgcolor="#EABC1D"><div align="center"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>MySQL Server Connection Test </strong></font></div></td>
        </tr>
        <tr>
          <td height="6" class="NormalText"></td>
          <td width="293" height="6"></td>
        </tr>
        <tr>
          <td width="120" height="28" nowrap="nowrap" class="NormalText"><div align="right">ServerName:&nbsp;</div></td>
          <td height="30"><input name="textfield" id="txtTestServerName" type="text" size="40" value="<?php print  $host; ?>" /></td>
        </tr>
        <tr>
          <td height="28" nowrap="nowrap" class="NormalText"><div align="right">Port Number:&nbsp;</div></td>
          <td height="30"><input name="textfield22" type="text" id="txtTestPortNumber" size="8" value="<?php print  $port; ?>" /></td>
        </tr>
        <tr>
          <td height="28" nowrap="nowrap" class="NormalText"><div align="right">User Name:&nbsp;</div></td>
          <td height="30"><input name="textfield2" type="text" id="txtTestUserName" size="30" value="<?php print  $user; ?>" /></td>
        </tr>
        <tr>
          <td height="22" nowrap="nowrap" class="NormalText"><div align="right">Password:&nbsp;</div></td>
          <td height="30"><input name="textfield3" type="password" id="txtTestPassword" size="30" value="<?php print  $passwd; ?>" /></td>
        </tr>
        <tr>
          <td colspan="2" class="NormalText" align="center"><span id="spMySQLConnMessage" ></span></td>
        </tr>
        <tr>
          <td height="30" colspan="2" class="NormalText"><div align="center">
            <input type="button" class="BtnCreateStyle" name="Submit2" value=" Test Connection " onclick="TestMySQLConnection(this, 'spMySQLConnMessage', ACT_MYSQL_TEST);" />
            <input type="button" class="BtnCreateStyle" name="Submit223" value="  Close  " onclick="ShowConnectionInfoIfConnectedOK();//ShowYahooDialog(false, 'divMySQLConnTest');" />
          </div></td>
        </tr>
        <tr>
          <td colspan="2"><div id="divRowMySQLDBList" style="display:none">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td width="121" height="22" nowrap="nowrap" class="NormalText"><div align="right">Database:&nbsp;</div></td>
                <td width="297" height="30"><div id="divMySQLDBList" >
                  <select name="selMySQLDBList" id="selMySQLDBList">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td colspan="2" align="center"  class="NormalText"><span id="spMySQLDBConnMessage" ></span></td>
              </tr>
              <tr>
                <td height="30" colspan="2" nowrap="nowrap" class="NormalText"><div align="center">
                  <input type="button" class="BtnCreateStyle" name="Submit23" value="Test Database Connection" onclick="TestMySQLConnection(this, 'spMySQLDBConnMessage', ACT_MYSQL_DB_TEST);" />
                  <input type="button" name="Submit22"  class="BtnCreateStyle" value="  Close  " onclick="ShowConnectionInfoIfConnectedOK();" />
                </div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td height="8" colspan="2" ></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <br />
</div>


<div id="divMySQLConnInfo" style="display:none; z-index:999" >
<table width="500" height="149" border="0" cellpadding="1" cellspacing="0">
  <tr bgcolor="#D59715">
    <td height="149"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="100%" height="25" colspan="2" valign="middle" bgcolor="#EABC1D"><div align="center"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>MySQL Database Connection Setting Test </strong></font></div></td>
      </tr>
      <tr>
        <td height="41" colspan="2">
			  <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="27" class="cssConnectedOK">Connection to MySQL Database successful.</td>
				  </tr>
				  <tr>
					<td class="cssConnDescText">&nbsp;&nbsp;If any of your test settings are different from your project settings, you should update your project.  To update: Open your project, run the Deploy Wizard  and modify the MySQL Connection Settings to be the same as the test settings below</td>
				  </tr>
				  <tr>
					<td class="NormalText"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="30%" height="24">&nbsp;</td>
                        <td width="35%"><div align="left"><strong>Project Settings</strong></div></td>
                        <td width="35%"><div align="left"><strong>Test Settings</strong></div></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                      <tr>
                        <td height="22">&nbsp;&nbsp;Server Name:</td>
                        <td nowrap="nowrap" class="cssConnCurrectSetting">
						<span id="spProjSettingServerName"><?php print  $host; ?></span>
						</td>
                        <td nowrap="nowrap" >
						   <span  id="spTestServerName" class="cssConnTestSetting"> </span>
						</td>
                      </tr>
					  
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                      <tr>
                        <td height="22">&nbsp;&nbsp;Port Number:</td>
                        <td nowrap="nowrap" class="cssConnCurrectSetting">
						  <span id="spProjSettingPortNumber"><?php if (trim($port) != "") { print $port; }else{ print "-";} ?></span>
					    </td>
                        <td nowrap="nowrap"><span id="spTestPortNumber" class="cssConnTestSetting"> </span></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                      <tr>
                        <td height="22">&nbsp;&nbsp;User Name:</td>
                        <td nowrap="nowrap" class="cssConnCurrectSetting">
						  <span id="spProjSettingUserName"><?php print  $user; ?></span>
						</td>
                        <td nowrap="nowrap"><span id="spTestUserName" class="cssConnTestSetting"> </span></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                      <tr>
                        <td height="22">&nbsp;&nbsp;Password:</td>
                        <td nowrap="nowrap" class="cssConnCurrectSetting">
						  <span id="spProjSettingPassword"><?php print  $passwd; ?></span>
						</td>
                        <td nowrap="nowrap"><span id="spTestPassword" class="cssConnTestSetting"> </span></td>
                      </tr>
					
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                      <tr>
                        <td height="22">&nbsp;&nbsp;Database Name:</td>
                        <td nowrap="nowrap" class="cssConnCurrectSetting">
						  <span id="spProjSettingDBName"><?php print  $db; ?></span>
						</td>
                        <td nowrap="nowrap"><span id="spTestDBName" class="cssConnTestSetting"> </span></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3" bgcolor="#CCCCCC" height="1pt"></td>
                      </tr>
					  
                    </table></td>
				  </tr>
			</table>
		</td>
        </tr>
      
      <tr>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td height="42" colspan="2"><div align="center">&nbsp;
          <input type="button" name="Submit222" value="      Close     " onclick="ShowYahooDialog(false, 'divMySQLConnInfo'); " />
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php
 // LoadMySQLDBListAsHTML($host, $port, $user, $passwd);
?>