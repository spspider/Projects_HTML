var uagent    = navigator.userAgent.toLowerCase();
var is_safari = ( (uagent.indexOf('safari') != -1) || (navigator.vendor == "Apple Computer, Inc.") );
var is_opera  = (uagent.indexOf('opera') != -1);
var is_ie     = ( (uagent.indexOf('msie') != -1) && (!is_opera) && (!is_safari) );
var is_ie4    = ( (is_ie) && (uagent.indexOf("msie 4.") != -1) );

var is_win    =  ( (uagent.indexOf("win") != -1) || (uagent.indexOf("16bit") !=- 1) );
var ua_vers   = parseInt(navigator.appVersion);

var ie_range_cache = '';
var list_open_tag = '';
var list_close_tag = '';
var listitems = '';
var bbtags   = new Array();

var rus_lr2 = ('Å-å-Î-î-¨-¨-¨-¨-Æ-Æ-×-×-Ø-Ø-Ù-Ù-Ú-Ü-Ý-Ý-Þ-Þ-ß-ß-ß-ß-¸-¸-æ-÷-ø-ù-ý-þ-ÿ-ÿ').split('-');
var lat_lr2 = ('/E-/e-/O-/o-ÛO-Ûo-ÉO-Éo-ÇH-Çh-ÖH-Öh-ÑH-Ñh-ØH-Øh-ú'+String.fromCharCode(35)+'-ü'+String.fromCharCode(39)+'-ÉE-Ée-ÉU-Éu-ÉA-Éa-ÛA-Ûa-ûo-éo-çh-öh-ñh-øh-ée-éu-éa-ûa').split('-');
var rus_lr1 = ('À-Á-Â-Ã-Ä-Å-Ç-È-É-Ê-Ë-Ì-Í-Î-Ï-Ð-Ñ-Ò-Ó-Ô-Õ-Õ-Ö-Ù-Û-ß-à-á-â-ã-ä-å-ç-è-é-ê-ë-ì-í-î-ï-ð-ñ-ò-ó-ô-õ-õ-ö-ù-ú-û-ü-ü-ÿ').split('-');
var lat_lr1 = ('A-B-V-G-D-E-Z-I-J-K-L-M-N-O-P-R-S-T-U-F-H-X-C-W-Y-Q-a-b-v-g-d-e-z-i-j-k-l-m-n-o-p-r-s-t-u-f-h-x-c-w-'+String.fromCharCode(35)+'-y-'+String.fromCharCode(39)+'-'+String.fromCharCode(96)+'-q').split('-');

function setFieldName(which)
{
    if (which != selField)
    {
        selField = which;

    }
};

function emoticon(theSmilie)
{
	doInsert(" " + theSmilie + " ", "", false);
};

function pagebreak()
{
	doInsert("{PAGEBREAK}", "", false);
};

function simpletag(thetag)
{
	doInsert("[" + thetag + "]", "[/" + thetag + "]", true);

};
function tag_url()
{
	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='My Webpage';
    }

	DLEprompt(text_enter_url, "http://", dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(text_enter_url_name, thesel, dle_prompt, function (r) {

			doInsert("[url="+enterURL+"]"+r+"[/url]", "", false);
			ie_range_cache = null;
	
		});

	});
};

function tag_leech()
{
	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='My Webpage';
    }

	DLEprompt(text_enter_url, "http://", dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(text_enter_url_name, thesel, dle_prompt, function (r) {

			doInsert("[leech="+enterURL+"]"+r+"[/leech]", "", false);
			ie_range_cache = null;
	
		});

	});
};

function tag_youtube()
{
	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='http://';
    }

	DLEprompt(text_enter_url, thesel, dle_prompt, function (r) {

		doInsert("[media="+r+"]", "", false);
		ie_range_cache = null;
	
	});
};

function tag_flash()
{

	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='http://';
    }

	DLEprompt(text_enter_flash, thesel, dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(text_enter_size, "425,264", dle_prompt, function (r) {

			doInsert("[flash="+r+"]"+enterURL+"[/flash]", "", false);
			ie_range_cache = null;
	
		});

	});

};

function tag_list(type)
{

	list_open_tag = type == 'ol' ? '[ol=1]\n' : '[list]\n';
	list_close_tag = type == 'ol' ? '[/ol]' : '[/list]';
	listitems = '';

	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='';
    }

	insert_list( thesel );

};

