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
Descritivo: :  Crie um array com as notas de um aluno em 4 disciplinas e calcule a média
*/


$notas = [8.5, 7.0, 9.0, 6.5]; // array com as notas

// Calcula a soma das notas
$soma = 0;
foreach ($notas as $nota) {
    $soma += $nota;
}

// Calcula a média
$media = $soma / count($notas);

// Exibe o resultado
echo "As notas do aluno são: <br>";
foreach ($notas as $nota) {
    echo $nota . "<br>";
}

echo "<br>A média do aluno é: " . number_format($media, 2);
?>
