<?php
/****************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: Menu de opções com do-while até o usuário escolher "Sair"
******************************************************************************/
 do{
    echo"===MENU===\n";
    echo"1. Iniciar\n";
    echo"2. Parar\n";
    echo"3. Sair\n";
    echo"Escolha uma opção:";
    $op=trim(fgets(STDIN));
 
    switch ($op) {
      case '1':
        echo"iniciando...\n";
        break;
      case '2':
        echo"Parando...\n";
        break;
      case '3':
        echo"Saindo do programa.\n";
        break;
      default:
        echo"Opção inválida!\n";
    }
} while ($op != '3');
?>