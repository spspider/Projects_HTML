<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="50">������������: {usertitle}</td>
	</tr>
	<tr class="story">
		<td width="100" valign="top" align="left"><img src="{foto}" alt=""/></td>
		<td valign="top" align="left">
			<table>
				<tr>
					<td><span class="grey">������ ���:</span> <b>{fullname}</b></td>
				</tr>
				<tr>
					<td>{rate}</td>
				</tr>
				<tr>
					<td><span class="grey">������:</span> {status} [time_limit]&nbsp;� ������ ��: {time_limit}[/time_limit]</td>
				</tr>
				<tr>
					<td>{email}</td>
				</tr>
				<tr>
					<td>[not-group=5]{pm}[/not-group]</td>
				</tr>
				<tr>
					<td><span class="grey">ICQ:</span> <b>{icq}</b></td>
				</tr>
				<tr>
					<td><span class="grey">���������� ����������:</span> <b>{news_num}</b> [{news}][rss]<img src="{THEME}/images/rss.png" alt="rss" style="vertical-align: middle; margin-left: 5px;" />[/rss]</td>
				</tr>
				<tr>
					<td><span class="grey">���������� ������������:</span> <b>{comm_num}</b> [{comments}]</td>
				</tr>
				<tr>
					<td><span class="grey">���� �����������:</span> <b>{registration}</b></td>
				</tr>
				<tr>
					<td><span class="grey">��������� ���������:</span> <b>{lastdate}</b></td>
				</tr>
				<tr>
					<td><span class="grey">����� ����������:</span> {land}</td>
				</tr>
				<tr>
					<td><span class="grey">������� � ����:</span> {info}</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="story" colspan="2" >{edituser}</td>
	</tr>
</table>
<br />
[not-logged]
<div id="options" style="display:none;">
<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="50">�������������� �������</td>
	</tr>
	<tr class="story">
		<td align="left">���� ���:</td>
		<td align="left"><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">��� E-Mail:</td>
		<td align="left"><input type="text" name="email" value="{editmail}" class="f_input" /><br />
					<div class="checkbox">{hidemail}</div>
					<div class="checkbox"><input type="checkbox" id="subscribe" name="subscribe" value="1" /> <label for="subscribe">���������� �� ����������� ��������</label></div></td>
	</tr>
	<tr class="story">
		<td align="left">����� ����������:</td>
		<td align="left"><input type="text" name="land" value="{land}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">����� ICQ:</td>
		<td align="left"><input type="text" name="icq" value="{icq}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">������ ������:</td>
		<td align="left"><input type="password" name="altpass" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">����� ������:</td>
		<td align="left"><input type="password" name="password1" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">���������:</td>
		<td align="left"><input type="password" name="password2" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">���������� �� IP:<br />��� IP: {ip}</td>
		<td align="left"><textarea name="allowed_ip" style="width:98%;" rows="5" class="f_textarea">{allowed-ip}</textarea><br><span class="small pink">
						* ��������! ������ ��������� ��� ��������� ������ ���������.
						������ � ������ �������� ����� �������� ������ � ���� IP-������ ��� �������, ������� �� �������.
						�� ������ ������� ��������� IP �������, �� ������ ������ �� ������ �������.
						<br />
						������: 192.48.25.71 ��� 129.42.*.*</span></td>
	</tr>
	<tr class="story">
		<td align="left">������:</td>
		<td align="left"><input type="file" name="image" class="f_input" /><br />
					<div class="checkbox"><input type="checkbox" name="del_foto" id="del_foto" value="yes" />�<label for="del_foto">������� ����������</label></div></td>
	</tr>
	<tr class="story">
		<td align="left">� ����:</td>
		<td align="left"><textarea name="info" style="width:98%;" rows="5" class="f_textarea">{editinfo}</textarea></td>
	</tr>
	<tr class="story">
		<td align="left">�������:</td>
		<td align="left"><textarea name="signature" style="width:98%;" rows="5" class="f_textarea">{editsignature}</textarea></td>
	</tr>
	<tr class="story">
		<td colspan="2" align="left">{xfields}</td>
	</tr>
	<tr class="story">
		<td align="left"><input class="fbutton" type="submit" name="submit" value="���������" /></td>
		<td align="left"><input name="submit" type="hidden" id="submit" value="submit" /></td>
	</tr>
</table>
[/not-logged]