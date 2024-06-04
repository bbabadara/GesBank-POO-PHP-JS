<?php
require_once"../src/core/Model.php";
class RecuModel extends Model{
    public function findAllWithTrasactionUsers()
    {
       
        $sql = "SELECT * FROM recu r, transrecu t, transaction tr,users u WHERE r.idr=t.idtr AND t.idtr=tr.idtr and u.idu=tr.idu";
       return $this->executeSelect($sql);
    }
}