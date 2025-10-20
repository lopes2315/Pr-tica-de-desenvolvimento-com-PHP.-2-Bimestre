<?php
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
Descritivo:FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach
*******************************************************************************/
// Array de números (exemplo do exercício 17)
$numeros = array(3, 7, 12, 25, 8, 19, 42, 5, 16, 30);

// Inicializa a soma
$soma = 0;

// Usa foreach para percorrer o array e somar os valores
foreach ($numeros as $num) {
    $soma += $num;
}

// Exibe o resultado
echo "Os números são: " . implode(", ", $numeros) . "<br>";
echo "A soma de todos os números é: $soma";
echo "<br>";
/* O foreach percorre cada número no array $numeros.   
Em cada iteração, adiciona o número atual ($num) à variável $soma.
No final, exibe a soma total.
*/  

?>