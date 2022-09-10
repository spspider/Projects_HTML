<div class="shadow">
<table width="600" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td align="left" height="50" class="newscat"><i>{link-category}:</i></td>
		<td colspan="5" height="50" align="left">[full-link]{title}[/full-link]</td>
	</tr>
	<tr>
		<td class="fulstory" colspan="5" align="left">{full-story}</td>
		<td align="right" valign="top">
						[edit]
							<div class="links">
									<img style="margin-right: 10px; margin-top: 4px;" src="{THEME}/images/edit.png" title="Редктировать новость"  onmouseover="this.src='{THEME}/images/edit_active.png'" onmouseout="this.src='{THEME}/images/edit.png'" border="0" alt="" />
							</div>
						[/edit]
							{favorites}
						[poll]
							<div class="links">
									<a href="#tabln2"><img style="margin-right: 10px; margin-top: 4px;" src="{THEME}/images/poll.png" title="Опрос"  onmouseover="this.src='{THEME}/images/poll_active.png'" onmouseout="this.src='{THEME}/images/poll.png'" border="0" alt="" /></a>
							</div>
						[/poll]
						[print-link]
							<div class="links">
									<img style="margin-right: 10px; margin-top: 4px;" src="{THEME}/images/printer.png" title="Напечатать"  onmouseover="this.src='{THEME}/images/printer_active.png'" onmouseout="this.src='{THEME}/images/printer.png'" border="0" alt="" />
							</div>
						[/print-link]
		</td>
	</tr>
	<tr>
		<td class="story" colspan="5" align="left">{rating}</td>
	</tr>
	[tags]<tr>
		<td class="story" colspan="5" align="left">
		<div class="editdate">Метки к статье: {tags}</div>
		</td>
	</tr>[/tags]
	[group=5]
	<tr>
		<td class="story" colspan="5" align="left"><div class="quote">Уважаемый посетитель, Вы зашли на сайт как незарегистрированный пользователь.<br />
	Мы рекомендуем Вам <a href="/index.php?do=register">зарегистрироваться</a> либо войти на сайт под своим именем.</div></td>
	</tr>
	[/group]
	[edit-date]<tr>
		<td class="story" colspan="5" align="left">
		<div class="editdate"><i>Изменил: <b>{editor}</b>[edit-reason]<br />Причина: {edit-reason}[/edit-reason]</i></div>
		</td>
	</tr>[/edit-date]
	[poll]<tr><td class="story" colspan="5" align="left"><div class="tabcont" id="tabln2">{poll}</div></td></tr>[/poll]
	<tr>
		<td class="leftradius" width="125" align="left"><img border="0" src="{THEME}/images/date.png">&nbsp;[day-news]{date}[/day-news]</td>
		<td class="shortstory_panel" width="150" align="left"><img border="0" src="{THEME}/images/com.png">&nbsp;Комментов:&nbsp;[com-link]{comments-num}[/com-link]</td>
		<td class="shortstory_panel" width="150" align="left"><img border="0" src="{THEME}/images/views.png">&nbsp;Просмотров:&nbsp;{views}</td>
		<td class="shortstory_panel" width="150" align="left"><img border="0" src="{THEME}/images/author.png">&nbsp;{author}</td>
		<td class="rightradius" colspan="2" align="right"><a href="javascript:history.go(-1)"><b>Вернуться</b></a></td>
	</tr>
</table>
</div>
<br>