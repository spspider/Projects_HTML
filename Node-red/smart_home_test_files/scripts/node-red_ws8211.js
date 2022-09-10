document.addEventListener("DOMContentLoaded", load_wheather);

function load() {

    function getRandomArbitrary(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    var wheather = "{\"coord\":{\"lon\":34.9833,\"lat\":48.45},\"weather\":[{\"id\":500,\"main\":\"Rain\",\"description\":\"light rain\",\"icon\":\"10d\"},{\"id\":701,\"main\":\"Mist\",\"description\":\"mist\",\"icon\":\"50d\"}],\"base\":\"stations\",\"main\":{\"temp\":279.48,\"feels_like\":275.13,\"temp_min\":279.15,\"temp_max\":279.82,\"pressure\":1002,\"humidity\":100},\"visibility\":3500,\"wind\":{\"speed\":5,\"deg\":190},\"rain\":{\"1h\":0.11},\"clouds\":{\"all\":75},\"dt\":1612449242,\"sys\":{\"type\":1,\"id\":8901,\"country\":\"UA\",\"sunrise\":1612415098,\"sunset\":1612449779},\"timezone\":7200,\"id\":709930,\"name\":\"Dnipro\",\"cod\":200}";

    var JsonString = {};
    JsonString.from = [0];
    //JsonString.g1 = g1;
    JsonString.to = [88];
    JsonString.type = [getRandomArbitrary(1, 13)];
    JsonString.dir = [0];
    JsonString.col = [0];
    JsonString.wh = [1];
    JsonString.br_ = [255];
    JsonString.num = 1;
    JsonString.sp = 11;
    JsonString.dr = 255;
    JsonString.fd = 45;
    JsonString.fdt = 3;
    JsonString.br = 255;


    var Stringify = JSON.stringify(JsonString);
    var length_str = Stringify.length / 200;
    console.log(length_str);
    ///function?json={'ws2811_setup':1}", function (callback) {
    var link = "//192.168.1.112/ws2811AJAX?json=" + JSON.stringify(JsonString);
    //msg.url=link;
    //return msg;
    console.log(link);
    var button = "<a class='btn btn-block btn-default' href='" + link + "'>Encoder</a>";
    setHTML("output", getHTML("output") + button);
}

function load_wheather() {
    // var wheather=msg.payload;
    //  var wheather=msg.payload;

    var wheather = "{\"coord\":{\"lon\":34.9833,\"lat\":48.45},\"weather\":[{\"id\":500,\"main\":\"Rain\",\"description\":\"light rain\",\"icon\":\"10d\"},{\"id\":701,\"main\":\"Mist\",\"description\":\"mist\",\"icon\":\"50d\"}],\"base\":\"stations\",\"main\":{\"temp\":279.48,\"feels_like\":275.13,\"temp_min\":279.15,\"temp_max\":279.82,\"pressure\":1002,\"humidity\":100},\"visibility\":3500,\"wind\":{\"speed\":5,\"deg\":190},\"rain\":{\"1h\":0.11},\"clouds\":{\"all\":75},\"dt\":1612449242,\"sys\":{\"type\":1,\"id\":8901,\"country\":\"UA\",\"sunrise\":1612415098,\"sunset\":1612449779},\"timezone\":7200,\"id\":709930,\"name\":\"Dnipro\",\"cod\":200}";
    // var wheather2="{\"coord\":{\"lon\":34.9833,\"lat\":48.45},\"weather\":[{\"id\":803,\"main\":\"Clouds\",\"description\":\"broken clouds\",\"icon\":\"04n\"}],\"base\":\"stations\",\"main\":{\"temp\":267.1,\"feels_like\":257.04,\"temp_min\":267.04,\"temp_max\":267.15,\"pressure\":1018,\"humidity\":73},\"visibility\":10000,\"wind\":{\"speed\":10,\"deg\":320},\"clouds\":{\"all\":75},\"dt\":1612555439,\"sys\":{\"type\":1,\"id\":8901,\"country\":\"UA\",\"sunrise\":1612501412,\"sunset\":1612536277},\"timezone\":7200,\"id\":709930,\"name\":\"Dnipro\",\"cod\":200}";
    // var wheather3="{\"coord\":{\"lon\":34.9833,\"lat\":48.45},\"weather\":[{\"id\":800,\"main\":\"Clear\",\"description\":\"clear sky\",\"icon\":\"01d\"}],\"base\":\"stations\",\"main\":{\"temp\":269.43,\"feels_like\":263.53,\"temp_min\":268.71,\"temp_max\":270.15,\"pressure\":1016,\"humidity\":59},\"visibility\":10000,\"wind\":{\"speed\":4,\"deg\":290},\"clouds\":{\"all\":0},\"dt\":1612612299,\"sys\":{\"type\":1,\"id\":8901,\"country\":\"UA\",\"sunrise\":1612587724,\"sunset\":1612622776},\"timezone\":7200,\"id\":709930,\"name\":\"Dnipro\",\"cod\":200}";
    var wheather_parse = JSON.parse(wheather);
    var feels_like = Math.round(wheather_parse.main.feels_like - 273, 15);
    var temp = Math.round(wheather_parse.main.temp - 273, 15);
    var signigicant_wheather = 0;
    if (wheather_parse.weather[0].main === ('Rain')) {
        signigicant_wheather = 4;
    } else if (wheather_parse.weather[0].main === ('Clouds')) {
        signigicant_wheather = 1;
    } else if (wheather_parse.weather[0].main === ('Snow')) {
        signigicant_wheather = 5;
    } else if (wheather_parse.weather[0].main === ('Clear')) {
        signigicant_wheather = 0;//Clear
    }

    console.log(wheather_parse);
    var main = (wheather_parse.weather)[0].description;
    var wind = (wheather_parse.wind.speed);
    var wind_dir = (wheather_parse.wind.deg);
    var sunrise=(new Date(wheather_parse.sys.sunrise*1000).getHours()*60+(new Date(wheather_parse.sys.sunrise*1000).getMinutes()));
    var sunset=(new Date(wheather_parse.sys.sunset*1000).getHours()*60+(new Date(wheather_parse.sys.sunset*1000).getMinutes()));
    var nowtime=(new Date().getHours()*60+(new Date().getMinutes()));
    var isSunrise = ((sunrise)<(nowtime)&&((sunset)>(nowtime)))?255:100;

    function getMinMax(value, minOutput, maxOutput, maxInput) {
        var middle = 0;
        middle = Math.round((value - minOutput) * maxInput / (maxOutput - minOutput));
        return middle;
    }

    var ws8211 = "{\"from\":[0],\"to\":[88],\"type\":[1],\"dir\":[0],\"col\":[0],\"wh\":[128],\"br_\":[230],\"num\":1,\"sp\":254,\"dr\":255,\"fd\":4,\"fdt\":3,\"br\":255}";
    var JsonString = {};
    JsonString.from = [0];
    //JsonString.g1 = g1;
    JsonString.to = [41];
    JsonString.type = [signigicant_wheather];
    JsonString.dir = [wind_dir < 180 ? 0 : 1];
    JsonString.col = [getMinMax(temp, -20, 40, 255)];
    JsonString.wh = [255];
    JsonString.br_ = [isSunrise];
    JsonString.num = 1;
    JsonString.sp = getMinMax(wind, 0, 15, 255);
    JsonString.dr = 255;
    JsonString.fd = ((signigicant_wheather == 1) || (signigicant_wheather == 0)) ? 1 : 100;
    JsonString.fdt = 3;
    JsonString.br = 255;

    var url = "http://192.168.1.111/ws2811AJAX?json=";
    var AjaxFormat = url + JSON.stringify(JsonString);
    console.log(AjaxFormat);
    msg.url = AjaxFormat;
    return msg;
    console.log(AjaxFormat);
    msg.url = AjaxFormat;
}