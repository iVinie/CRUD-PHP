<?php
    /* Chamando a conexão */
    include 'conexao.php';

    /* Pegando os dados do form */
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $salario = $_POST['salario'];

    /*Inserindo no BD*/
    $recebendo_novo_func = "INSERT INTO tb_funcionarios (nome, telefone, cpf, email, salario) VALUES ('$nome', '$telefone', '$cpf', '$email', '$salario')";

    /* Lendo no sql */
    $ler_novo_func = mysqli_query($cnx, $recebendo_novo_func);

    /* Voltando para a listagem dos funcionarios */
    header('location: funcionarios.php');
?>