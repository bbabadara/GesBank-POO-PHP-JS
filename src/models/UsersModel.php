<?php
require_once"../src/core/Model.php";
 class UsersModel extends Model{


    public function findAllUsersByProfil(string $profil)
    {
       
        $sql = "select * from users u,profil p where p.idp=u.idp and libp like '$profil'";
       return $this->executeSelect($sql);
    }
 }