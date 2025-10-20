<?php
// Tabuada do 5 usando for
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: José Carlos Domingues Flôres
Turma: ESOFT-2B
Componentes:
 25363242-2 - Euclides Benedito modesto Coelho Neto  
 25357716-2 - Felipe Eidy Toyama                        
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
Data: 15 de Novembro de 2025
Descritivo:FOR: Faça um programa que exiba a tabuada do 5, de 1 a 10.
*******************************************************************************/
echo "<h2>Tabuada do 5</h2>";


for ($i = 1; $i <= 10; $i++) {
    $resultado = 5 * $i;
    echo "5 x $i = $resultado<br>";
}
/* for ($i = 1; $i <= 10; $i++) → o loop começa em 1 e vai até 10.
Em cada repetição, calcula-se 5 * $i.
O resultado é mostrado na tela com echo.
*/
?>
