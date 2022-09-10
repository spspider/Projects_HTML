<div id="mchat-style" style="border: 1px solid grey; width: 220px;height:500px; overflow:auto;">
<div id="mchat_messages">{story}</div>
</div><br />

[isloged]

<div style="padding-top:5px">
<input type="text" name="message"  class="f_input" id="message" style="width:168px"/>
</div>

<div style="padding-top:4px">
<input type="button" class="bbcodes" onclick="mChat_Display('mchat-smiles', 'fast'); return false;" value="Смайлы" />
<input type="button" class="bbcodes" onclick="mChat_Display('mchat-bbcodes', 'fast'); return false;" value="BB-Cods" />
<input type="button" class="bbcodes" onclick="SendMessage()" value="&raquo;" />
</div>
[/isloged]

[notloged]
[guestyes]
<table><tr>
<td><input type="text" value="Ваше имя" onclick="AWclear(this, 'Ваше имя'); return false;" name="mc_name" class="f_input" id="mc_name" style="width:80px"/>&nbsp;</td>
<td><input type="text" name="mc_email" value="E-mail" onclick="AWclear(this, 'E-mail'); return false;" class="f_input" id="mc_email" style="width:85px"/></td></tr></table>
<div style="padding-top:5px">
<input type="text" name="message" value="Сообщение"  onclick="AWclear(this, 'Сообщение'); return false;" class="f_input" id="message" style="width:168px"/>
</div>
<div style="padding-top:4px">
<input type="button" class="bbcodes" onclick="mChat_Display('mchat-smiles', 'fast'); return false;" value="Смайлы" />
<input type="button" class="bbcodes" onclick="mChat_Display('mchat-bbcodes', 'fast'); return false;" value="BB-Cods" />
<input type="button" class="bbcodes" onclick="SendMessage()" value="&raquo;" />
</div>
[/guestyes]
[guestno]
<center>
<div id="mchat-style" style="padding: 1px; text-align: center;"><br />Только зарегистрированные пользователи могут отправлять сообщения <a href="/index.php?do=login">войдите </a> или <a href="/index.php?do=register">зарегистрируйтесь</a>.</div>
</center>
[/guestno]
[/notloged]

<div id="mchat-smiles">{smiles}</div>
<div style="padding-left:0px" id="mchat-bbcodes">
<div  style="width:220px; height:25px; border:1px solid #BBB; background-image:url('{THEME}/bbcodes/bg.gif')">
<div id="b_b" class="editor_button" onclick="DMC_simpletag('b');mChat_Display('mchat-bbcodes', 'fast');"><img title="" src="{THEME}/bbcodes/b.gif" width="23" height="25" border="0"></div>
<div id="b_i" class="editor_button" onclick="DMC_simpletag('i');mChat_Display('mchat-bbcodes', 'fast');"><img title="" src="{THEME}/bbcodes/i.gif" width="23" height="25" border="0"></div>
<div id="b_u" class="editor_button" onclick="DMC_simpletag('u');mChat_Display('mchat-bbcodes', 'fast');"><img title="" src="{THEME}/bbcodes/u.gif" width="23" height="25" border="0"></div>
<div id="b_s" class="editor_button" onclick="DMC_simpletag('s');mChat_Display('mchat-bbcodes', 'fast');"><img title="" src="{THEME}/bbcodes/s.gif" width="23" height="25" border="0"></div>
</div></div>
