let arreglonumero=[];
let resultado="";
arreglonumero=[1,2,3,4,5,6,7,8,9,10];

for (let iteracion = 0; iteracion < arreglonumero.length; iteracion++) {
    resultado+='<li class="list-group-item">'+arreglonumero[iteracion]+'</li>';
}

document.getElementById('lista_numero').innerHTML=resultado; 

arreglonumero=[];
resultado='';
for (let iteracion = 0; iteracion < 10; iteracion++) {
    numero=iteracion+1;
    arreglonumero.push(numero);
}

for (let iteracion = 0; iteracion < arreglonumero.length; iteracion++) {
    resultado+='<li class="list-group-item">'+arreglonumero[iteracion]+'</li>';
}

document.getElementById('lista_numero_2').innerHTML=resultado;