
<?php header("Content-Type:text/html; charset=utf-8");?>
<table cellpadding="0" cellspacing="0" border="0">
	<form id="theForm" action="addmeetting_chk.php" name="theForm" method="post" onSubmit="return check_submit();" 
	enctype="multpart/form-date">
		<tr><td colspan="3" height="32"><h1 align="center">添加会议记录</h1></td></tr>
		<tr>
			<td width="120" height="28"><div align="center">会议名称<div></td>
			<td><input type="text" class="input2" name="meeting_name" id="meeting_name"></td>
			<td align="left" width="180"><span style="red">*</span>填写会议记录名称</td>
		</tr>
		<tr>
			<td width="120" height="28"><div align="center">部门名称</div></td>
			<td>
				<select name="">
					<opti<td align="left" width="180"><span class="sp1" >*>
			</t</span>d>
			<td align="left" width="180"><span style="red">*</span>选择举行会议部门</td>
		</tr>
		<tr>
			<td><div align="center">会议地点</div></td>
			<td><input type="text" name="meet_place" id="meet_place"value=""></td>
			<td align="left" width="180"><span class="sp1" >*填写会议地点名称</span></td>
		</tr>
		<tr>
			<td><div align="center">会议日期</div></td>
			<td>
				<select>
					<option></option>
				</select>
				<select>
					<option></option>>
				</select>
				<select><option></option></select>
			</td>
			<td align="left" width="180"><span class="sp1" >*选择会议召开日期</span></td>
		</tr>
		<tr>
			<td><div align="center">会议主持人</div></td>
			<td><input type="text" name="meet_person"></td>
			<td align="left" width="180"><span class="sp1">*填写会议主持人</span></td>
		</tr>
		<tr>
			<td><div align="center">会议记录人</div></td>
			<td><input type="text" class="input2" name="meet_person"></td>
			<td align="left" width="180"><span class="sp1" >*填写会议记录人</span></td>
		</tr>
		<tr>
			<td height="28"><div align="center">出席人员</div></td>
			<td><input type="" name=""></td> 
			<td align="left" width="180"><span class="sp1" >*填写会议出席人员</span></td>
		</tr>
		<tr>
			<td width="28">上传会议内容</td>
			<td><input class="upload" type="file" size="16" name="meeting_documents"></td>
			<td align="left" width="180"><span class="sp1" >*上传txt格式会议稿</span></td>
		</tr>
		<tr>
			<td><div align="center">会议摘要</div></td>
			<td height="70"><textarea style="width:250px; height:50px;border: 1px solid #CCCCCC" name="textarea"></textarea></td>
			<td align="left" width="180"><span class="sp1" >*填写会议记摘要</span></td>
		</tr>
		<tr><td height="12" colspan="3"></td></tr>
		<tr>
			<td colspan="2" height="30"><center><input type="submit" class="add_mbtn1" value="添加">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="add_mbtn2" type="reset" value="取消"></center></td>
			<td></td>
		</tr>
	</form>
</table>
