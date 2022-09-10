//var HelperLoaded=true;
function createXmlHttpObject() {
    var xmlHttp;
    if (window.XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    } else {
        xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    return xmlHttp;
}


var Activation = -1;

function saveData(filename, data, returnCallback) {
    var xmlHttp = createXmlHttpObject();
    data = testJson(data) ? JSON.parse(data) : data;
    var file = new Blob([JSON.stringify(data)], {type: "text/plain;charset=utf-8"});
    var a = new FormData();
    a.append("data", file, filename);
    xmlHttp.open("POST", "/edit");
    xmlHttp.send(a);
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            if (xmlHttp.status != 200) {
                returnCallback("ERROR[" + xmlHttp.status + "]: " + xmlHttp.responseText);
            } else {
                //returnCallback(xmlHttp.responseText);
            }
        }
    };
    xmlHttp.onloadend = function () {
        if (xmlHttp.status === 404) {
            returnCallback("404");
        }
        if (xmlHttp.status === 200) {
            returnCallback(JSON.stringify(data));
        }
    };
    //returnCallback(null);
}

function readTextFile(file, callback) {
    //var rawFile = new XMLHttpRequest();
    var xmlHttp = createXmlHttpObject();
    xmlHttp.overrideMimeType("application/json");
    xmlHttp.open("GET", file, true);
    xmlHttp.timeout = 10000;
    /*
     xmlHttp.ontimeout = function () {
     callback("no file");
     }
     */
    xmlHttp.onreadystatechange = function () {

        if (xmlHttp.readyState === 4) {
            if (xmlHttp.status === 200) {

                callback(xmlHttp.responseText);


            } else {
                //callback(null);
            }
        } else {
            //callback(null);
        }

    };
    xmlHttp.onloadend = function () {
        if (xmlHttp.status === 404) {
            callback(404);
        }
    };


    xmlHttp.send(null);
}

function set_cookie(name, value, exp_y, exp_m, exp_d, path, domain, secure) {
    var cookie_string = name + "=" + escape(value);

    if (exp_y) {
        var expires = new Date(exp_y, exp_m, exp_d);
        cookie_string += "; expires=" + expires.toGMTString();
    }
    if (path)
        cookie_string += "; path=" + escape(path);
    if (domain)
        cookie_string += "; domain=" + escape(domain);
    if (secure)
        cookie_string += "; secure";
    document.cookie = cookie_string;
}

function get_cookie(cookie_name) {
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
    if (results)
        return (unescape(results[2]));
    else
        return null;
}

function setVal(ID, value) {
    var object;
    if (document.getElementById(ID)) {
        object = document.getElementById(ID);
        if (object.type == "checkbox") {
            document.getElementById(ID).checked = value;
            return true;
        } else {
            document.getElementById(ID).value = value;
            //document.getElementById(ID).innerHTML = value;
            return true;
        }
    } else {
        if (document.getElementById("test")) {
            //document.getElementById("test").innerHTML += "<br>wrong_setVal:'" + ID + "' value:" + value; //range
        }
        //return false;
    }
    return false;
}

function setHTML(ID, value) {
    if (document.getElementById(ID)) {
        document.getElementById(ID).innerHTML = value; //range
    }
}

function loadjQuery(url, success) {
    var script = document.createElement('script');
    script.src = url;
    var head = document.getElementsByTagName('head')[0],
        done = false;
    head.appendChild(script);
    // Attach handlers for all browsers
    script.onload = script.onreadystatechange = function () {
        if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
            done = true;
            success();
            script.onload = script.onreadystatechange = null;
            head.removeChild(script);
        }
    };
}

function loadBootstrap() {
    var element = document.body,
        style = window.getComputedStyle(element),
        top = style.getPropertyValue('color');
    if (top != 'rgb(51, 51, 51)') {
        var el = document.head,
            elChild = document.createElement('link');
        elChild.innerHTML = '<link sync rel="stylesheet" href="bootstrap.min.css">';
        el.insertBefore(elChild, el.firstChild);
    }
}

function getVal(ID) {
    var value = -1;
    var object;
    if (document.getElementById(ID)) {
        object = document.getElementById(ID);
        if (object.type == "checkbox") {
            value = document.getElementById(ID).checked;
            //alert(value);
        } else {
            value = document.getElementById(ID).value; //range
        }
    } else {
        if (document.getElementById("test")) {
            //  document.getElementById("test").innerHTML += "<br>wrong:'" + ID + "'"; //range
        }
    }
    return value;
}

function getHTML(ID) {
    var value;
    if (document.getElementById(ID)) {
        value = document.getElementById(ID).innerHTML; //range
        return value;
    } else {
        if (document.getElementById("test")) {
            //document.getElementById("test").innerHTML += "<br>wrong_getHTML:'" + ID + "'"; //range
        }
    }
    return undefined;
}

function createTD(tr, text) {
    var td = document.createElement('td');
    if (typeof (text) === "object") {
        td.appendChild(text);
    } else if (typeof (text) === "string") {
        td.appendChild(document.createTextNode(text));
    }
    tr.appendChild(td);
    return td;
}

