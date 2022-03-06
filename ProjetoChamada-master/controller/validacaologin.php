<?php
session_start();
require_once "../model/consultas.class.php";
$consulta = new Consultas();

//var_dump($felipe->validar($_POST["usuario"], $_POST["senha"]));

//exit;

if ($consulta->validacao($_POST["usuario"], $_POST["senha"]) === 1) {
	$_SESSION["logado"] = true;
	header("Location:../view/painel.php");
} else {
	session_destroy;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou Senha incorreta!</div>";
        header("Location: ../index.php?erro=1");
}

//echo $_SESSION["logado"];
?>