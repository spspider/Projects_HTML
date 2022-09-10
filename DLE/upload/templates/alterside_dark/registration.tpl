<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="25">
		[registration]Регистрация нового пользователя[/registration]
		[validation]Обновление профиля пользователя[/validation]
		</td>
	</tr>
	<tr><td class="story" colspan="2">
		[registration]
				<b>Здравствуйте, уважаемый посетитель нашего сайта!</b><br />
				Регистрация на нашем сайте позволит Вам быть его полноценным участником.
				Вы сможете добавлять новости на сайт, оставлять свои комментарии, просматривать скрытый текст и многое другое.
				<br />В случае возникновения проблем с регистрацией, обратитесь к <a href="/index.php?do=feedback">администратору</a> сайта.
		[/registration]
		[validation]
				<b>Уважаемый посетитель,</b><br />
				Ваш аккаунт был зарегистрирован на нашем сайте,
				однако информация о Вас является неполной, поэтому заполните дополнительные поля в Вашем профиле.
		[/validation]</td>
	</tr>
[registration]
	<tr class="story">
		<td align="left">Логин:</td>
		<td align="left"><input style="float: left;" type="text" name="name" id='name' style="width:175px; margin-right: 6px;" class="f_input" /><input class="bbcodes" style="font-size: 11px; float: left;" title="Проверить доступность логина для регистрации" onclick="CheckLogin(); return false;" type="button" value="Проверить имя" />
	<br /><br /><div id='result-registration'></div></td>
	</tr>
	<tr class="story">
		<td align="left">Пароль:</td>
		<td align="left"><input type="password" name="password1" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Повторите пароль:</td>
		<td align="left"><input type="password" name="password2" class="f_input" /></td>
	</tr>
	<tr class="story">
		<td align="left">Ваш E-Mail:</td>
		<td align="left"><input type="text" name="email" class="f_input" /></td>
	</tr>
[sec_code]
	<tr class="story">
		<td align="left">Введите код<br />с картинки:</td>
		<td align="left">{reg_code} <div><input type="text" name="sec_code" style="width:115px" class="f_input" /></div></td>
	</tr>
[/sec_code]
[recaptcha]
	<tr class="story">
		<td align="left">Введите два слова, показанных на изображении: </td>
		<td align="left">{recaptcha}</td>
	</tr>
[/recaptcha]
[/registration]
[validation]
			<tr>
				<td class="story">Ваше Имя:</td>
				<td><input type="text" name="fullname" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">Место жительства:</td>
				<td><input type="text" name="land" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">Номер ICQ:</td>
				<td><input type="text" name="icq" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">Фото:</td>
				<td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
			</tr>
			<tr>
				<td class="story">О себе:</td>
				<td><textarea name="info" style="width: 98%;" rows="8" class="f_textarea" /></textarea></td>
			</tr>
			{xfields}
[/validation]
<tr class="story">
		<td colspan="2" align="left"><button name="submit" class="fbutton" type="submit"><span>Отправить</span></button></td>
</tr>
</table>
<br>