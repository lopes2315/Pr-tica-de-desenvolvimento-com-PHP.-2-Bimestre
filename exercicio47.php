<?php
/******************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: Função contarVogais que recebe uma string e retorna o número de vogais 
*******************************************************************************/
$texto = readline("Digite uma palavra ou frase:");
$texto = strtolower($texto); // converte para minúsculo
$vogais = ['a','e','i','o','u'];
$contador= 0;
foreach (str_split($texto)as $letra) {
    if (in_array($letra,$vogais)){
        $contador++;
    }
}
echo "Número de vogais: $contador\n";
?>