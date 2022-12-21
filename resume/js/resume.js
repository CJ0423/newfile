const appear =document.querySelector(".nav-left")

document.addEventListener('scroll',function(){
    let currentPos =  window.scrollY;
    //   往下滑
    if(currentPos > lastPos){
        appear.style.top = "-60px"; //讓nav bar消失
    }else{
        appear.style.top = "0px"; //讓nav bar出現
    }
    lastPos = currentPos;//再記住現在位置，跟未來的位置做比較
  });