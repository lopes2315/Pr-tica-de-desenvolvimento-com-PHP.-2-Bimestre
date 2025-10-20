<?php
 /******************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores
Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: 45.Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
 *******************************************************************************/
 
function obterPrimeiroElemento($array) {
    return $array[0];
}

// Exemplo de uso
$nomes = ["João", "Ana", "Carlos"];
echo obterPrimeiroElemento($nomes);
?>