<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,data_nasc,senha) VALUES ('$nome','$email','$data_nasc','$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="POST">
        <div class="criando_conta">
            <label for="nome">Nome:*</label><br>
            <input type="text" name="nome" placeholder="Digite Seu nome" id="nome" class="input" required>
            <br><br>
            <label for="nome">Email</label><br>
            <input type="text" name="email" placeholder="Digite seu email" id="email" class="input" required>
            <br><br>
            <label for="nome">Data de nascimento:</label><br>
            <input type="date" name="data"  id="data" class="input" required>
            <br><br>
            <label for="nome">Senha:</label><br>
            <input type="password" name="senha" placeholder="Digite sua senha" id="senha" class="input" required>
            <br><br>
            <label for="nome">Repita sua Senha:</label><br>
            <input type="password" name="check-senha" placeholder="Repita sua senha" id="check-senha" class="input" required>
            <br><br>
            <input type="submit" class="btn1" name="submit" id="cadastrar">
        </div>
    </form>
</body> 
</html>
