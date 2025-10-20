<?php
/******************************************************************************
Descritivo: Usando o array associativo do exercício 21, imprima cada dado no formato "chave: valor".
*******************************************************************************/
$aluno = ["nome" => "Felipe", "idade" => 20, "curso" => "Engenharia de Software"];
foreach($aluno as $chave => $valor){
    echo "$chave: $valor<br>";
}
?>