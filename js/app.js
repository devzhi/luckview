//跳转到微信公众号
function Follow() {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        window.location = "https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzA3NjUwMzM2Nw==&scene=126#wechat_redirect";
    }
}

//生成随机数
function random(min, max) {
    return Math.floor(min + Math.random() * (max - min));
}

//更改页面显示的获奖人
function changeluck(name, stdid) {
    $("#stdid").text(stdid);
    $("#username").text(name);
}

//生成获奖人
function luck(jsonData, len) {
    var a = window.random(0, len);
    var name = jsonData[a].username;
    var stdid = jsonData[a].class;
    window.changeluck(name, stdid);
}

// function isName(obj) {
//     reg=/^([\\u4e00-\\u9fa5]{1,20}|[a-zA-Z\\.\\s]{1,20})$/;
//     if (reg.test(obj)) {
//         console.log("Name匹配失败");
//     }
// }
//  ^[A-Z][1][5-8][0][0-9]+{8}
// function isStdId(obj){
//     reg=/^[A-Z]\d{7}$/;
//     if (reg.test(obj)) {
//         console.log("ID匹配失败");
//     }
// }v
