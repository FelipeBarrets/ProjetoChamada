<?php
require_once "pdo.class.php";

class Consultas
{
    public function listarNomes(){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM aluno;";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function validacao($usuario, $senha){
		$conMySQL = DB::conexao();

        $stringSQL = "SELECT * FROM professor where senhaprof = '$senha' and emailprof = '$usuario';";     

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
		
		//var_dump(count($sql->fetchAll())) . "<br>";
		//exit;
		return count($sql->fetchAll());	
	}


    public function listaPessoasWeb($ativos = true){
        $conMySQL = DB::conexao();

        $stringSQL = "SELECT * ";
        $stringSQL .= "FROM  ";
        $stringSQL .= "  aluno ";
        $stringSQL .= " WHERE 1 = 1 ";

        if ($ativos) {
            $stringSQL .= " and  ativo = 'S' ";
        }

        $stringSQL .= "ORDER BY NOME ";

        //echo $stringSQL;

        $sql = $conMySQL->prepare($stringSQL);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    

    public function inserir($nome, $senha, $email){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  professor
                          VALUES ('', :nomeprof, :emailprof, md5(:senhaprof));";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":nomeprof", $nome);
            $sql->bindValue(":emailprof", $email);
            $sql->bindValue(":senhaprof", $senha);
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }
    
    public function inseriral($nome, $numero, $email){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = "INSERT INTO  aluno
                          VALUES ('', :nomeal,:emailal, :numeroal);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":nomeal", $nome);
            $sql->bindValue(":numeroal", $numero);
            $sql->bindValue(":emailal", $email);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }

    public function atualizar(){
        if ($this) {
            $conMySQL = DB::conexao();

            $stringSQL = " UPDATE pessoa SET
                            nome = :nome,
                            email = :email,
                            senha = :senha
                            WHERE codigo = :codigo;";

            $sql = $conMySQL->prepare($stringSQL);
            $sql->bindValue("codigo", $this->getCodigo());
            $sql->bindValue("nome", $this->getNome());
            $sql->bindValue("email", $this->getEmail());
            $sql->bindValue("senha", $this->getSenha());
            //echo $this->getBairro();
            //echo $stringSQL;
            //exit;

            return $sql->execute();
            // $sql->debugDumpParams();

            // exit;

        } else {
            return false;
        }
    }
    public function inserirChamada($nome, $frequencia, $estudando, $participando, $atuando){
        if ($this) {
            $conMySQL = DB::conexao();
            
            $stringSQL = "INSERT INTO  chamadas
                          VALUES ('', :nomeal, :frequencia, :estudando, :participando, :atuando);";
            $sql = $conMySQL->prepare($stringSQL);
            //$sql->bindValue(":codigo", $this->getCodigo());
            $sql->bindValue(":nomeal", $nome);
            $sql->bindValue(":frequencia", $frequencia);
            $sql->bindValue(":estudando", $estudando);
            $sql->bindValue(":participando", $participando);
            $sql->bindValue(":atuando", $atuando);
            
            
            //echo $stringSQL;
            //exit;

            return $sql->execute();
        } else {
            return false;
        }
    }

    public function criarChamada($dataChamada){
        if ($this) {
            $conMySQL = DB::conexao();

            
            $sql = "CREATE TABLE `escola`.`$dataChamada` (
  `idchamadas` INT NOT NULL AUTO_INCREMENT,
  `nomeal` VARCHAR(45) NULL,
  `frequencia` VARCHAR(45) NULL,
  `estudando` VARCHAR(45) NULL,
  `participando` VARCHAR(45) NULL,
  `atuando` VARCHAR(45) NULL,
  PRIMARY KEY (`idchamadas`));";
            
            
            
            $conMySQL->exec($sql);

            //echo $stringSQL;
            //exit;

            //return $sql->execute();
        } else {
            return false;
        }
        
    }
}