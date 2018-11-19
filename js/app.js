function Follow(){
    window.location = "https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzA3NjUwMzM2Nw==&scene=126#wechat_redirect";
}
// function isName(obj) {
//     reg=/^([\\u4e00-\\u9fa5]{1,20}|[a-zA-Z\\.\\s]{1,20})$/;
//     if (reg.test(obj)) {
//         console.log("Name匹配失败");
//     }
// }
// function isStdId(obj){
//     reg=/^[A-Z]\d{7}$/;
//     if (reg.test(obj)) {
//         console.log("ID匹配失败");
//     }
// }v

function random(min,max) 
{
    return Math.floor(min + Math.random() * (max - min));
}

function changeluck(name,stdid) {
    $("#stdid").text(stdid);
    $("#username").text(name);
}