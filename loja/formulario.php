<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['senha']);

       //include_once('config.php')

       //$nome = $_POST['nome'];
       //$email = $_POST['email'];
       //$senha = $_POST['senha'];

       //$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')")
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMpads</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--INICIO BANNER-->
    <div class="banner">

        <!--INICIO CONTAINER-->
        <div class="container">

                <!--INICIO NAVEGAÇÃO TOPO-->
                <div class="navbar">

                    <div class="logo">
                        <img src="logo3.png" alt="AIMpads" width="160px">
                    </div>
                <!--INICIO MENU DE NAVEGAÇÃO TOPO-->
                    <nav>
                        <ul id="MenuItens">
                            <li><a href="index.html" title="">Inicio</a></li>
                            <li><a href="" title="">Produtos</a></li>
                            <li><a href="" title="">Empresa</a></li>
                            <li><a href="" title="">Contatos</a></li>
                            <li><a href="formulario.php" title="">Minha Conta</a></li>
                        </ul>
                    </nav>
                <!--FIM MENU DE NAVEGAÇÃO TOPO-->

                <img src="cart-outline.svg" alt="" width="30px" height="30px">
                </div>
                <!--FIM NAVEGAÇÃO TOPO-->

        </div>
        <!--FIM CONTAINER-->

    </div>
    <!--FIM BANNER-->


    <!--INICIO MINHA CONTA-->
    <div class="minha-conta">

        <div class="container">
            <div class="linha">

                <div class="col-1">
                    <img src="img/banner-1.png" alt="" width="100%">
                </div>

                <div class="col-2">
                    <div class="formulario">

                        <div class="btn-form">
                            <span onclick="Entrar()">Entrar</span>
                            <span onclick="Cadastro()">Cadastro</span>
                            <hr id="Indicador">
                        </div>

                        <form action="" method="post" id="EntrarPainel">
                            <input type="email" name="email" id="" placeholder="E-mail de acesso" required>
                            <input type="password" name="senha" id="" placeholder="Digite Sua Senha" required>
                            <button type="submit" name="senEntrar" class="btn">Entrar</button>
                            <a href="" title="">Esqueceu sua senha?</a>
                        </form>

                        <form action="" method="post" id="CadastroSite">
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                            <input type="email" name="email" id="" placeholder="E-mail de acesso" required>
                            <input type="password" name="senha" id="" placeholder="Digite Sua Senha" required>
                            <button type="submit" name="submit" id="submit" class="btn">Cadastre-se</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--FIM MINHA CONTA-->

    <!--INICIO RODAPE-->

     <footer class="rodape">

        <div class="container">
            <div class="linha">

                <div class="rodape-col-2">
                    <img src="logo3.png" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Política e Privacidade</li>
                        <li>Contato</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Facebook</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos reservados
            </p>
        </div>

     </footer>

    <!--FIM RODAPE-->



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="login.js"></script>
</body>
</html>