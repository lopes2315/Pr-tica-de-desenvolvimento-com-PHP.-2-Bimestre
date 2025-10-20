<?php
/******************************************************************************
Descritivo: Crie um procedimento mostrarTabuada que receba um número e imprima sua tabuada de 1 a 10.
*******************************************************************************/
function mostrarTabuada($num){
    for($i = 1; $i <= 10; $i++){
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
mostrarTabuada(7);
?>