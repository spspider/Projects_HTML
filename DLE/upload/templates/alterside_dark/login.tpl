[not-group=5]
<table>
	<tr>
		<td><i>Привет, {login}!</i></td>
[admin-link]<td><a href="{admin-link}" target="_blank"><b>Админпанель</b></a></td>[/admin-link]
		<td><a href="{addnews-link}"><b>Добавить новость</b></a></td>
		<td><a href="{pm-link}">Сообщения: ({new-pm} | {all-pm})</a></td>
		<td><a href="{profile-link}">Мой профиль</a></td>
		<td><a href="{favorites-link}">Мои закладки</a></td>
		<td><a href="{stats-link}">Статистика</a></td>
		<td><a href="{logout-link}"><b>Выход</b></a></td>
	</tr>
</table>
[/not-group]
[group=5]
<table>
	<tr>
	<form method="post" action="">
		<td>Логин: <input type="text" name="login_name" id="login_name" /></td>
		<td>Пароль: <input type="password" name="login_password" id="login_password" /></td>
		<td><button class="fbutton" onclick="submit();" type="submit" title="Войти"><span>Войти</span></button></td>
		<input name="login" type="hidden" id="login" value="submit" />
	</form>
		<td><a href="{lostpassword-link}">Забыли?</a></td>
		<td><a href="{registration-link}"><i>Регистрация</i></a></td>
	</tr>
</table>
[/group]