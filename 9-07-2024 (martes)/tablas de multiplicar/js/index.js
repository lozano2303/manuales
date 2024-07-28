
document.addEventListener('DOMContentLoaded' ,function() {
    let tabla=[];
    let multiplo=[];
    let resultado;
    let numeroTabla;
    let numeroMultiplo;
    let iteracionTabla;
    let iteracionMultiplo;
    let printResultado='';

    for(iteracionTabla=0; iteracionTabla<10;iteracionTabla++) {
        numeroTabla = iteracionTabla + 1;
        multiplo=[];
        for(iteracionMultiplo=0; iteracionMultiplo<10; iteracionMultiplo++){
            numeroMultiplo = iteracionMultiplo + 1;
            resultado = numeroTabla * numeroMultiplo;
            multiplo.push(resultado);
        }
        tabla.push(multiplo);
    }

    for(iteracionTabla=0; iteracionTabla<10;iteracionTabla++) {
        numeroTabla = iteracionTabla + 1;
        
        printResultado+='<div class="card" style="width: 18rem;">';
        printResultado+='<div class="card-body">';
        printResultado+='<h5 class="card-title">Tabla del '+ numeroTabla + '</h5>';
        printResultado+='<table class= "table">';

        for(iteracionMultiplo=0; iteracionMultiplo<10; iteracionMultiplo++){
            numeroMultiplo = iteracionMultiplo + 1;
            printResultado+='<p class="card-text">'+ numeroTabla +' x '+ numeroMultiplo +' =  '+ tabla[iteracionTabla][iteracionMultiplo] + '</p>';
        }
        printResultado+='</table>';
        printResultado+='</div>';
        printResultado+='</div>';
    }
    
    document.getElementById('resultado-tablas').innerHTML = printResultado;
})