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
Descritivo:FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50
*******************************************************************************/
// Números primos entre 1 e 50 usando for/if
echo "Números primos entre 1 e 50:<br>";

for ($num = 2; $num <= 50; $num++) {
    $primo = true; // assume que é primo

    // verifica divisores
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $primo = false; // não é primo
            break;
        }
    }

    // se continuar sendo primo, exibe
    if ($primo) {
        echo $num . " ";
    }
/*O primeiro for percorre os números de 2 até 50.
O segundo for testa se o número tem algum divisor além de 1 e dele mesmo.
Se achar um divisor ($num % $i == 0), marca como não primo.
Se não achar nenhum divisor, o número é primo e é exibido.
*/
}
?>
   