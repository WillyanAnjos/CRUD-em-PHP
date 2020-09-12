<?php
    //Linha para fazer a conexão com o banco de dados
    $con = new PDO("mysql:host=localhost; dbname=base_dados", "root","");

    //Verificar se está desconectado, para mostrar  o erro;
    if(!$con){
        echo 'Desconectado';
    }
?>