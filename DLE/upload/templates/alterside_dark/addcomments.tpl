<table width="500" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="3" align="left" height="50"><i>{title}</i></td>
	</tr>
[not-logged]
	<tr>
		<td width="100" class="story" align="left">Имя:<span class="impot">*</span></td>
		<td width="100" ><input type="text" name="name" id="name" class="f_input" /></td>
	</tr>
	<tr>
		<td width="100" class="story" align="left">E-Mail:<span class="impot">*</span></td>
		<td><input type="text" name="mail" id="mail" class="f_input" /></td>
	</tr>
[/not-logged]
	<tr>
		<td class="story" colspan="3" align="left">{editor}</td>
	</tr>
[sec_code]
	<tr>
		<td class="story" align="left">Введите код: <span class="impot">*</span></td>
		<td>{sec_code}</td>
		<td><input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /></td>
	</tr>
[/sec_code]
[recaptcha]
	<tr>
		<td colspan="2" class="story" align="left">Введите два слова, показанных на изображении: <span class="impot">*</span></td>
		<td>{recaptcha}/td>
	</tr>
[/recaptcha]
	<tr>
		<td colspan="3" class="story" align="left"><button type="submit" name="submit" class="fbutton"><span>[not-aviable=comments]Добавить[/not-aviable][aviable=comments]Изменить[/aviable]</span></button></td>
	</tr>
</table>