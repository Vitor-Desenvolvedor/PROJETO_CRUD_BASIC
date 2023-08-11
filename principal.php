<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuario</title>
</head>
<body>
    <h1>Inserir Novo usuário</h1>
    <form action="" method="POST">
        <label>Nome:<input type="text" name="nome"></label><br><br>
        <label>Idade:<input type="text" name="idade"></label><br><br>
        <input type="submit" value="inserir">
    </form>

    <h1>Excluir usuário</h1>
    <form action="" method="POST">
        <label>Código do Usuário:<input type="text" name="id_excluir"></label><br><br>
        <input type="submit" value="Excluir">
    </form>



<?php

// Listar usuários cadastrados no sistema

$sqllistar = "SELECT * FROM usuarios";
$resultado = $conexao -> query($sqllistar);

// Condicionamento para listar
if($resultado->num_rows > 0){

    echo "<ul>";
    while($linha = $resultado->fetch_assoc()){

        echo "<li> Código:".$linha['Código']."| Nome:".$linha['nome']."| Idade:".$linha['idade']."</li>";

    }

    echo "</ul>";

} else {

    echo "Nenhum valor encontrado!";

}



?>
</body>
</html>