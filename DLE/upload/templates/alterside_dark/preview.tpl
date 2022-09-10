[short-preview]
<table width="600" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td align="left" height="50"><i>{link-category}:</i></td>
		<td colspan="5" height="50" align="left">[full-link]{title}[/full-link]</td>
	</tr>
	<tr>
		<td class="fulstory" colspan="5" align="left">{short-story}</td>
		<td align="right" valign="top">
						[edit]
							<div class="links">
									<img style="margin-right: 10px; margin-top: 4px;" src="{THEME}/images/edit.png" title="Редктировать новость"  onmouseover="this.src='{THEME}/images/edit_active.png'" onmouseout="this.src='{THEME}/images/edit.png'" border="0" alt="" />
							</div>
						[/edit]
						{favorites}
		</td>
	</tr>
	<tr class="shortstory_panel">
		<td width="125" align="left"><img border="0" src="{THEME}/images/date.png">&nbsp;[day-news]{date}[/day-news]</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/com.png">&nbsp;Комментов:&nbsp;[com-link]{comments-num}[/com-link]</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/views.png">&nbsp;Просмотров:&nbsp;{views}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/author.png">&nbsp;{author}</td>
		<td colspan="2" align="right">[full-link]<b>Подробнее</b>[/full-link]</td>
	</tr>
</table>
<br>
[/short-preview]
[full-preview]
<table width="600" align="center" class="shortstory" cellpadding="5" cellspacing="0">
	<tr class="shortstory_top">
		<td align="left" height="50"><i>{link-category}:</i></td>
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
		</td>
	</tr>
	[tags]<tr>
		<td class="story" colspan="5" align="left">
		<div class="editdate">Метки к статье: {tags}</div>
		</td>
	</tr>[/tags]
	<tr class="shortstory_panel">
		<td width="125" align="left"><img border="0" src="{THEME}/images/date.png">&nbsp;[day-news]{date}[/day-news]</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/com.png">&nbsp;Комментов:&nbsp;[com-link]{comments-num}[/com-link]</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/views.png">&nbsp;Просмотров:&nbsp;{views}</td>
		<td width="150" align="left"><img border="0" src="{THEME}/images/author.png">&nbsp;{author}</td>
		<td colspan="2" align="right">[full-link]<b>Подробнее</b>[/full-link]</td>
	</tr>
</table>
<br>
[/full-preview]
[static-preview]
<h2 class="heading">{description}</h2>
<div class="basecont">
	{static}
	<br clear="all" />
	<div class="storenumber">{pages}</div>
</div>
[/static-preview]
