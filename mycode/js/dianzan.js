//分享点赞
function dianZan() {
    var right_tags = document.querySelectorAll(".right_tags img");
    var comment_stats = document.querySelectorAll(".comment_stats img");
    right_tags[0].onclick=function () {
        if(right_tags[0].getAttribute("src")=="./images/dot_red.png"){
            right_tags[0].setAttribute("src","./images/dot.png");
            return;
        }
        right_tags[0].src = "./images/dot_red.png";
    };
    right_tags[2].onclick=function () {
        if(right_tags[2].getAttribute("src")=="./images/collect.png"){
            right_tags[2].setAttribute("src","./images/collected.png");
            return;
        }
        right_tags[2].src = "./images/collect.png";
    };


    //评论点赞
    for(let i=0;i<comment_stats.length;i++) {
        comment_stats[i].addEventListener( "click", (function () {
            if (comment_stats[i].getAttribute("src") == "./images/comm_dot.png") {
                comment_stats[i].setAttribute("src", "./images/comm_dot_prev.png");
                return;
            }
            comment_stats[i].setAttribute("src", "./images/comm_dot.png");
        }));
    }
}
