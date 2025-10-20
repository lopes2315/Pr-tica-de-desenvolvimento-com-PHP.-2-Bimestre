<?php
/******************************************************************************
Descritivo: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
*******************************************************************************/
$produtos = [
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Teclado", "preco" => 100],
    ["nome" => "Monitor", "preco" => 800]
];
foreach($produtos as $produto){
    echo "Nome: " . $produto["nome"] . " - Preço: R$" . $produto["preco"] . "<br>";
}
?>