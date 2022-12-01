<?php
    /* Chamando a conexão */
    include 'conexao.php';

    /* Pegando os dados do form */
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $salario = $_POST['salario'];

    /*Editando no BD*/
    $editando_func = "UPDATE tb_funcionarios 
    SET nome = '$nome', telefone = '$telefone', cpf = '$cpf', email = '$email', salario = '$salario' 
    WHERE id = '$id'
    ";
    

    /* Lendo no sql */
    $ler_func_editado = mysqli_query($cnx, $editando_func);

    /* Voltando para a listagem dos funcionarios */
    header('location: funcionarios.php');
?>