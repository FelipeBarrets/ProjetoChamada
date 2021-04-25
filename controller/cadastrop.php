<?php

session_start();
require_once "../model/consultas.class.php";
$cad = new Consultas();
$nome= $_POST["nomep"];
$email= $_POST["emailp"];
$senha= $_POST["senhap"];



if ($nome== "") {
$_SESSION['deu certo'] = "<div class='alert alert-danger'>insira seu nome</div>";     
header("Location:../view/cadastroprof.php?erro=1");
    
} else {
    
    if ($email== "") {
$_SESSION['deu certo'] = "<div class='alert alert-danger'>insira seu Email</div>";
header("Location:../view/cadastroprof.php?erro=1");
    
} else {
    
    if ($senha== "") {
 $_SESSION['deu certo'] = "<div class='alert alert-danger'>insira sua Senha</div>";       
header("Location:../view/cadastroprof.php?erro=1");

} else {
    
    $cad->inserir($nome, $senha, $email);
    header("Location:../index.php");

        
    
   
}
}
}
?>
