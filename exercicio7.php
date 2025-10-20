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
  Descritivo: Peça ao usúario para adivinhar um número até acertar 
*************************************************************************/

$numeroSecreto= rand(1,100);
do {
    $tentativa = readline("Adivinhe o número (entre 1 e 100):");
    if ($tentativa> $numeroSecreto){
        echo "Muito alto! Tente novamente.\n";
    } elseif ($tentativa<$numeroSecreto) {
        echo "Muito baixo! Tente novamente.\n";
    }else{
        echo "Parabéns! Você acertou!\n";
    }
} while ($tentativa!= $numeroSecreto);
?>