<?php

session_start();
require_once "../model/consultas.class.php";
$cad = new Consultas();
$nome= $_POST["nomea"];
$numero= $_POST["numeroa"];
$email= $_POST["emaila"];




if ($nome== "") {
$_SESSION['deu certo'] = "<div class='alert alert-danger'>insira seu nome</div>";     
header("Location:../view/cadastroaluno.php?erro=1");
    
} else {
    
    if ($numero== "") {
$_SESSION['deu certo'] = "<div class='alert alert-danger'>insira seu numero</div>";
header("Location:../view/cadastroaluno.php?erro=1");
    
} else {
    
    if ($email== "") {
 $_SESSION['deu certo'] = "<div class='alert alert-danger'>insira seu email</div>";       
header("Location:../view/cadastroaluno.php?erro=1");

} else {
    
    $cad->inseriral($nome, $numero, $email);
    header("Location:../view/cadastroaluno.php");

        
    
   
}
}
}
?>
