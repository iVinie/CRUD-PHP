<?php
    /* Criando as variáveis para fazer a conexão */
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $bd_name = 'cadastro_func';

    /* Fazendo a conexão com BD */
    $cnx = mysqli_connect($host, $user, $passwd, $bd_name);

?>