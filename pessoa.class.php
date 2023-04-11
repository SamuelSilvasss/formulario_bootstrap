<?php
//Classe com o nome Pessoa
class Pessoa{
    //Objetos com visibilidade privada
    private $nome;
    private $telefone;
    private $observacao;
    private $origem;
    private $datacontato;
    
    
    //Método de captura do valor do objeto
    public function getNome(){
        return $this->nome;
    }
    
    //Método de alteração de valor do objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    //Método de captura do valor do objeto
    public function getTelefone(){
        return $this->telefone;
    }
    //Método de alteração de valor do objeto
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    //Método de captura do valor do objeto
    public function getOrigem(){
        return $this->origem;
    }
     //Método de alteração de valor do objeto
    public function setOrigem($origem){
        $this->origem = $origem;
    }
     //Método de captura de valor do objeto
    public function getDataContato(){
        return $this->datacontato;
    }
     //Método de alteração de valor do objeto
    public function setDataContato($dataContato){
        $this->datacontato = $dataContato;
    }
     //Método de captura de valor do objeto
    public function getObservacao(){
        return $this->observacao;
    }
     //Método de alteração de valor do objeto
    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }
}

?>