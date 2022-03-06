<!DOCTYPE html>
<?php
session_start();
?>



<?php
//require_once "pdo.class.php";
//include("localhost/cadastro.php");
 if (isset($_SESSION['deu certo'])){
   echo $_SESSION['deu certo'];
   unset($_SESSION['deu certo']);         }
   
?> 

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title></title>
        <style> img{margin-left: 230px; }</style>
    </head>
    
        <form class="w-50 p-3 pt-5 mx-auto" method="post" action="../controller/cadastrop.php">
            <img src="../img/sabatina.png" title="Escola Sabatina" width="150" height="120"  />
            <h1>Cadastro <style> h1{color: darkturquoise;} </style></h1>
            <div class="form-group ">
                <label for="Insira seu nome">Nome</label>
                <input type="text" name="nomep" class="form-control" id="nome" placeholder="Insira seu nome" size="100">
            </div>
            <div class="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="emailp"  class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group ">
                    <label for="Insira sua senha">Senha</label>
                    <input type="password" name="senhap" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
            </div>
            <div class="form-group ">
                <label for="Insira seu numero">Numero de telefone</label>
                <input type="text" name="numerop" class="form-control" id="inputAddress" placeholder="Insira seu numero">
            </div>
            <div class="form-group">
                <label for="Informe a classe">Qual a sua classe?</label>
                <input type="text" name="classep" class="form-control" id="inputAddress" placeholder="Insira o nome da Classe">
            </div>




            <button type="submit" class="btn btn-info" >Concluido</button>
        </form>

    