function createTR(tr) {
    var Newtr = document.createElement('tr');
    //Newtr.id = "tr" + i;
    Newtr.appendChild(tr);
    return Newtr;
}

function alert_message(message, timeout) {
    if (!timeout) {
        timeout = 10;
    }
    var div = document.createElement('div');
    div.className = "alert alert-success";
    div.innerHTML = message;
    div.id = "ok_message";
    setTimeout(function () {
        div.remove();
    }, timeout * 1000);
    //main_.appendChild(div);
    return div;
}

function testJson(text) {
    if (typeof text !== "string") {
        return false;
    }
    try {
        JSON.parse(text);
        return true;
    } catch (e) {
        return false;
    }
}

function makeinOption(inputOption, id, onChange) {
    var options = "<select class='form-control' " +
        "" +
        "id=" + id + " onchange='" + onChange + ";'>";

    var i1;
    var inputCorrectedOPtion = [];
    var i2 = 0;

    for (i1 = 0; i1 < inputOption.length; i1++) {
        // inputCorrectedOPtion[i2] = inputOption[i1];
        // i2++;
    }

    for (i1 = 0; i1 < inputOption.length; i1++) {
        if (inputOption[i1] !== null) {
            var option_that = inputOption[i1] !== undefined ? inputOption[i1] : "---";
            options += "<option>" + option_that + "</option>";
            //options.concat(addOpt);
        }
    }
    options += "</select>";
    return options;
}

function makeinOption_child(inputOption, id, onChange) {
    var array = inputOption;
    var selectList = document.createElement("select");
    selectList.className = 'form-control';
    selectList.id = id;
    selectList.onchange = onChange;

    for (var i = 0; i < array.length; i++) {
        var option = document.createElement("option");
        option.value = array[i];
        option.text = array[i];
        selectList.appendChild(option);
    }
    return selectList;
}

function send_code_back() {
    var code = getVal('activation_input');
    readTextFile("/function?json={\"Activation\":2,\"code\":" + code + "}", function (callback) {
        if (parseInt(callback) === 1) {
            alert("activated:");
        } else {
            alert("wrong code:"+callback);
        }
    });
};


function ActivateDialog() {
    if (document.getElementById('activation_input')) return;
    readTextFile('/function?json={\"Activation\":1}', function (callback) {
        //var x = prompt("ActivationCode:\n" + callback, "");


        var page = "http://my-smart-home.zzz.com.ua/product/registration?code=" + (callback);
        var message = "follow this link:\n" +
            "<a href='" + page + "'class='form-control' >" + page + "</a>" +
            "\n then Enter code:\n" +
            "<input type='text' class='form-control' id='activation_input'>" +
            "<input type='button' class='form-control' id='btn_activation' value='OK' onclick='send_code_back()'>";

        var button = document.getElementById("activation_button");
        button.appendChild(alert_message(message, 30));

        var splitted_mac_sddress = callback.toString().split(":", 10);
        //var x = prompt("enter activation code, device ID:"+callback, "");


    });
}


function check_if_activated() {
    var license_code = "<a id ='activation_button' class='btn btn-block btn-default' onclick='ActivateDialog()' type='button'>activate</a>";
    // var btmBtns;
    //var license_code = "<a class='btn btn-block btn-default' onclick='ActivateDialog()' type='button'>activate</a>";
    readTextFile('/function?json={\"Activation\":0}', function (callback) {//проверить если активирован
        if (parseInt(callback) === 1) {//Activated
            Activation = 1;
            setHTML("activation_button", "");
            return 1;

        } else {//не активирован
            Activation = 0;
            setHTML("btmBtns", getHTML("btmBtns") + license_code);
            return 0;
        }
        //activation_loaded();
        //startLoadNext();
        // return btmBtns;
    });
}

function bottomButtons() {
    //var license_code = "<a class='btn btn-block btn-default' onclick='ActivateDialog()' type='button'>activate</a>";
    //if (check_if_activated()) {
    //   license_code = "";
    // }
    check_if_activated();
    var btmBtns =
        "<div class='btn-group btn-group-justified'>" +
        "<a class='btn btn-block btn-default' href='/'>cont</a>" +
        "<a class='btn btn-block btn-default' href='/wifi'>Wifi</a>" +
        "<a class='btn btn-block btn-default' href='/other_setup'>conn</a>" +
        "<a class='btn btn-block btn-default' href='/pin_setup'>buttons</a>" +
        //"<a class='btn btn-block btn-default' href='/IR_setup'>ИК</a>" +
        "<a class='btn btn-block btn-default' href='/condition'>condition</a>" +
        "<a class='btn btn-block btn-default' href='/ws2811.html'>ws2811</a>" +
        "<a class='btn btn-block btn-default' href='/help'>?</a>" +
        //       "<a class='btn btn-block btn-default' id = 'activation' onclick='ActivateDialog()' type='button'></a>"+
        " </div>";
    return btmBtns;
}
