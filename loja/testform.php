<?php

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <style>
        body{
           font-family: Arial, Helvetica, sans-serif;
           background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid blue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border: 5px;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
            <legend><b>Formulario clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome">Nome Completo</label>
            </div>
            <br>
            <br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email">Email</label>
            </div>
            <br>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha">Senha</label>
            </div>
            <br>
            <br>
            <input type="submit" nome="submit" id="submit">
        </fieldset>
        </form>
    </div>
    
</body>
</html>