[not-group=5]
<table>
	<tr>
		<td><i>������, {login}!</i></td>
[admin-link]<td><a href="{admin-link}" target="_blank"><b>�����������</b></a></td>[/admin-link]
		<td><a href="{addnews-link}"><b>�������� �������</b></a></td>
		<td><a href="{pm-link}">���������: ({new-pm} | {all-pm})</a></td>
		<td><a href="{profile-link}">��� �������</a></td>
		<td><a href="{favorites-link}">��� ��������</a></td>
		<td><a href="{stats-link}">����������</a></td>
		<td><a href="{logout-link}"><b>�����</b></a></td>
	</tr>
</table>
[/not-group]
[group=5]
<table>
	<tr>
	<form method="post" action="">
		<td>�����: <input type="text" name="login_name" id="login_name" /></td>
		<td>������: <input type="password" name="login_password" id="login_password" /></td>
		<td><button class="fbutton" onclick="submit();" type="submit" title="�����"><span>�����</span></button></td>
		<input name="login" type="hidden" id="login" value="submit" />
	</form>
		<td><a href="{lostpassword-link}">������?</a></td>
		<td><a href="{registration-link}"><i>�����������</i></a></td>
	</tr>
</table>
[/group]