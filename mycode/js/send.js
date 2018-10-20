//发送评论的内容
function send() {
    var remark = document.querySelectorAll(".right_tags img");
    var fa_remark=document.querySelector(".fa_remark");
    var send=document.querySelector(".fa_remark img");
    var input = document.querySelector(".fa_remark input");
    var warn = document.querySelector(".warn");
    var val="";
    remark[1].onclick=function () {
        fa_remark.style.display="block";
    };

    input.onkeyup=function () {
        val=input.value;
    };
    send.onclick=function () {
        if(!val){
            warn.style.display="block";
        }else {
            warn.style.display="none";
            fa_remark.style.display="none";
        }

    }
}