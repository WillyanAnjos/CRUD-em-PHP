<?php
    //Inclui a conexão
    include 'conexao.php';

    if(!$con){
        echo 'Desconectado!';
    }else{
        //Query sql para buscar no tabela todos os dados
        $query = ("SELECT * FROM tb_contas");

        //Loop para pegar todos os dados da tabela e mostrar
        foreach($con -> query(($query)) as $linha){
            echo "Senha: " .$linha['senha'];
            echo '<br>';
            echo "Nome: " .$linha['nome'];
        }
    }
?>