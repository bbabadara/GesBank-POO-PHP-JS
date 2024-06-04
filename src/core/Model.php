<?php
abstract class  Model
{

    public function findAll()
    {
        $calledClass=get_called_class();
        $table=str_replace("Model","",$calledClass);
        $sql = "select * from $table";
       return $this->executeSelect($sql);
    }
    public function findById(int $id)
    {
        $calledClass=get_called_class();
        $table=str_replace("Model","",$calledClass);
        $sql = "select * from $table where id=$id";
      return $this->executeSelect($sql,true);
    }

    protected function executeSelect(string $sql,bool $single=false):array{
        $calledClass=get_called_class();
        $result = $this->openConnexion()->query($sql);
        if(!$single){
            return $result->fetchAll(PDO::FETCH_CLASS,$calledClass);
            }
        return $result->fetch(PDO::FETCH_CLASS,$calledClass);
    }
    
    protected function openConnexion()
    {
        return new PDO(
            'mysql:host=localhost;dbname=gesbank;charset=utf8',
            'gesbank',
            'gesbankabc123'
        );
    }
  

}
 