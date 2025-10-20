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
Descritivo: : Crie um array de números e use a função count() para mostrar quantos elementos ele possui
*/


$numeros = [10, 20, 30, 40, 50]; // array homogêneo (apenas números)

// Exibe todos os elementos do array
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

// Mostra a quantidade de elementos do array
echo "O array possui " . count($numeros) . " elementos.";
?>
