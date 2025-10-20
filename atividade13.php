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
Descritivo:DO-WHILE: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.
*******************************************************************************/
    // Inicia a variável
        echo "<h2>Verificação de Senha</h2>";
        echo "<p>Digite a senha correta para continuar.</p>";
    $senhaCorreta = "1234";
    $senhaDigitada = "";

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senhaDigitada = $_POST["senha"];

        do {
            if ($senhaDigitada != $senhaCorreta) {
                echo "<p style='color:red;'>Senha incorreta! Tente novamente.</p>";
                break;
            } else {
                echo "<h3 style='color:green;'>Acesso permitido! 🎉</h3>";
            }
        } while ($senhaDigitada != $senhaCorreta);
    }

    // Exibe o formulário novamente se a senha estiver incorreta
    if ($senhaDigitada != $senhaCorreta) {
        echo '
        <form method="post">
            <label>Senha: </label>
            <input type="password" name="senha" required>
            <button type="submit">Enviar</button>
        </form>
        ';
/* Quando o usuário envia, o PHP verifica se é “1234”.
O do...while garante que o programa só sai do loop quando a senha estiver correta.
Se estiver incorreta, exibe uma mensagem de erro e o formulário aparece novamente.
Se estiver correta, mostra a mensagem de sucesso e para o loop.
*/
    }
    ?>