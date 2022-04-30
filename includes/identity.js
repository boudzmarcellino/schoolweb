"use strict";
let sasieLogin = document.getElementsById(saisieLogin);
let saisiePasswd = Document.getElementById("saisiePasswd");

//chargemennt de l'objet ajax
let xhr = new XMLHttpRequest();
function text()
{   
    xhr.open("get",text ,true);
    saisieLogin.setValue("mon nom");
    document.alert("ok");
}
saisieLogin.addEventListener("click", text, false);

