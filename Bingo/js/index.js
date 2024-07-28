document.addEventListener('DOMContentLoaded', function() {
    function generarNumerosBingo(id, colorColumnas, colorFormaX, colorForma3X) {
        let tableroBingo = [];
        let print = '';
        let min = 1; 
        let max = 72;
        let clasesColumna = ['b-columna', 'i-columna', 'n-columna', 'g-columna', 'o-columna'];
        let colorX = 'color-x1'; 
        let colorX1 = 'X1'; 

        for (let iteracion1 = 0; iteracion1 < 5; iteracion1++) {
            tableroBingo[iteracion1] = [];
            for (let iteracion2 = 0; iteracion2 < 5; iteracion2++) {
                let numeroAleatorio = Math.floor(Math.random() * (max - min + 1)) + min;
                tableroBingo[iteracion1][iteracion2] = numeroAleatorio;

                let colorCuadrado = ''; 
                
                if (colorColumnas) {
                    colorCuadrado = clasesColumna[iteracion2]; 
                }
                
                if (colorFormaX && (iteracion1 == iteracion2 || iteracion1 + iteracion2 == 4)) {
                    colorCuadrado += ` ${colorX}`; 
                }
                
                if (colorForma3X && (iteracion1*iteracion2==8||iteracion1+iteracion2==2||iteracion1+iteracion2===0||iteracion2+iteracion1==(iteracion2+1)*2 || iteracion2+iteracion1==4)) {
                    colorCuadrado += ` ${colorX1}`;  
                }
                
                print += `<div class="cuadrado-numero ${colorCuadrado}"><h2>${numeroAleatorio}</h2></div>`; 
            }
        }

        document.getElementById(id).innerHTML = print;
    }

    generarNumerosBingo('numeros1');
    generarNumerosBingo('numeros2', true); 
    generarNumerosBingo('numeros3', false, true);
    generarNumerosBingo('numeros4', false, false, true);
});
