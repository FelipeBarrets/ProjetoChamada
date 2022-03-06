  <?php require_once "../model/consultas.class.php";

        $consulta = new Consultas();
        $dataChamada = $_POST["dataChamada"];
        $chamada = $consulta->buscaChamada($dataChamada);        
        
        print_r ($chamada);
        
         
                
        
        //header("Location:../view/chamada.php");
        
        
        ?>