function insert_list( thesel )
{
	DLEprompt(text_enter_list, thesel, dle_prompt, function (r) {

		if (r != '') {

			listitems += '[*]' + r + '\n';
			insert_list('');

		} else {

			if( listitems )
			{
				doInsert(list_open_tag + listitems + list_close_tag, "", false);
				ie_range_cache = null;
			}
		}

	}, true);

};

function tag_image()
{

	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='http://';
    }

	DLEprompt(text_enter_image, thesel, dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(img_title, image_align, dle_prompt, function (r) {

			if (r == "") {
				doInsert("[img]"+enterURL+"[/img]", "", false);
			} else {
			
				if (r == "center") {
					doInsert("[center][img]"+enterURL+"[/img][/center]", "", false);
				}
				else {
					doInsert("[img="+r+"]"+enterURL+"[/img]", "", false);
				}
			}
			ie_range_cache = null;
	
		}, true);

	});

};

function tag_video()
{
	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='http://';
    }

	DLEprompt(text_enter_url, thesel, dle_prompt, function (r) {

		doInsert("[video="+r+"]", "", false);
		ie_range_cache = null;
	
	});
};

function tag_audio()
{
	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel ='http://';
    }

	DLEprompt(text_enter_url, thesel, dle_prompt, function (r) {

		doInsert("[audio="+r+"]", "", false);
		ie_range_cache = null;
	
	});
};

function tag_email()
{
	var thesel = get_sel(eval('fombj.'+ selField))
		
	if (!thesel) {
		   thesel ='';
	}

	DLEprompt(text_enter_email, "", dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(email_title, thesel, dle_prompt, function (r) {

			doInsert("[email="+enterURL+"]"+r+"[/email]", "", false);
		    ie_range_cache = null;
	
		});

	});
};

function doInsert(ibTag, ibClsTag, isSingle)
{
	var isClose = false;
	var obj_ta = eval('fombj.'+ selField);

	if ( (ua_vers >= 4) && is_ie && is_win)
	{
		if (obj_ta.isTextEdit)
		{
			obj_ta.focus();
			var sel = document.selection;
			var rng = ie_range_cache ? ie_range_cache : sel.createRange();
			rng.colapse;
			if((sel.type == "Text" || sel.type == "None") && rng != null)
			{
				if(ibClsTag != "" && rng.text.length > 0)
					ibTag += rng.text + ibClsTag;
				else if(isSingle)
					ibTag += rng.text + ibClsTag;
	
				rng.text = ibTag;
			}
		}
		else
		{
				obj_ta.value += ibTag + ibClsTag;
			
		}
		rng.select();
	    ie_range_cache = null;

	}
	else if ( obj_ta.selectionEnd )
	{ 
		var ss = obj_ta.selectionStart;
		var st = obj_ta.scrollTop;
		var es = obj_ta.selectionEnd;
		
		var start  = (obj_ta.value).substring(0, ss);
		var middle = (obj_ta.value).substring(ss, es);
		var end    = (obj_ta.value).substring(es, obj_ta.textLength);

		if(!isSingle) middle = "";
		
		if (obj_ta.selectionEnd - obj_ta.selectionStart > 0)
		{
			middle = ibTag + middle + ibClsTag;
		}
		else
		{
			middle = ibTag + middle + ibClsTag;
		}
		
		obj_ta.value = start + middle + end;
		
		var cpos = ss + (middle.length);
		
		obj_ta.selectionStart = cpos;
		obj_ta.selectionEnd   = cpos;
		obj_ta.scrollTop      = st;


	}
	else
	{
		obj_ta.value += ibTag + ibClsTag;
	}

	obj_ta.focus();
	return isClose;
};

function ins_color(buttonElement)
{

	document.getElementById(selField).focus();

	if ( is_ie )
	{
			document.getElementById(selField).focus();
			ie_range_cache = document.selection.createRange();
	}

	$("#cp").remove();

	$("body").append("<div id='cp' title='" + bb_t_col + "' style='display:none'><br /><iframe width=\"154\" height=\"104\" src=\"" + dle_root + "templates/" + dle_skin + "/bbcodes/color.html\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\"></iframe></div>");

	$('#cp').dialog({
		autoOpen: true,
		width: 180
	});
};
function setColor(color)
{

		doInsert("[color=" +color+ "]", "[/color]", true );
		$('#cp').dialog("close");
};

