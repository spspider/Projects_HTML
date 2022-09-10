<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
{headers}
<link rel="shortcut icon" href="{THEME}/images/favicon.ico" />
<link media="screen" href="{THEME}/style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/libs.js"></script>
<script type="text/javascript" src="/engine/classes/tagcloud/swfobject.js"></script>
  <!-- для блока последние комментарии -->
<script type="text/javascript">
$(document).ready(function(){
  $('.lcomment').hover(
       function(){ $(this).addClass('hover') },
       function(){ $(this).removeClass('hover') }
)
});

    ctrl = false; // признак нажатой клавиши "Ctrl"
     
    $('#textarea').keydown(function(event){
      switch (event.which) {
        case 13: return false; // отключаем стандартное поведение
        case 17: ctrl = true; // клавиша Ctrl нажата и удерживается
      }
    });
    $('#textarea').keyup(function(event){
      switch (event.which) {
        case 13:
          if (!ctrl) { // если ctrl не нажат
            $('#form').submit(); // отправляем форму
            return false;
          }
          breakText(); // иначе вставляем конец строки
        break;
        case 17: ctrl = false; // Ctrl отпустили
      }          
    });
  
      function breakText() {
      var caret = getCaretPosition('textarea');
      var text = $('#textarea').val();
      $('#textarea').val(text.substring(0, caret)+'\r\n'+(text.substring(caret)));
      setCaretPosition('textarea', ($.browser.opera) ? caret+2 : caret+1);
    }

</script>
<script type="text/javascript">
(function($){

  $(function(){
    var e = $(".scrollTop");
    var  speed = 500;

    e.click(function(){
      $("html:not(:animated)" +( !$.browser.opera ? ",body:not(:animated)" : "")).animate({ scrollTop: 0}, 500 );
      return false; //важно!
    });
    //появление
    function show_scrollTop(){
      ( $(window).scrollTop()>300 ) ? e.fadeIn(600) : e.hide();
    }
    $(window).scroll( function(){show_scrollTop()} ); show_scrollTop();
  });

})(jQuery)
</script>
<!-- /для блока последние комментарии -->
</head>
<body>
{AJAX}
<table class="login" cellpadding="0" cellspacing="0" border="0" width="100%" height="45">
<tr>
  <td class="login" align="center" width="1200">{login}</td>
</tr>
</table>
<table class="logo" cellpadding="0" cellspacing="0" border="0" width="100%" height="100">
<tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" border="0" width="1200" height="100">
<tr>
  <td width="950" class="logo" align="center"><a href="/index.php" target="_self"><img style="margin-right: -200px;" src="{THEME}/images/logo.png" border="0" title="Alter-side::Alternative Music For All"></a></td>
  <td width="250">
      <div class="search_main">
        <form method="post" action=''>
          <input type="hidden" name="do" value="search" />
                    <input type="hidden" name="subaction" value="search" />
          <input size="35" class="search_main_input" id="story" name="story" value="Поиск..." onblur="if(this.value=='') this.value='Поиск...';" onfocus="if(this.value=='Поиск...') this.value='';" type="text" />
          <input title="Найти" alt="Найти" type="image" src="{THEME}/images/search.jpg" />
        </form>
      </div>
  </td>
  </tr>
</table>
</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" style="padding-top: 20px;" class="main" align="center" border="0" width="1200" height="900">
<tr>
<!-- левые блоки -->
  <td width="250" align="right" valign="top" style="padding-right: 20px;">
  <div style="width: 250px;" class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="l_block1">Навигация по сайту</td>
      </tr>
      <tr>
        <td class="l_block_a">{banner_menu}</td>
      </tr>
      <tr>
        <td class="l_block_b">{banner_misc_menu}</td>
      </tr>
    </table>
    </div>
    <div style="width: 250px;" class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="l_block">
        Календарь
        </td>
      </tr>
      <tr>
        <td class="l_block_a">{calendar}</td>
      </tr>
    </table>
    </div>
    <div style="width: 250px;" class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="l_block">
        <a href="/index.php?do=tags" title="Все теги">Теги</a>
        </td>
      </tr>
      <tr>
        <td class="r_block_a" align="center">
