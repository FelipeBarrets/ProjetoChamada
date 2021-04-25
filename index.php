<!doctype html>
 <?php
    session_start();
    ?>
<html>
   

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Pagina de Login</title>
        <style>

            h3{
                text-align: center;

            }
            

            .Login{
                text-align: center;
            }

        </style> 
    </head>
    <body>

        <div class="card mp-auto  mb-auto mt-4 ">
            <div class="card-body">



                <form class="w-50 p-3 pt-3 mx-auto" method="POST" action="view/painel.php">
                    <img id="logo" src="img/escolasabatina_g.png" alt="" width="150" height="150" class="ml-5" />

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="Esqueceu seu email?" placeholder="Insira seu email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="lembrar" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembrar desta conta</label>
                    </div>
                    
                    <?php
                        if (isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                       
                     ?>
                   

                    <button type="submit" class="btn btn-info">Entrar</button> <br>


                </form>
                <form action= "cadastroprof.php" >
                    <h5>Ainda não possui cadastro? clique aqui</h5> <style> h5{ text-align: center; }</style>
                    <button type="button" class="btn btn-dark" onClick="cadastrar()" id="cadastro">Cadastrar-me<style>.btn-dark{margin-left: 200px;}</style></button>

                </form>

                <script type="text/javascript">
                    function cadastrar()
                    {
                        location.href = "view/cadastroprof.php";
                    }
                </script>

            </div>
        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
        crossorigin="anonymous"></script>
    </body>
</html>