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
Descritivo:Crie uma função chamada somar que receba dois números e retorne a soma deles
*******************************************************************************/
// Declaração da função
function somar($num1, $num2) {
    return $num1 + $num2;
}

// Chamada da função e exibição do resultado
$resultado = somar(10, 5);
echo "A soma de 10 e 5 é: $resultado";
/* A função somar($num1, $num2) recebe dois parâmetros.
Ela retorna a soma desses dois números usando return.
Depois, chamamos a função com os valores 10 e 5, armazenando o resultado em $resultado, que é exibido com echo.
*/  
?>