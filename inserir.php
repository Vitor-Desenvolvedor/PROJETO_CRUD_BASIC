<?php
//Receber valores do Formulário
    if(isset($_POST['nome'])&& isset($_POST['idade'])){

        $novoNome = $_POST['nome'];
        $novaIdade = $_POST['idade'];

        //Consulta SQL para inserir um novo registro 

        $sqlInserir = "INSERT INTO usuarios(nome,idade) VALUES('$novoNome','$novaIdade')";

        if($conexao->query($sqlInserir) === TRUE ){

            echo "Novo registro inserido com sucesso!";
        } else{
            echo "Erro ao inserir novo registro!";
        }

    }

?>