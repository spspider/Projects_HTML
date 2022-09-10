msg = {
    "payload": "1000",
    "topic": "мощность"
};
var nowtime = (new Date().getHours() * 60 + (new Date().getMinutes()));
if (nowtime === 2 * 60) {

}
var content = msg.topic + " кВт:" + msg.payload;
var ObjectPayload = {
    "chatId": "843873284",
    "type": "message",
    "content": content
};
msg.payload = ObjectPayload;

console.log(msg.payload);
//return msg;
