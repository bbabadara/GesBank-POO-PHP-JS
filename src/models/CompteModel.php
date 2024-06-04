<?php
require_once"../src/core/Model.php";
class CompteModel extends Model {
    public function findAllWithClient()
    {
       
        $sql = "select * from compte c, users u,typecompte t,agence a, demande d where d.idd=c.idd and c.idtc=t.idtc and c.ida=a.ida and c.idu=u.idu ";
       return $this->executeSelect($sql);
    }
  
}