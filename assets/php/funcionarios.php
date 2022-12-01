<?php
    /* Chamando o banco de dados*/
    include  'conexao.php';

    /* Vamos visualizar os dados do banco de dados */
    $chamar_dados = "SELECT * FROM tb_funcionarios ";
    /* Agora vamos ler o nosso sql */
    $ler_cadastro_func = mysqli_query($cnx, $chamar_dados);    
?>

<!DOCTYPE html>
<head>
    <html lang="pt-br">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../image/GT-mini-logo.png" type="image/x-icon">
    <meta charset="utf-8"/>
    <title>Funcionários cadastrado</title>
</head>

<body>
    <header id="header">

        <a href="../../index.html"><img src="../image/grau_TECH.png" alt="logo"></a>

        <div class="btn-header">
            <button id="btn1">
                <svg class="icon icon-color" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z">
                    </path>
                </svg>
                <div class="text">
                    <p>MINHA CONTA</p>
                    <p id="user">
                        <a href="./login.html">ENTRAR</a>
                        /
                        <a href="./cadastrar.html">CADASTRAR</a>
                    </p>
                </div>
            </button>

            <a href="./atendimento.html">
                <button id="btn2">
                    <svg class="icon icon-color" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M11.5 2C6.81 2 3 5.81 3 10.5S6.81 19 11.5 19h.5v3c4.86-2.34 8-7 8-11.5C20 5.81 16.19 2 11.5 2zm1 14.5h-2v-2h2v2zm0-3.5h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2h-2c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z">
                        </path>
                    </svg>
                    <div class="text">
                        <p>ATENDIMENTO</p>
                        <p>AO CLIENTE</p>
                    </div>
                </button>
            </a>


        </div>
        <div id="line-header"></div>
    </header>	



    <h1 style='color: #c5c5c5'>Funcionários</h1>
    <div class="container">
        
    <table class="table" style='color: #c5c5c5'>
        <thead class="thead-inverse">
        <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>CPF</th>
                <th>E-MAIL</th>
                <th>SALÁRIO</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    /* Estamos salvando os dados em váriaveis no php */
                    while($receber_func = mysqli_fetch_array($ler_cadastro_func)){
                        $id = $receber_func['Id'];
                        $nome = $receber_func['nome'];
                        $telefone = $receber_func['telefone'];
                        $cpf = $receber_func['cpf'];
                        $email = $receber_func['email'];
                        $salario = $receber_func['salario'];
                ?>
                <tr>
                    <td scope="row"><?php echo $id; ?></td>
                    <td><?php echo $nome;?></td>
                    <td><?php echo $telefone;?></td>                   
                    <td><?php echo $cpf;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $salario;?></td>
                    <td>
                        <div class='justify-center2'>
                            <form action="editar.php" method="post" >
                                <input type="hidden" name='id' value ="<?php echo $id; ?>">
                                <button>Editar</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='justify-center2'>
                                <form action="excluir.php" method="post" >
                                    <input type="hidden" name='id' value ="<?php echo $id; ?>">
                                    <button>Excluir</button>
                                </form>
                        </div>
				    </td>
                </tr>

                <!-- Fim do while -->
                <?php }; ?>
            </tbody>
    </table>

</div>
<div class='justify-center'>
			<a href="cadastro.php">
                <button value='salvar'>Cadastrar novo funcionário</button>
			</a>
    </div>

	<footer id="footer">
        <div class="line-footer"></div>
        <div class="nav">
            <a href="#line-header"><button class="footer-btn">Inicio</button></a>
            <a href="./curriculo.html">
                <button class="footer-btn">Trabalhe conosco</button>
            </a>
            <a href="./atendimento.html">
                <button class="footer-btn">Contato</button>
            </a>
        </div>
        <div class="social">
            <img src="../image/icon-face.png" alt="">
            <img src="../image/icon-insta.png" alt="">
            <img src="../image/icon-tw.png" alt="">
            <img src="../image/icon-wpp.png" alt="">
        </div>
        <div id="copy">
            &copy; Copyright Assuero.Mota & Vinicius Oliveira <br>
        </div>
    </footer>

    <script src="../JavaScript/cadastrar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
