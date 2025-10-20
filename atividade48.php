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
Descritivo: Escreva uma função fatorial que receba um número e retorne seu fatorial.

*******************************************************************************/
function fatorial($n) {
    if ($n < 0) {
        return null; // fatorial não é definido para números negativos
    }
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Exemplo de uso
echo "Fatorial de 5: " . fatorial(5); // saída: 120
/*
A função fatorial($n) calcula o fatorial de um número n.
Se n for negativo, retorna null, pois o fatorial não é definido para números negativos.
Usa um loop for para multiplicar todos os números de 2 até n.
O resultado é retornado com return.
Depois, chamamos a função com o valor 5 e exibimos o resultado com echo.
*/
?>