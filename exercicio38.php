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
  Descritivo: 38.Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média
>= 7) ou "Reprovado"
 *******************************************************************************/
 
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: $media ";

    if ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}

// Exemplo de uso
calcularMediaAluno(8, 6);
?>