<?php
    /* Chamando a conexão */
    include 'conexao.php';

    /* Recebendo o id que querendo excluir */
    $id = $_POST['id'];

    /*deletando do BD*/
    $deletando_func = "DELETE FROM tb_funcionarios WHERE id = '$id'";

    /* Atualizando o BD */
    $ler_func = mysqli_query($cnx, $deletando_func);

    /*Voltando para a listagem dos funcionarios */
    header('location: funcionarios.php');
?>