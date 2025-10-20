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
Descritivo: :  : Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
*/

function converterParaMaiusculas($texto) {
    return strtoupper($texto); // retorna a string em maiúsculas
}

// Exemplo de uso
$frase = "php é muito legal!";
$resultado = converterParaMaiusculas($frase);

echo "Texto original: $frase <br>";
echo "Texto em maiúsculas: $resultado";
?>
