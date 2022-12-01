<?php
    /* Chamando o banco de dados*/
    include  'conexao.php';
    $id = $_POST['id'];
    /* Vamos visualizar os dados do banco de dados */
    $chamar_dados = "SELECT * FROM tb_funcionarios WHERE id = '$id'";
    /* Agora vamos ler o nosso sql */
    $ler_cadastro_func = mysqli_query($cnx, $chamar_dados);    
?>


<!DOCTYPE html>
<head>
    <html lang="pt-br">
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../image/GT-mini-logo.png" type="image/x-icon">
    <meta charset="utf-8"/>
    <title>Cadastro funcionário</title>
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


	<form method="POST" action="editar_action.php" class='espacamento'>
    <h1>FAÇA O CADASTRO DO FUNCIONÁRIO</h1> <br>
		<div id='erro'></div>
		<div id='acerto'></div>

        <input type="hidden" name='id' value ="<?php echo $id; ?>">
        <?php
                    /* Estamos salvando os dados em váriaveis no php */
            while($receber_func = mysqli_fetch_array($ler_cadastro_func)){
                $nome = $receber_func['nome'];
                $telefone = $receber_func['telefone'];
                $cpf = $receber_func['cpf'];
                $email = $receber_func['email'];
                $salario = $receber_func['salario'];
        ?>
            <div class="flutuacao">
                    <input name="nome" type="text" id="usuario"  value ="<?php echo $nome; ?>">
                    <label id="labelUsuario" for="usuario"></label>
            </div>

            <div class="flutuacao">
                    <input name="telefone" type="tel" id="telefone"  value ="<?php echo $telefone; ?>">
                    <label id="labelTelefone" for="telefone" pattern="\([0-9]{2}\)[9]{1}[0-9]{4}-[0-9]{4}"
                        max-leght="11"></label>
            </div>

            <div class="flutuacao">
                    <input name= "salario" type="text" id="salario"  value ="<?php echo $salario; ?>">
                    <label id="labelSalario" for="salario"></label>
            </div>

            <div class="flutuacao">
                    <input name="cpf" type="text" id="campo_cpf"  value ="<?php echo $cpf; ?>">
                    <label id="labelCpf" for="cpf"></label>
            </div>

            <div class="flutuacao">
                    <input type="text" id="email" name="email" value ="<?php echo $email; ?>">
                    <label id="labelEmail" for="email"></label>
            </div>

            <div class='justify-center'>
                    <button>Atualizar</button>
                    
            </div>
        <?php }; ?>       
	</form>

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

</body>
</html>