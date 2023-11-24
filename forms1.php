<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["numtelefone"];
    $email = $_POST["email"];

    $response = mysqli_query($conexao, "INSERT INTO cliente(nome,endereco,numtelefone,email) VALUES('$nome','$endereco','$telefone','$email')");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="form1">
        <form action="forms1.php" method="post">
            <h1>CADASTRO</h1><br>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Inserir Nome"><br><br>

            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Inserir Endereço"> <br><br>

            <label for="numtelefone">Telefone</label>
            <input type="text" name="numtelefone" id="numtelefone" placeholder="Inserir Telefone"><br><br>

            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="Inserir E-mail"><br><br>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</main> 

</body>
</html>