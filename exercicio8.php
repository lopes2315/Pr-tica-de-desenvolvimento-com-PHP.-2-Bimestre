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
  Descritivo: 8.WHILE: Faça um programa que imprima os múltiplos de 3, de 3 a 30
 *******************************************************************************/
 
	$numero = 3;

while ($numero <= 30) {
    echo $numero . ",";
    $numero += 3;
}
?>