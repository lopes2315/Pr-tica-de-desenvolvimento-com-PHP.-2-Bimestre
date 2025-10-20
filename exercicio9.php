<?php
/*****************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo:Leia números do usuário até que ele digite 0; no final mostre a soma.
  ********************************************************************************/
  
  $soma=0;
  while (true) {
      echo "digite um número (0 para terminar):";
      $entrada = trim(fgets(STDIN));
      if (!is_numeric($entrada)) {
          echo "Entrada inválida. Tente novamente.\n";
          continue;
      }
      $num= floatval($entrada);
      if ($num===0.0){
          break;
      }
      $soma += $num;
  }
  echo "Soma dos números digitados:$soma\n";
  