<?php
/******************************************************************************
Descritivo: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
*******************************************************************************/
$numeros = [10, 2, 5, 8, 1];
sort($numeros);
foreach($numeros as $n){
    echo $n . " ";
}
?>