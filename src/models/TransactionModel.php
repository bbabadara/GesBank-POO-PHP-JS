<?php
require_once"../src/core/Model.php";
class TransactionModel extends Model{
    
    public function findAllWithClient()
    {
       
        $sql = "select * from transaction t, compte c, users u where t.idu=u.idu and c.idc=t.idc and c.idu=u.idu ";
       return $this->executeSelect($sql);
    }
}