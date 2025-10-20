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
Descritivo: :   Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
*/


$frutas = ["Banana", "Maçã", "Laranja", "Uva", "Melancia"];

// Verifica se "Maçã" está no array
if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array.";
} else {
    echo "A fruta Maçã não foi encontrada no array.";
}
?>
