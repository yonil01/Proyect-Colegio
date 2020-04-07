/*variable*/


let desplazar = document.getElementById('desplazar');



function menus(){
    let desplazamiento=window.pageYOffset;
    if(desplazamiento>=202){
        desplazar.style.height='0';
        desplazar.style.overflow='hidden';
        desplazar.style.transition='0.5ss';
    }else{
        desplazar.style.height='100px';
        desplazar.style.transition='0.5s';
    }
}



window.addEventListener('scroll',function(){
    this.console.log(this.window.pageYOffset);
    menus();
})
        
window.addEventListener('click',function(){
    
})

var inicio = document.getElementById('inicio');
let cursos=document.getElementById('cursos');
let horario=document.getElementById('horario');
let silabos=document.getElementById('silabos');
let parciales=document.getElementById('parciales');
let girar=document.getElementById('centrado1');



function funPrincipal(valor){
    girar.style.display='block';
        inicio.style.display='none';
        cursos.style.display='none';
        horario.style.display='none';

        setTimeout(function() {
            
        girar.style.display='none';
        if(valor=='btn-inicio'){         
            inicio.style.display='block';
            poner_vacio('inicio');
            caja.pop();
            caja.push(1);
        }
        if(valor=='btn-cursos'){
            cursos.style.display='block';
            poner_vacio('cursos');

            caja.push(2);
            
        }
        if(valor=='btn-horario'){
            horario.style.display='block';
            poner_vacio('horario');   
            
        }
        if(valor=='btn-silabos'){
            silabos.style.display='block';
            poner_vacio('silabos');   
        }
        if(valor=='btn-parciales'){
            parciales.style.display='block';
            poner_vacio('parciales');   
        } 
    }, 2000);
        
    }

 function poner_vacio(_valor){

        let contenido=[inicio,cursos,horario,silabos,parciales];
        for(var i=0;i<4;i++){
            if(_valor!=contenido[i].id){
                contenido[i].style.display='none';
            }
        }

        
 }
 window.addEventListener('load',function(){
    $('#onload').fadeOut();
    $('body').removeClass('entrada');
    menus();
});

