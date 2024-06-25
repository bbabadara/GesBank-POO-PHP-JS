<?php
require_once"../src/core/Model.php";
class SecurityModel extends Model{
    
    public function findUserLogged(string $mail,string $pwd)
    {
       
        $sql = "select * from users u, profil p where p.idp=u.idp and u.email like '$mail' and u.pwd like '$pwd'";
       return $this->executeSelect($sql,true);
    }
}