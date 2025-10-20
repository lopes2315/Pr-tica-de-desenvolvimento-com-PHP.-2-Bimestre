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
Descritivo:FOREACH: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna
*******************************************************************************/
// Criando a matriz 3x3
$matriz = [
    [2, 3, 4],    // linha 0
    [6, 5, 9],    // linha 1
    [1, 2, 9]     // linha 2
];
// Imprimindo o elemento da segunda linha (índice 1) e terceira coluna (índice 2)
echo $matriz[1][2];  // Saída: 6
?>