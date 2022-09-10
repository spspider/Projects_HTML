<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2011 SoftNews Media Group
=====================================================
 ������ ��� ������� ���������� �������
=====================================================
 ����: shortnews.php
-----------------------------------------------------
 ����������: WYSIWYG ��� �����������
=====================================================
*/
if(!defined('DATALIFEENGINE'))
{
  die("Hacking attempt!");
}

if ($mod != "editnews") {
$row['id'] = "";
$row['autor'] = $member_id['name'];
}

if (!isset ($row['short_story'])) $row['short_story'] = "";

echo <<<HTML
<tr>
	<td width="140" valign="top">
	<br />$lang[addnews_short]</td>
	<td>
<script type="text/javascript" src="engine/editor/jscripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
$(function(){

	$('#short_story,#full_story').tinymce({
		script_url : 'engine/editor/jscripts/tiny_mce/tiny_mce.js',
		theme : "advanced",
		skin : "cirkuit",
		language : "{$lang['wysiwyg_language']}",
		width : "98%",
		height : "400",
		plugins : "layer,table,style,advhr,spellchecker,advimage,advlist,emotions,inlinepopups,insertdatetime,media,searchreplace,print,contextmenu,paste,fullscreen,nonbreaking,typograf",
		relative_urls : false,
		convert_urls : false,
		media_strict : false,


		dialog_type : 'window',
		extended_valid_elements : "noindex,div[align|class|style|id|title]",
		custom_elements : 'noindex',

		// Theme options
		theme_advanced_buttons1 : "formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,forecolor,backcolor,|,removeformat,cleanup,|,code",
		theme_advanced_buttons2 : "print,|,tablecontrols,|,styleprops,spellchecker,typograf,|,sub,sup,|,charmap,advhr,visualaid,|,insertdate,inserttime,|,insertlayer,moveforward,movebackward,absolute",
		theme_advanced_buttons3 : "cut,copy,|,paste,pastetext,pasteword,|,search,replace,|,outdent,indent,|,undo,redo,|,link,unlink,dle_leech,|,dle_upload,image,media,dle_mp,dle_mp3,emotions,dle_spoiler,|,dle_tube,dle_quote,dle_code,dle_hide,dle_break,dle_page",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
	   	plugin_insertdate_dateFormat : "%d-%m-%Y",
	    plugin_insertdate_timeFormat : "%H:%M:%S",
		spellchecker_languages : "+Russian=ru,English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv",
		// Example content CSS (should be your site CSS)
		content_css : "{$config['http_home_url']}engine/editor/css/content.css",

		setup : function(ed) {
		        // Add a custom button
			ed.addButton('dle_quote', {
			title : '{$lang['bb_t_quote']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_quote.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[quote]' + ed.selection.getContent() + '[/quote]');
			}
	           });

			ed.addButton('dle_hide', {
			title : '{$lang['bb_t_hide']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_hide.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[hide]' + ed.selection.getContent() + '[/hide]');
			}
	           });

			ed.addButton('dle_code', {
			title : '{$lang['bb_t_code']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_code.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[code]' + ed.selection.getContent() + '[/code]');
			}
	           });

			ed.addButton('dle_break', {
			title : '{$lang['bb_t_br']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_break.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceInsertContent',false,'{PAGEBREAK}');
			}
	           });

			ed.addButton('dle_page', {
			title : '{$lang['bb_t_p']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_page.gif',
			onclick : function() {
				ed.execCommand('mceReplaceContent',false,"[page=1]{\$selection}[/page]");
			}
	           });

			ed.addButton('dle_leech', {
			title : '{$lang['bb_t_leech']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_leech.gif',
			onclick : function() {
				ed.execCommand('mceReplaceContent',false,"[leech=http://]{\$selection}[/leech]");
			}
	           });

			ed.addButton('dle_mp', {
			title : '{$lang['bb_t_video']} (BB Codes)',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_mp.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[video=http://]");
			}
	           });

			ed.addButton('dle_tube', {
			title : '{$lang['bb_t_yvideo']} (BB Codes)',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_tube.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[youtube=http://]");
			}
	           });

			ed.addButton('dle_upload', {
			title : '{$lang['bb_t_up']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_upload.gif',
			onclick : function() {

				window.open('?mod=files&action=quick&area=short_story&wysiwyg=yes&author={$row['autor']}&news_id={$row['id']}', '_Addimage', 'toolbar=0,location=0,status=0, left=0, top=0, menubar=0,scrollbars=yes,resizable=0,width=640,height=550');
			}
	           });

			ed.addButton('dle_spoiler', {
			title : '',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_spoiler.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[spoiler]' + ed.selection.getContent() + '[/spoiler]');
			}
	           });

			ed.addButton('dle_mp3', {
			title : '',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_mp3.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[audio=http://]");
			}
	           });
   		 }


	});

	$('textarea.mceEditor').tinymce({
		script_url : 'engine/editor/jscripts/tiny_mce/tiny_mce.js',
		theme : "advanced",
		skin : "cirkuit",
		language : "{$lang['wysiwyg_language']}",
		width : "98%",
		height : "250",
		plugins : "advhr,advimage,advlist,emotions,inlinepopups,insertdatetime,media,searchreplace,contextmenu,paste,fullscreen,nonbreaking",
		relative_urls : false,
		convert_urls : false,
		force_br_newlines : true,
		force_p_newlines : false,
		dialog_type : 'window',
		extended_valid_elements : "div[align|class|style|id|title]",

		// Theme options
		theme_advanced_buttons1 : "formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,forecolor,backcolor,|,removeformat,cleanup|,code",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,outdent,indent,|,undo,redo,|,link,image,dle_upload,|,media,dle_mp,dle_mp3,emotions,|,dle_spoiler,dle_tube,dle_quote,dle_code,dle_hide,sub,sup,charmap",
		theme_advanced_buttons3 : "",

		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
	   	plugin_insertdate_dateFormat : "%d-%m-%Y",
	    	plugin_insertdate_timeFormat : "%H:%M:%S",

		// Example content CSS (should be your site CSS)
		content_css : "{$config['http_home_url']}engine/editor/css/content.css",

		setup : function(ed) {
		        // Add a custom button
			ed.addButton('dle_quote', {
			title : '{$lang['bb_t_quote']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_quote.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[quote]' + ed.selection.getContent() + '[/quote]');
			}
	           });

			ed.addButton('dle_hide', {
			title : '{$lang['bb_t_hide']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_hide.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[hide]' + ed.selection.getContent() + '[/hide]');
			}
	           });

			ed.addButton('dle_code', {
			title : '{$lang['bb_t_code']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_code.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[code]' + ed.selection.getContent() + '[/code]');
			}
	           });


			ed.addButton('dle_leech', {
			title : '{$lang['bb_t_leech']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_leech.gif',
			onclick : function() {
				ed.execCommand('mceReplaceContent',false,"[leech=http://]{\$selection}[/leech]");
			}
	           });

			ed.addButton('dle_mp', {
			title : '{$lang['bb_t_video']} (BB Codes)',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_mp.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[video=http://]");
			}
	           });

			ed.addButton('dle_tube', {
			title : '{$lang['bb_t_yvideo']} (BB Codes)',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_tube.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[youtube=http://]");
			}
	           });

			ed.addButton('dle_upload', {
			title : '{$lang['bb_t_up']}',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_upload.gif',
			onclick : function() {

				window.open('?mod=files&action=quick&area=short_story&wysiwyg=yes&author={$row['autor']}&news_id={$row['id']}', '_Addimage', 'toolbar=0,location=0,status=0, left=0, top=0, menubar=0,scrollbars=yes,resizable=0,width=640,height=550');
			}
	           });

			ed.addButton('dle_spoiler', {
			title : '',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_spoiler.gif',
			onclick : function() {
				// Add you own code to execute something on click
				ed.execCommand('mceReplaceContent',false,'[spoiler]' + ed.selection.getContent() + '[/spoiler]');
			}
	           });

			ed.addButton('dle_mp3', {
			title : '',
			image : '{$config['http_home_url']}engine/editor/jscripts/tiny_mce/themes/advanced/img/dle_mp3.gif',
			onclick : function() {
				ed.execCommand('mceInsertContent',false,"[audio=http://]");
			}
	           });
   		 }


	});
});
</script>

    <textarea id="short_story" name="short_story" style="width:98%;height:300px;">{$row['short_story']}</textarea>
</td></tr>
HTML;

?>