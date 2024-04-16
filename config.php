<?php

    $dbHost = 'Mateus';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'criar-conta';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao-> connect_error){
        echo "Erro na conexão";
    }
    else{
        echo "Conexao Efetuada com suecesso!";
    }

?>