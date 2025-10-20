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
Descritivo:Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
*******************************************************************************/
// Função que gera um array com números pares de 0 até n
function gerarArrayPares($n) {
    $pares = array(); // cria um array vazio

    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i; // adiciona o número ao array
        }
    }

    return $pares; // retorna o array de números pares
}

// Exemplo de uso:
$n = 20;
$resultado = gerarArrayPares($n);

echo "Números pares de 0 até $n:<br>";
echo implode(", ", $resultado);
echo "<br>";

/* A função gerarArrayPares($n) cria um array vazio chamado $pares.
Usa um loop for para iterar de 0 até n.
Dentro do loop, verifica se o número é par com $i % 2 == 0.
Se for par, adiciona ao array $pares usando $pares[] = $i.
No final, retorna o array de números pares.
O exemplo de uso chama a função com n = 20 e exibe os números pares usando
implode to format the output. 
*/  
?>
