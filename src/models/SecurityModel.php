<?php
require_once"../src/core/Model.php";
class SecurityModel extends Model{
    
    public function findUserLogged(string $mail,string $pwd)
    {
       
        $sql = "select * from compte c, users u,typecompte t,agence a, demande d 
        where d.idd=c.idd and c.idtc=t.idtc and c.ida=a.ida and c.idu=u.idu and u.email like '$mail' and u.pwd like '$pwd'";
       return $this->executeSelect($sql);
    }
}