function ins_emo( buttonElement )
{
		document.getElementById(selField).focus();

		if ( is_ie )
		{
			document.getElementById(selField).focus();
			ie_range_cache = document.selection.createRange();
		}

		$("#dle_emo").remove();

		$("body").append("<div id='dle_emo' title='" + bb_t_emo + "' style='display:none'>"+ document.getElementById('dle_emos').innerHTML +"</div>");

		var w = '300';
		var h = 'auto';

		if ( $('#dle_emos').width() >= 450 )  {$('#dle_emos').width(450); w = '505';}
		if ( $('#dle_emos').height() >= 300 ) { $('#dle_emos').height(300); h = '340';}

		$('#dle_emo').dialog({
				autoOpen: true,
				width: w,
				height: h
			});


};

function dle_smiley ( text ){
	doInsert(' ' + text + ' ', '', false);

	$('#dle_emo').dialog("close");
	ie_range_cache = null;
};

function pagelink()
{

	var thesel = get_sel(eval('fombj.'+ selField))

    if (!thesel) {
        thesel = text_pages;
    }

	DLEprompt(text_enter_page, "1", dle_prompt, function (r) {

		var enterURL = r;

		DLEprompt(text_enter_page_name, thesel, dle_prompt, function (r) {

			doInsert("[page="+enterURL+"]"+r+"[/page]", "", false);
			ie_range_cache = null;
	
		});

	});
};

function translit()
{
	var obj_ta = eval('fombj.'+ selField);

	if ( (ua_vers >= 4) && is_ie && is_win) {

		if (obj_ta.isTextEdit) {

			obj_ta.focus();
			var sel = document.selection;
			var rng = sel.createRange();
			rng.colapse;

			if((sel.type == "Text" || sel.type == "None") && rng != null) {
				rng.text = dotranslate(rng.text);
			}
		} else {

			obj_ta.value = dotranslate(obj_ta.value);
		}

	} else {
		obj_ta.value = dotranslate(obj_ta.value);
	}

	obj_ta.focus();

	return;
};

function dotranslate(text)
{
    var txtnew = "";
    var symb = 0;
    var subsymb = "";
    var trans = 1;
    for (kk=0;kk<text.length;kk++)
    {
        subsymb = text.substr(kk,1);
        if ((subsymb=="[") || (subsymb=="<"))
        {
            trans = 0;
        }
        if ((subsymb=="]") || (subsymb==">"))
        {
            trans = 1;
        }
        if (trans)
        {
            symb = transsymbtocyr(txtnew.substr(txtnew.length-1,1), subsymb);
        }
        else
        {
            symb = txtnew.substr(txtnew.length-1,1) + subsymb;
        }
        txtnew = txtnew.substr(0,txtnew.length-1) + symb;
    }
    return txtnew;
};

function transsymbtocyr(pretxt,txt)
{
	var doubletxt = pretxt+txt;
	var code = txt.charCodeAt(0);
	if (!(((code>=65) && (code<=123))||(code==35)||(code==39))) return doubletxt;
	var ii;
	for (ii=0; ii<lat_lr2.length; ii++)
	{
		if (lat_lr2[ii]==doubletxt) return rus_lr2[ii];
	}
	for (ii=0; ii<lat_lr1.length; ii++)
	{
		if (lat_lr1[ii]==txt) return pretxt+rus_lr1[ii];
	}
	return doubletxt;
};

function insert_font(value, tag)
{
    if (value == 0)
    {
    	return;
	} 

	doInsert("[" +tag+ "=" +value+ "]", "[/" +tag+ "]", true );
    fombj.bbfont.selectedIndex  = 0;
    fombj.bbsize.selectedIndex  = 0;
};

function get_sel(obj)
{

 if (document.selection) 
 {

   if ( is_ie )
   {
		document.getElementById(selField).focus();
		ie_range_cache = document.selection.createRange();
   }

   var s = document.selection.createRange(); 
   if (s.text)
   {
	 return s.text;
   }
 }
 else if (typeof(obj.selectionStart)=="number")
 {
   if (obj.selectionStart!=obj.selectionEnd)
   {
     var start = obj.selectionStart;
     var end = obj.selectionEnd;
	 return (obj.value.substr(start,end-start));
   }
 }

 return false;

};