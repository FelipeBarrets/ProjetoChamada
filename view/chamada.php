
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
        <?php
        require_once "../model/consultas.class.php";

        $consulta = new Consultas();
        $nomes = $consulta->listarNomes();
        ?>


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


            
            <form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" action="../controller/controleChamada.php">
                
            <table border = "1">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Frequência</th>
                    <th>Estuda a biblia?</th>
                    <th>Participa de um PG?</th>
                    <th>Atua em um ministerio ou projeto de missão?</th>


                <style>
                    th{
                        margin-top: 10px;
                    }
                </style>
                </tr>
                <?php
                 

                 $i= 0;
                foreach ($nomes as $item) {
                    
                    ?>

                    <tr>
                        <td><?php echo $item["idaluno"]; ?></td>
                        <td><?php echo $item["nomeal"]; ?></td>
                        <td><INPUT TYPE="checkbox" NAME="presença<?php echo $i;?>"> </td>
                        <td><INPUT TYPE="checkbox" NAME="biblia<?php echo $i;?>"> </td>
                        <td><INPUT TYPE="checkbox" NAME="pg<?php echo $i;?>"> </td>
                        <td><INPUT TYPE="checkbox" NAME="missao<?php echo $i;?>" > </td>

                    </tr>
                    <?php
                     ++$i; }
                
                
                ?>
            </table>
            <br><br>
     <input type="submit" class="btn btn-info" value="Salvar">
     <style>.btn-info{margin: auto; margin-left: 200px;} </style>
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
