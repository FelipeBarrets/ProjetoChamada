  <?php require_once "../model/consultas.class.php";

        $consulta = new Consultas();
        $nomes = $consulta->listarNomes();
        $dataChamada= date("Y/m/d", time());
        
        //$frequencia = $_POST["dataChamada"];
        
        //$consulta->criarChamada($dataChamada);
         $i= 0;
        foreach ($nomes as $item) {
        
         $frequencia = (isset($_POST["presença$i"]))?"SIM":"NÃO";
         $estudando = (isset($_POST["biblia$i"]))?"SIM":"NÃO";
         $participando = (isset($_POST["pg$i"]))?"SIM":"NÃO";
         $atuando = (isset($_POST["missao$i"]))?"SIM":"NÃO";
         //unset ($_POST["presença"]);
         //unset ($_POST["biblia"]);
         //unset ($_POST["pg"]);
         //unset ($_POST["missao"]);
         ++$i;
         $consulta->inserirChamada( $item["nomeal"], $frequencia, $estudando, $participando, $atuando, $dataChamada);
                
        }
        header("Location:../view/chamada.php");
        
        
        ?>