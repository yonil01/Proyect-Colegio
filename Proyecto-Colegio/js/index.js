let codigo = document.getElementById('codigo');

window.addEventListener('load', aleatorio,false);
var cadena = "";
function aleatorio(){
    for(var i=0;i<6;i++){
        var num = Math.round(Math.random()*9);
        cadena+=num;
    }
    codigo.innerHTML = cadena;
    "?w1=" + cadena;
}



window.location.href = window.location.href + "?w1=" + "hola";