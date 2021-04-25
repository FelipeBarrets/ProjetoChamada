<?php
session_start();
require_once "../model/consultas.class.php";
$felipe = new Consultas();
$query = string("SELECT* FROM aluno");
// executa a query
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['nomeal']?> / <?=$linha['numeroal']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }




//var_dump($felipe->validar($_POST["usuario"], $_POST["senha"]));

//exit;

/*if (1==1) {
	$_SESSION["logado"] = true;
        $felipe->listaPessoasWeb();
        echo 'deu certo';
	
}

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

