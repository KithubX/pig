<!-- #INCLUDE FILE="qsAdminConnection.asp" -->
<input type="hidden" id="hdnUseCustomCode" value="<%= ConnUseCustomCode %>" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td >
		<p class="style1"><strong>
	    Quick and Dirty ASP MDB Connection string checker.<br>
		</strong><br>
		&nbsp;&bull;&nbsp;<b>Instruction:</b>&nbsp;	Either use the MS Access syntaxc builder or input your own Connection Syntax and   click TEST to see if your connection syntax is correct. It will try to connect   to the database and report any errors. </p>
		<hr />
		
      &nbsp;&bull;&nbsp;<b>Build MS Access Connection Information...</b>
        <table width="434" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td width="120" nowrap><div align="left">&nbsp;&nbsp;&nbsp;Provider Name: </div></td>
            <td width="221" nowrap="nowrap">
			    <div id="divAutoComplete">
                  <input name="txtProviderName" type="text" id="txtProviderName" value="<%= ConnProviderName %>" onblur="GetDefaultProviderName();" size="30" /> 
				  <div id="divProviderContainer"></div>
                </div>		    </td>
            <td width="44" align="right" nowrap="nowrap">&nbsp;</td>
            <td width="19">&nbsp;</td>
          </tr>
          <tr>
            <td nowrap align="left">&nbsp;&nbsp;&nbsp;Database folder:</td>
            <td><input name="dbPath" type="text" id="dbPath" 
			     value="<%= ConnDBFolder %>" size="25" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td nowrap align="right"><div align="left">&nbsp;&nbsp;&nbsp;mdb FileName:</div></td>
            <td><input name="mdbfile" type="text" id="mdbfile" 
			     value="<%= ConnDBFileName %>" size="25" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="33" colspan="4" align="right" nowrap><div align="left">
              <input type="button" class="BtnTestStyle" name="BtnBuild" value="Build Connection ASP" id="Submit" onclick="BuildAccessConnStr('memASPConnCode', 'dbPath', 'mdbfile');" />
            </div></td>
          </tr>
      </table>
        &bull;&nbsp;<b>ASP Connection Syntax: </b>
        <table width="0" border="0" cellspacing="4" cellpadding="0">
      <tr>
        <td>
		
		<textarea  id="memASPConnCode" name="memASPConnCode" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#006633" cols="130" rows="8">
		</textarea>
	</td>
    </tr>
      <tr>
        <td><input type="button" class="BtnTestStyle" name="test" value=" Test Connection " id="test" onClick="TestAccessADOConnection(this, 'divAccessTestStatus');" /></td>
      </tr>
      <tr>
        <td>
          <div align="left" id="ADOTestResult">	  
		  </div>
		</td>
      </tr>
    </table>
    <hr /><br>

    <div style="text-align:left">Learn  all about connection strings 
	<a href="http://www.connectionstrings.com/" target="_blank">click here</a></div><br>
    </td>
  </tr>
</table>



<div id="divAccessADOConnTest" style="display:none; z-index:999" >
<table width="450" border="0" cellpadding="1" cellspacing="0">
  <tr bgcolor="#D59715">
    <td width="448" ><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="100%" height="21" colspan="2" valign="middle" bgcolor="#EABC1D">
		<div align="center"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">ADO Access Connection Test </font></strong></div></td>
      </tr>
      <tr>
        <td height="58" colspan="2">
		<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="48" >
			    <div id="divAccessTestStatus">
					  
			    </div>
			  </td>
            </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td height="40" colspan="2"><div align="center">&nbsp;
                <input type="button" name="Submit222" value="  Close  " onclick="ShowYahooDialog(false, 'divAccessADOConnTest'); " />
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
