let a=document.querySelector("input[name='namem']");
function console_yaz(){
    console.log(a.nodeValue);
}
a.addEventListener("keydown",console_yaz  );