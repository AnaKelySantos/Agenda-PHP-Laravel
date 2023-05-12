<?php

class glamur{

    private $pdo;
// local do banco - nome do banco - usuario - senha
    public function __construct($dbname,$localhost,$user,$senha)
    {
        $this->pdo = new PDO ("mysql:dbname=".$dbname.";host=".$localhost,$user,$senha);
    }

    public function encontrar(){
        $inform = array ();
        $cmd = $this->pdo->query("select * from mulher");
        $inform = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $inform;
    }

    public function encontrarh(){
        $inform = array ();
        $cmd = $this->pdo->query("select * from homem");
        $inform = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $inform;
    }

    public function casdastrarhomem($nome,$profissao,$email,$numero,){
        $cmd = $this->pdo->prepare("insert into homem (nome,profissao,email,numero) values (:n,:p,:e,:m )");
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":p",$profissao);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":m",$numero);
        $cmd->execute();
    }
    public function casdastrarmulher($nome,$profissao,$email,$numero){
        $cmd = $this->pdo->prepare("insert into mulher (nome,profissao,email,numero) values (:n,:p,:e,:m )");
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":p",$profissao);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":m",$numero);
        $cmd->execute();
    }
    public function excluirhomem($id){
        $cmd = $this->pdo->prepare("delete from homem where id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }
    public function excluirmulher($id){
        $cmd = $this->pdo->prepare("delete from mulher where id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }
    
    public function buscarDadosPessoah($id)
    {
    $inform = array();
    $cmd = $this->pdo->prepare("select * from homem where id = :id");
    $cmd->bindValue(":id",$id);
    $cmd->execute();
    $inform = $cmd -> fetch(PDO::FETCH_ASSOC);
    return $inform; // pedindo para array que vem de res retornar caso nao tenha nada res é array vazio
    }

    public function buscarDadosPessoa($id)
    {
    $inform = array();
    $cmd = $this->pdo->prepare("select * from mulher where id = :id");
    $cmd->bindValue(":id",$id);
    $cmd->execute();
    $inform = $cmd -> fetch(PDO::FETCH_ASSOC);
    return $inform; // pedindo para array que vem de res retornar caso nao tenha nada res é array vazio
    }

    public function atualizah($nome,$profissao,$email,$numero,$id){
        $cmd = $this->pdo->prepare("UPDATE `crudrosa`.`homem` SET `nome` = :n, `profissao` = :p, `email` = :e, `numero` = :m WHERE (`id` = :id)");
        
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":p",$profissao);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":m",$numero);
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }
    
    

    public function atualizam($nome,$profissao,$email,$numero,$id){
        $cmd = $this->pdo->prepare("UPDATE `crudrosa`.`mulher` SET `nome` = :n, `profissao` = :p, `email` = :e, `numero` = :m WHERE (`id` = :id)");
        
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":p",$profissao);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":m",$numero);
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }

}


?>