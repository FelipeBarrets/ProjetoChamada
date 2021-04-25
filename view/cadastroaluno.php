<!DOCTYPE html>
<?php
session_start();
?>





<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
                <link href="../css/design.css" rel="stylesheet" type="text/css"/>

        <title>Chamada</title>
    </head>
    <body>
        


        <div id="Geral"> 
            <div id="Menu">

                <a href="painel.php" > <img id="logo" src="../img/escolasabatina_g.png" alt="" /></a>
                <h4 id="titulo">Escola Sabatina</h4>

                <div id="cmenu">
                    <ul class="nav flex-column">
                        <li class="but">
                            <img src="../img/icons8-usuário-24.png" alt=""/>
                            <button type="button"  class="btn btn-outline-dark" onClick="cadastraraluno()" > Cadastrar Alunos </button><br>
                        </li>

                        <li class="but" >
                            <img  src="../img/icons8-ereader-24 (1).png" alt=""/>
                            <button type="button" class="btn btn-outline-dark"onClick="chamada()">  Chamada </button>  <br>

                        </li> 
                        <li class="but"  >
                            <img src="../img/icons8-about-24.png" alt=""/>
                            <button type="button" class="btn btn-outline-dark"onClick="relatorio()">Relatório</button><br>
                        </li> 

                        <li class="but">
                            <img src="../img/icons8-logout-arredondado-à-esquerda-24.png" alt=""/> 
                            <button type="button" class="btn btn-outline-dark" onClick="saida()"> Sair</button>
                        </li> 
                    </ul> 
                </div>

            </div>
            <div><form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" action="../controller/cadastroa.php">
                    <h1>Cadastro do Aluno <style> h1{color: darkturquoise;} </style></h1>
                    <div class="form-group ">
                        <label for="Insira seu nome">Nome</label>
                        <input type="text" name="nomea" class="form-control" id="nome" placeholder="Insira o nome do aluno" size="100">
                    </div>
                    <div class="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="emaila"  class="form-control" id="inputEmail4" placeholder="Insira o email do aluno">
                        </div>

                    </div>
                    <div class="form-group ">
                        <label for="Insira seu numero">Numero de telefone</label>
                        <input type="text" name="numeroa" class="form-control" id="inputAddress" placeholder="Insira o numero do aluno">
                    </div>





                    <button type="submit" class="btn btn-info" >Concluido<style>.btn-info{margin: auto;} </style></button>
                    <br>
                    <br>
                  

                <?php
//require_once "pdo.class.php";
//include("localhost/cadastro.php");
                    if (isset($_SESSION['deu certo'])) {
                        echo $_SESSION['deu certo'];
                        unset($_SESSION['deu certo']);
                    }
                    ?> 

                </form>


            </div>








            <script type="text/javascript">
                function cadastraraluno()
                {
                    location.href = "cadastroaluno.php";
                }

                function chamada()
                {
                    location.href = "chamada.php";
                }
                function relatorio()
                {
                    location.href = "relatorio.php";
                }
                function saida()
                {
                    location.href = "../index.php";
                }

            </script>
    </body>
</html>
