<?php
    //Inclui a conexão
    include 'conexao.php';

    //Verifica se está desconectado, se não, ele insere o dado
    if(!$con){
        echo   'Desconetado';
    }else{
        //Passa os valores e adiciona na tabela do banco
        $cmd = $con -> prepare('INSERT INTO tb_contas (nome,senha) VALUES(:n,:s)');
        $cmd -> bindValue(":n","Carlos");
        $cmd -> bindValue(":s","123");
        $cmd -> execute(); 
        echo 'Dado cadastrado!';
    }
?>