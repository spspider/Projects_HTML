<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="25">
		[registration]����������� ������ ������������[/registration]
		[validation]���������� ������� ������������[/validation]
		</td>
	</tr>
	<tr><td class="story" colspan="2">
		[registration]
				<b>������������, ��������� ���������� ������ �����!</b><br />
				����������� �� ����� ����� �������� ��� ���� ��� ����������� ����������.
				�� ������� ��������� ������� �� ����, ��������� ���� �����������, ������������� ������� ����� � ������ ������.
				<br />� ������ ������������� ������� � ������������, ���������� � <a href="/index.php?do=feedback">��������������</a> �����.
		[/registration]
		[validation]
				<b>��������� ����������,</b><br />
				��� ������� ��� ��������������� �� ����� �����,
				������ ���������� � ��� �������� ��������, ������� ��������� �������������� ���� � ����� �������.
		[/validation]</td>
	</tr>
[registration]
	<tr class="story">
		<td align="left">�����:</td>
		<td align="left"><input style="float: left;" type="text" name="name" id='name' style="width:175px; margin-right: 6px;" class="f_input" /><input class="bbcodes" style="font-size: 11px; float: left;" title="��������� ����������� ������ ��� �����������" onclick="CheckLogin(); return false;" type="button" value="��������� ���" />
	<br /><br /><div id='result-registration'></div></td>
	</tr>
	<tr class="story">
		<td align="left">������:</td>
		<td align="left"><input type="password" name="password1" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">��������� ������:</td>
		<td align="left"><input type="password" name="password2" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">��� E-Mail:</td>
		<td align="left"><input type="text" name="email" class="f_input" /></td>
	</tr>
[sec_code]
	<tr class="story">
		<td align="left">������� ���<br />� ��������:</td>
		<td align="left">{reg_code} <div><input type="text" name="sec_code" style="width:115px" class="f_input" /></div></td>
	</tr>
[/sec_code]
[recaptcha]
	<tr class="story">
		<td align="left">������� ��� �����, ���������� �� �����������: </td>
		<td align="left">{recaptcha}</td>
	</tr>
[/recaptcha]
[/registration]
[validation]
			<tr>
				<td class="story">���� ���:</td>
				<td><input type="text" name="fullname" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">����� ����������:</td>
				<td><input type="text" name="land" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">����� ICQ:</td>
				<td><input type="text" name="icq" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">����:</td>
				<td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">� ����:</td>
				<td><textarea name="info" style="width: 98%;" rows="8" class="f_textarea" /></textarea></td>
			</tr>
			{xfields}
[/validation]
<tr class="story">
		<td colspan="2" align="left"><button name="submit" class="fbutton" type="submit"><span>���������</span></button></td>
</tr>
</table>
<br>