<?php
/******************************************************************************
Curso: Engenharia de Software Disciplina: Linguagem e Técnicas de Programacão 
Professor: Flores Turma: ESOFT-2B 
Componentes: 
 25357716-2 - Felipe Eidy Toyama           
 25363242-2 - Euclides Benedito modesto Coelho Neto             
 25362174-2 - Guilherme Lopes Pereira Vidal            
 25357453-2 - Leonardo de Jesus Sabino Flugel             
 25362698-2 - Luis Guilherme Ramon Schuhli Schultz 
  Data: 13/09 de 2025 
  Descritivo: Array associado com os dados de um aluno (nome,idade,curso).
*******************************************************************************/
$aluno = [
    "nome" =>"João Silva",
    "idade" => 21,
    "curso" => "Engenharia de Software"
];

echo"\nImpressão formatada:\n";
foreach ($aluno as $chave => $valor) {
    echo "$chave:$valor\n";
}
?>
