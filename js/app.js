//跳转到微信公众号
function Follow() {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        window.location = "https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzA3NjUwMzM2Nw==&scene=126#wechat_redirect";
    } else {
        window.location = "http://"+document.domain+"/wx.html";
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