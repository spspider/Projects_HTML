document.addEventListener("DOMContentLoaded", load);

function load() {
    var speed_enc = 255;
    var rotations = -5000;
    var EncoderIA = 12;//номер пина
    var EncoderIB = 14;
    var engineA = 6;//номер по порядку
    var engineB = 7;

    var JsonString = {};
    JsonString.speed_enc = speed_enc;
    //JsonString.g1 = g1;
    JsonString.rotations = rotations;
    JsonString.EncoderIA = EncoderIA;
    JsonString.EncoderIB = EncoderIB;
    JsonString.engineA = engineA;
    JsonString.engineB = engineB;

    var Stringify = JSON.stringify(JsonString);
    var length_str = Stringify.length / 200;
    console.log(length_str);
    ///function?json={'ws2811_setup':1}", function (callback) {
    var link = "//192.168.1.107/function?json=" + JSON.stringify(JsonString);
    //msg.url=link;
    //return msg;
    console.log(link);
    var button = "<a class='btn btn-block btn-default' href='" + link + "'>Encoder</a>";
    setHTML("output", getHTML("output") + button);
}