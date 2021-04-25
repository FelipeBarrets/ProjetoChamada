<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
              crossorigin="anonymous">
        <link href="../css/design.css" rel="stylesheet" type="text/css"/>

        
    </head>
    <body>

        
        
            
            
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
            <div id="Conteudo"> <img class="imgconteudo" src="../img/love.png" alt=""/>  </div>


        
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
