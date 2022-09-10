<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="50">Пользователь: {usertitle}</td>
	</tr>
	<tr class="story">
		<td width="100" valign="top" align="left"><img src="{foto}" alt=""/></td>
		<td valign="top" align="left">
			<table>
				<tr>
					<td><span class="grey">Полное имя:</span> <b>{fullname}</b></td>
				</tr>
				<tr>
					<td>{rate}</td>
				</tr>
				<tr>
					<td><span class="grey">Группа:</span> {status} [time_limit]&nbsp;В группе до: {time_limit}[/time_limit]</td>
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
					<td><span class="grey">Количество публикаций:</span> <b>{news_num}</b> [{news}][rss]<img src="{THEME}/images/rss.png" alt="rss" style="vertical-align: middle; margin-left: 5px;" />[/rss]</td>
				</tr>
				<tr>
					<td><span class="grey">Количество комментариев:</span> <b>{comm_num}</b> [{comments}]</td>
				</tr>
				<tr>
					<td><span class="grey">Дата регистрации:</span> <b>{registration}</b></td>
				</tr>
				<tr>
					<td><span class="grey">Последнее посещение:</span> <b>{lastdate}</b></td>
				</tr>
				<tr>
					<td><span class="grey">Место жительства:</span> {land}</td>
				</tr>
				<tr>
					<td><span class="grey">Немного о себе:</span> {info}</td>
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
		<td colspan="3" align="left" height="50">Редактирование профиля</td>
	</tr>
	<tr class="story">
		<td align="left">Ваше Имя:</td>
		<td align="left"><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Ваш E-Mail:</td>
		<td align="left"><input type="text" name="email" value="{editmail}" class="f_input" /><br />
					<div class="checkbox">{hidemail}</div>
					<div class="checkbox"><input type="checkbox" id="subscribe" name="subscribe" value="1" /> <label for="subscribe">Отписаться от подписанных новостей</label></div></td>
	</tr>
	<tr class="story">
		<td align="left">Место жительства:</td>
		<td align="left"><input type="text" name="land" value="{land}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Номер ICQ:</td>
		<td align="left"><input type="text" name="icq" value="{icq}" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Старый пароль:</td>
		<td align="left"><input type="password" name="altpass" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Новый пароль:</td>
		<td align="left"><input type="password" name="password1" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Повторите:</td>
		<td align="left"><input type="password" name="password2" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Блокировка по IP:<br />Ваш IP: {ip}</td>
		<td align="left"><textarea name="allowed_ip" style="width:98%;" rows="5" class="f_textarea">{allowed-ip}</textarea><br><span class="small pink">
						* Внимание! Будьте бдительны при изменении данной настройки.
						Доступ к Вашему аккаунту будет доступен только с того IP-адреса или подсети, который Вы укажете.
						Вы можете указать несколько IP адресов, по одному адресу на каждую строчку.
						<br />
						Пример: 192.48.25.71 или 129.42.*.*</span></td>
	</tr>
	<tr class="story">
		<td align="left">Аватар:</td>
		<td align="left"><input type="file" name="image" class="f_input" /><br />
					<div class="checkbox"><input type="checkbox" name="del_foto" id="del_foto" value="yes" /> <label for="del_foto">Удалить фотографию</label></div></td>
	</tr>
	<tr class="story">
		<td align="left">О себе:</td>
		<td align="left"><textarea name="info" style="width:98%;" rows="5" class="f_textarea">{editinfo}</textarea></td>
	</tr>
	<tr class="story">
		<td align="left">Подпись:</td>
		<td align="left"><textarea name="signature" style="width:98%;" rows="5" class="f_textarea">{editsignature}</textarea></td>
	</tr>
	<tr class="story">
		<td colspan="2" align="left">{xfields}</td>
	</tr>
	<tr class="story">
		<td align="left"><input class="fbutton" type="submit" name="submit" value="Отправить" /></td>
		<td align="left"><input name="submit" type="hidden" id="submit" value="submit" /></td>
	</tr>
</table>
[/not-logged]