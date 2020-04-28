
window.onload = function(){
        document.querySelector('.sign-btn').addEventListener("click",function(){
            document.querySelector('.sign-box').style.display = "flex";
            event.stopPropagation();
        })
        document.querySelector('.sign-box').addEventListener("click",function(){
            document.querySelector('.sign-box').style.display = "flex";
            event.stopPropagation();
        })
        document.querySelector('body').addEventListener("click",function(){
            document.querySelector('.sign-box').style.display = "none";
        })
    }

