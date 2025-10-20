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
Descritivo: Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.
*******************************************************************************/
// Declaração da função
function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Exemplo de uso da função
$largura = 8;
$altura = 5;

$area = calcularAreaRetangulo($largura, $altura);

echo "A área do retângulo de largura $largura e altura $altura é: $area";
/* A função calcularAreaRetangulo($largura, $altura) recebe dois parâmetros.
Ela retorna a área do retângulo calculando largura * altura usando return.
Depois, chamamos a função com os valores 8 e 5, armazenando o resultado em $area, que é exibido com echo.
*/  
?>