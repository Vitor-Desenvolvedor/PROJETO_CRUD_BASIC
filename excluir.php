<?php
//Consulta SQL para excluir registro 
    
    if(isset($_POST['id_excluir'])){
        $idExcluir = $_POST['id_excluir'];
        echo $idExcluir;
        $sqlExcluir = "DELETE FROM usuarios WHERE codigo = $idExcluir";


        if($conexao->query($sqlExcluir) === TRUE){

            echo "Registro Excluido com sucesso!";
        }else{
            echo "Erro ao excluir o registro".$conexao->error;
        }
    }

?>