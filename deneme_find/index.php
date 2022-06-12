<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<button id="deneme">deneme button</button>
<div id="deneme"></div>
<table id="myTable">
  <thead>
    <td><input id="namem"  type="text"></td>
    <td> <input id="sunamem" type="text"></td>
  </thead>
  <tbody id="myBody">
    <tr><td >seyma</td><td>kartal</td></tr>
    <tr><td>arge</td><td>deneme</td></tr>
  </tbody>
<table>
<script>
//search in namem
const deneme=document.getElementById("namem")
deneme.addEventListener("keydown", yaz);
function yaz(){
    let td,td_text,filter;
    //console.log(deneme.value);
    filter=deneme.value;
    const table = document.getElementById("myBody");
    const tr=table.getElementsByTagName("tr");
    for (let i=0;i<tr.length;i++){
        td= tr[i].getElementsByTagName('td')[0];
        if(td){
            td_text= td.innerText;
            console.log(td_text);
            if(td_text.indexOf(filter)>-1){
                console.log(td_text.indexOf(filter));
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }

    }
    //console.log(tr);
}




//search in surnamem
const deneme=document.getElementById("sunamem")
deneme.addEventListener("keydown", yaz);
function yaz(){
    let td,td_text,filter;
    //console.log(deneme.value);
    filter=deneme.value;
    const table = document.getElementById("myBody");
    const tr=table.getElementsByTagName("tr");
    for (let i=0;i<tr.length;i++){
        td= tr[i].getElementsByTagName('td')[1];
        if(td){
            td_text= td.innerText;
            console.log(td_text);
            if(td_text.indexOf(filter)>-1){
                console.log(td_text.indexOf(filter));
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }

    }
    //console.log(tr);
}





    </script>
</body>
</html>