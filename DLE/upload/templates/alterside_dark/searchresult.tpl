[searchposts]
[fullresult]
<table width="600" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="5" align="left" height="50">[result-link]{result-title}[/result-link]</td>
		<td align="right" height="50" class="newscat">{link-category}</td>
	</tr>
	<tr>
		<td class="fulstory" colspan="5" align="left">{result-text}</td>
		<td align="right" valign="top">
						[not-group=5][edit]
							<div class="links">
									<img style="margin-right: 10px; margin-top: 4px;" src="{THEME}/images/edit.png" title="Редктировать новость"  onmouseover="this.src='{THEME}/images/edit_active.png'" onmouseout="this.src='{THEME}/images/edit.png'" border="0" alt="" />
							</div>
						[/edit][/not-group]
							{favorites}
		</td>
	</tr>
	<tr class="shortstory_panel">
		<td width="125" align="left"><img border="0" src="{THEME}/images/date.png">&nbsp;{result-date}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/com.png">&nbsp;Комментов:&nbsp;{result-comments}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/views.png">&nbsp;Просмотров:&nbsp;{views}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/author.png">&nbsp;{result-author}</td>
		<td colspan="2" align="right">[result-link]<b>Подробнее</b>[/result-link]</td>
	</tr>
</table>
<br>
[/fullresult]
[shortresult]
<table width="600" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td colspan="5" align="left" height="50">[result-link]{result-title}[/result-link]</td>
		<td align="right" height="50" class="newscat">{link-category}</td>
	</tr>
	<tr class="shortstory_panel">
		<td width="125" align="left"><img border="0" src="{THEME}/images/date.png">&nbsp;{result-date}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/com.png">&nbsp;Комментов:&nbsp;{result-comments}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/views.png">&nbsp;Просмотров:&nbsp;{views}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/author.png">&nbsp;{result-author}</td>
		<td colspan="2" align="right">[result-link]<b>Подробнее</b>[/result-link]</td>
	</tr>
</table>
<br>
[/shortresult]
[/searchposts]
[searchcomments]
[fullresult]
<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="com_top">
		<td colspan="3" align="left" height="25"><i>#{search-id}</i> от: {result-author} {result-date} в [result-link]{result-title}[/result-link]</td>
	</tr>
	<tr class="com_top">
		<td colspan="3" align="left" height="25">Регистрация: {registration}&nbsp;ICQ: {icq}</td>
	</tr>
	<tr>
		<td width="100" class="story" valign="top" align="left"><img border="0" src="{foto}" alt=""/></td>
		<td class="story" valign="top" align="left">{result-text}</td>
	</tr>
[not-group=5]
	<tr class="com_bot">
		<td colspan="2" align="left" height="25">
		[com-del][Удалить][/com-del]
		[com-edit][Изменить][/com-edit]
		</td>
	</tr>
[/not-group]
</table>
<br>
[/fullresult]
[shortresult]
<table width="600" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="com_top">
		<td colspan="3" align="left" height="25"><i>#{search-id}</i> от: {result-author} {result-date} в [result-link]{result-title}[/result-link]</td>
	</tr>
[not-group=5]
	<tr class="com_bot">
		<td colspan="2" align="left" height="25">
		[com-del][Удалить][/com-del]
		[com-edit][Изменить][/com-edit]
		</td>
	</tr>
[/not-group]
</table>
<br>
[/shortresult]
[/searchcomments]