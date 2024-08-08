<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassoword = '';
    $dbName = 'loja';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassoword,$dbName);

   // if($conexao->connect_errno)
   //{
   //     echo "Erro";
   // }
   // else
   // {
   //     echo "Conexão efetuada com sucesso";
   // }
?>