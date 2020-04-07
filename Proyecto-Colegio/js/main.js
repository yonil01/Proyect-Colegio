/*variable*/


/*let desplazar = document.getElementById('desplazar');



function principal(){
    let desplazamiento=window.pageYOffset;
    if(desplazamiento>=33){
        desplazar.style.height='0';
        desplazar.style.overflow='hidden';
        desplazar.style.transition='1.5s';
    }else{
        desplazar.style.height='100px';
        desplazar.style.transition='1.5s';
    }
}


window.addEventListener('scroll',function(){
    this.console.log(this.window.pageYOffset);
    principal();
})

*/
let codigo=document.getElementById("codigoins");
window.addEventListener('load',principal,false);





function principal(){
    
    var cad = "";
    for(var i=0;i<6;i++){
        var num= Math.round(Math.random()*9);
        cad=cad+num;
    }
    codigo.innerHTML="osss";
    
}
