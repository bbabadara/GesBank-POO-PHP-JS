<?php
require_once"../src/core/Model.php";
 class DemandeModel extends Model{
    public function findAllWithClient()
    {
       
        $sql = "select * from demande d, users u,typecompte t where d.idu=u.idu and d.idtc=t.idtc ";
       return $this->executeSelect($sql);
    }
   

 }

