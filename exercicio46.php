<?php 
  /*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25357453-2 - Leonardo de Jesus Sabino Flugel
 25362698-2 - Luis Guilheme R. S. Schuliz
 25363242-2 - Euclides Benedito Modesto Coelho N.
 25357716-2 - Felipe Eidy Toyama
 25362174-2 - Guilheme Lopes Pereira Vidal
Data: 21 de outubro de 2025
Descritivo: :  : Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário
*/

function ehPrimo($numero) {
    // Números menores ou iguais a 1 não são primos
    if ($numero <= 1) {
        return false;
    }

    // Verifica divisores de 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // achou um divisor, então não é primo
        }
    }

    return true; // se não achou divisores, é primo
}

$valor = 7;

if (ehPrimo($valor)) {
    echo "$valor é um número primo.";
} else {
    echo "$valor não é um número primo.";
}
?>