<div id="cumuluscontent">
        <p>Требуется для просмотра<noindex><a href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="nofollow">Flash Player 9</a></noindex> или выше.</p>
    </div>
    <script type="text/javascript"> 
    var tagcloud_cl = new SWFObject("/engine/classes/tagcloud/tagcloud.swf", "tagcloud", "160", "160", "9", "#6fffff");
  var tagcloud_cl_temp = encodeURIComponent("<tags>{tags}</tags>");
  tagcloud_cl.addParam("wmode", "transparent");               
  tagcloud_cl.addVariable("tcolor", "0xffffff");
  tagcloud_cl.addVariable("tspeed", "100");
  tagcloud_cl.addVariable("distr", "true");
  tagcloud_cl.addVariable("mode", "tags");
  tagcloud_cl.addVariable("tagcloud", tagcloud_cl_temp);
  tagcloud_cl.write("cumuluscontent");
    </script>
  {tags_all_view}  
        </td>
      </tr>
    </table>
    </div>
    <div style="width: 250px;" class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="l_block">
        mini Chat
        </td>
      </tr>
      <tr>
        <td style="padding-left: -10px;" class="l_block_chat">{include file="engine/modules/iChat/run.php"}</td>
      </tr>
    </table>
    </div>
    <div style="width: 250px;" class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="l_block">Архив новостей</td>
      </tr>
      <tr>
        <td class="l_block_a">{archives}</td>
      </tr>
    </table>
    </div>
  </td>
<!-- /левые блоки -->
<!-- новости -->
  <td width="600" align="center" valign="top">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td class="c_block">{banner_random}{info}{content}</td>
      </tr>
    </table>
  </td>
<!-- /новости -->
<!-- правые блоки -->
  <td width="250" align="left" valign="top" style="padding-left: 20px;">
  <div class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="r_block1">Топ альбомов</td>
      </tr>
      <tr>
        <td width="250" class="r_block_a">{topnews}</td>
      </tr>
    </table>
    </div>
    <div class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="r_block">Топ комментаторов</td>
      </tr>
      <tr>
                            <td width="250" class="r_block_a">{top_users}</td>
      </tr>
    </table>
    </div>
    <div class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="r_block">Последние комментарии</td>
      </tr>
      <tr>
        <td width="250" class="l_block_com">{comments-last}</td>
      </tr>
    </table>
    </div>
    <div class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" height="45" class="r_block">Опрос</td>
      </tr>
      <tr>
        <td width="250" class="r_block_a">{vote}</td>
      </tr>
    </table>
    </div>
    <div class="shadow">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" class="r_block_s">{changeskin}</td>
      </tr>
    </table>
    </div>
  </td>
<!-- /правые блоки -->
</tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" class="footer" width="100%" height="71">
  <tr>
  <td>
  <table cellpadding="0" align="center" cellspacing="0" border="0" width="1200">
        <tr>
          <td align="left" width="700">
          <span class="copyright">
            Дизайн и верстка by <a class="tooltip">Cerga<span>ICQ: 1009269<small></small></span></a> &copy; 2011<br />
            Все права на публикуемые материалы принадлежат их владельцам. Администрация не несет ответственность за их использование.
          </span>
          </td>
          <td align="right" width="40">
<!--Rating@Mail.ru counter-->
<a target="_top" href="http://top.mail.ru/jump?from=1429075">
<img src="http://de.cc.b5.a1.top.mail.ru/counter?id=1429075;t=135" 
border="0" height="40" width="88" alt="Рейтинг@Mail.ru"></a>
<!--// Rating@Mail.ru counter-->
          </td>
          <td align="right" width="40">
            <a title="Мы на Last.fm" href="http://www.lastfm.ru/group/alter-side.com"><img src="{THEME}/images/lastfm.png" onmouseover="this.src='{THEME}/images/lastfmp.png'" onmouseout="this.src='{THEME}/images/lastfm.png'"></a>
          </td>
          <td align="right" width="40">
            <a title="Мы ВКонтакте" href="http://vkontakte.ru/club4106444"><img src="{THEME}/images/vk.png" onmouseover="this.src='{THEME}/images/vkp.png'" onmouseout="this.src='{THEME}/images/vk.png'"></a>
          </td>
        </tr>
  </table>
  </td>
  </tr>
</table>
<a class='scrollTop' href='#header' style='display:none;'></a>
</body>
</html>
