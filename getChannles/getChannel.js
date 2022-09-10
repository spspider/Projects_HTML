/**
 * Created by sergey on 02.11.2017.
 */
document.addEventListener("DOMContentLoaded", ready2);

function ready2() {

    getPageContents(function(result) {
        //personinfo=JSON.parse(result);
        setHTML("output",result);
        //Now I can do anything here with the personinfo array
    },'http://ok-tv.org/channels/1-ntv.html','fname=stretch&lname=wright');

}
function ready() {
    //var xhr = new XMLHttpRequest();
    var xhr = createXmlHttpObject();
    xhr.open('GET', "https://stackoverflow.com", true);
    xhr.send(null);
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
               setHTML("output","ANSWER"+xhr.responseText);
            } else {
                setHTML("output","ERROR:"+xhr.responseText);
            }
        }

    }
}
function request() {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
        if (req.readyState === 4) {
            var response = req.responseText;
            setHTML("output","response:"+req.responseText);
            //var json = JSON.parse(response);

            //console.log(json)
        }
    };

    req.open('GET', 'http://google.com');
    req.send(null);

}

function setHTML(ID, value) {
    if (document.getElementById(ID)) {
        document.getElementById(ID).innerHTML = value; //range
    } else {
        if (document.getElementById("test")) {
            // document.getElementById("test").innerHTML += "<br>wrong_setHTML:'" + ID + "' value:" + value; //range
        }
    }
}

function createXmlHttpObject() {
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else {
        xhr = new ActiveXObject('Microsoft.XMLHTTP');
    }
    return xhr;
}

function getPageContents(callback,url,params) {
    http=new XMLHttpRequest();
    if(params!=null) {
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    } else {
        http.open("GET", url, true);
    }
    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            callback(http.responseText);
        }
    }
    http.send(params);
}