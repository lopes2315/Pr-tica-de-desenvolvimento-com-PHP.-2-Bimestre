<?php
/******************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: Array de produtos - cada produto é um array associativo com 'nome' e 'preço'
*******************************************************************************/
$produtos = [
    ["nome" => "Caneta" , "preco" => 2.50],
    ["nome" => "Caderno", "preco" => 12.90],
    ["nome" => "Mochila", "preco" => 89.99],
];
foreach ($produtos as $produto) {
    echo "produto:". $produto['nome']. "-Preço:R$".
        number_format($produto['preco'],2,',','.'). "\n";
}
?>
