<?php
    include 'conexao.php';

    $id = 3;
    if(!$con){
        echo  'Desconectado!';
    }else{
        if(retornarDado($id)){
            $cmd = $con -> prepare("UPDATE tb_contas SET nome=:n, senha=:s WHERE id=" .$id);
            $cmd -> bindValue(":n", "Douglas");
            $cmd -> bindValue(":s", "1020");
            $cmd -> execute();
            echo  'Dado atualizado!';
        }
        
    }

    function retornarDado($indice){
        include 'conexao.php';
        $query = ("SELECT * FROM tb_contas");
        foreach($con -> query(($query)) as $linha){
            if( $linha['id'] == $indice) {
                return true;
            }
        }
    }
?>