<?php
/******************************************************************************
Descritivo: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*******************************************************************************/
function imprimirArray($array){
    foreach($array as $item){
        echo $item . "<br>";
    }
}
$nomes = ["Ana", "Bruno", "Carlos"];
imprimirArray($nomes);
?>