<?php
    //Incluir a conexão para se conectar ao banco antes de tudo
    include 'conexao.php';
    //Indice para deletar
    $id = 3;

    //Verificar conexão
    if(!$con){
        echo 'Desconectado!';
    }else{
        //Verificar se o id existe para poder deleta-lo
        if(verificarSeExiste($id)){
            $cmd = $con -> prepare("DELETE FROM tb_contas WHERE id=:id");
            $cmd -> bindValue(":id", $id);
            $cmd -> execute();
            echo  'Dado apagado!';
        }
    }
    //Função para buscar o id para verificar se existe e retornar
    function verificarSeExiste($indice){
        include 'conexao.php';
        $query = "SELECT * FROM tb_contas";
        foreach($con -> query(($query)) as $linha){
            if($linha['id'] == $indice){
                return true;
            }
        }
    }
?>