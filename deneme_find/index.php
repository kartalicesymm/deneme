<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

<div id="deneme"></div>
<div  style="padding-top:15% ; padding-left:40% ">
<table>
  <thead>
    <td><input id="name"  type="text" placeholder="name..."></td>
    <td> <input id="surname" type="text" placeholder="surname..."></td>
  </thead>
  <tbody id="myBody">
    <tr><td >seyma</td><td>kartal</td></tr>
    <tr><td>arge</td><td>deneme</td></tr>
  </tbody>
<table>
</div>

<script>
//search in namem
const name=document.getElementById("name")
name.addEventListener("keydown",write_name);
function write_name(){
    let td,td_text,filter;
    //console.log(name.value);
    filter=name.value;
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
const surname=document.getElementById("surname")
surname.addEventListener("keydown", write_surname);
function write_surname(){
    let td,td_text,filter;
    //console.log(surname.value);
    filter=surname.value;
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