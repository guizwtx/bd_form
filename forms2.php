<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nomedoAnimal = $_POST["nomedoAnimal"];
    $especie= $_POST["especie"];
    $raca = $_POST["raca"];
    $datanasc = $_POST["datanasc"];
    $infomed = $_POST["infomed"];

    $response = mysqli_query($conexao, "INSERT INTO animaldeestimacao(nomedoAnimal,especie,raca,datanasc,infomed) VALUES('$nomedoAnimal','$especie','$raca','$datanasc','$infomed')");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="form2">
            <form action="forms2.php" method="post">
                <h1>REGISTRO</h1><br>
            <label for="nomedoAnimal">Nome do Animal</label>
            <input type="text" name="nomedoAnimal" id="nomedoAnimal" placeholder="Inserir Nome"><br><br>

            <label for="especie">Espécie</label>
            <input type="text" name="especie" id="especie" placeholder="Inserir Espécie"><br><br>

            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca" placeholder="Inserir Raça"> <br><br>

            <label for="datanasc">Data de Nascimento</label>
            <input type="date" name="datanasc" id="datanasc" ><br><br>

            <label for="infomed">Informções Médicas</label>
            <input type="text" name="infomed" id="infomed" placeholder="Inserir Informações Médicas"><br>

            <input type="submit" name="submit" id="submit">
        </form>
        </div>
    </main>
</body>
</html>