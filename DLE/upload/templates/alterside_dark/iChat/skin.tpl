[group=1]

<input class="bbcodes" style="font-size: 11px; float: right;" title="Настройка чата" onclick="iChatAdmin(); return false;" type="button" value="Настройка чата" />
<br />&nbsp;

[/group]

<div id="iChat-style" style="width:max;height:400px; overflow:auto;"><div id="iChat-messages" align="left">{messages}</div></div><br />

[editor_form]
[not-group=5]
<div class="iChat_editor">

<div class="iChat_bbeditor">

<span id="b_b" onclick="iChat_simpletag('b')"><img title="Полужирный" src="{THEME}/img/bbcode/b.png" alt="" /></span>
<span id="b_i" onclick="iChat_simpletag('i')"><img title="Наклонный текст" src="{THEME}/img/bbcode/i.png" alt="" /></span>
<span id="b_u" onclick="iChat_simpletag('u')"><img title="Подчеркнутый текст" src="{THEME}/img/bbcode/u.png" alt="" /></span>
<span id="b_s" onclick="iChat_simpletag('s')"><img title="Зачеркнутый текст" src="{THEME}/img/bbcode/s.png" alt="" /></span>

<img class="bbspacer" src="{THEME}/img/bbcode/brkspace.png" alt="" />

<span id="b_emo" onclick="iChat_ins_emo(this);"><img title="Вставка смайликов" src="{THEME}/img/bbcode/emo.png" alt="" /></span>

[allow_url]
<span id="b_quote" onclick="iChat_tag_leech()"><img title="Вставка защищенной ссылки" src="{THEME}/img/bbcode/link.png" alt="" /></span>
[/allow_url]

<span id="b_color" onclick="iChat_ins_color(this);"><img title="Цвет текста" src="{THEME}/img/bbcode/color.png" alt="" /></span>
<!-- <span id="b_hide" onclick="iChat_simpletag('hide')"><img title="Скрытый текст" src="{THEME}/img/bbcode/hide.png" alt="" /></span> -->
<span id="b_quote" onclick="iChat_simpletag('quote')"><img title="Вставка цитаты" src="{THEME}/img/bbcode/quote.png" alt="" /></span>
<span id="b_translit" onclick="iChat_translit()"><img title="Преобразовать выбранный текст из транслитерации в кириллицу" src="{THEME}/img/bbcode/translit.png" alt="" /></span>

<div class="clr"></div>

</div>


<input type="hidden" name="name" id="name" value="" /><input type="hidden" name="mail" id="mail" value="" />


<textarea style="width: 237px;" name="message" id="message"></textarea>

<div align="right" style="font-size: 9px; padding-right: 3px;">Designed by <a href="http://weboss.net/" target="_blank" style="text-decoration: none; font-size: 9px;">WEBoss.Net</a></div>

</div>
[/not-group]

<script language="javascript" type="text/javascript">
<!--
$("textarea[name='message']").keypress(function(e) {
   if((e.ctrlKey) && ((e.keyCode == 0xA)||(e.keyCode == 0xD))) {
     iChatAdd('site'); return false;
   }
 });
//-->
</script>

[not-group=5]
<div style="padding-top:12px;">
<input title="Архив" onclick="iChatHistory(); return false;" type="button" value="Архив" />&nbsp;
<input title="Отправить" onclick="iChatAdd('site'); return false;" type="button" value="Отправить" />
</div>
[/not-group]

[/editor_form]

[no_access]

<div class="ui-state-error ui-corner-all" style="padding:9px;">Только зарегистрированные посетители могут писать в чате.<div align="right" style="font-size: 9px; padding-right: 3px;">Designed by <a href="http://weboss.net/" target="_blank" style="text-decoration: none; font-size: 9px;">WEBoss.Net</a></div></div>

[/no_access]
