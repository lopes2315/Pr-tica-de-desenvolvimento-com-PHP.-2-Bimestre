
<?php
/*********************************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: Procedimento verificarParImpar que recebe um número e imprime se é Par ou ímpar
*********************************************************************************************/
function verificarParImpar($n){
    if(!is_int($n)&& !ctype_digit(strval($n))){
        echo"Entrada não é um inteiro válido.\n";
        return;
    }
    $n= intval($n);
    if ($n % 2 ===0){
        echo "$n é Par\n";
    } else {
        echo "$n é Ìmpar\n";
    }
}
echo "Digite um número inteiro:";
$entrada = trim(fgets(STDIN));
verificarParImpar($entrada);
?>