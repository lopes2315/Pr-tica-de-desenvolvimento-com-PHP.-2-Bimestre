<?php 
  /*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25357453-2 - Leonardo de Jesus Sabino Flugel
 25362698-2 - Luis Guilheme R. S. Schuliz
 25363242-2 - Euclides Benedito Modesto Coelho N.
 25357716-2 - Felipe Eidy Toyama
 25362174-2 - Guilheme Lopes Pereira Vidal
Data: 21 de outubro de 2025
Descritivo: :  Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados..
*/


function exibirCarro($carro) {
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"] . "<br>";
}

// Exemplo de uso
$meuCarro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
];

// Chamada do procedimento
exibirCarro($meuCarro);
?>
