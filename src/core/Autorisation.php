<?php
class Autorisation {
    public static function isConnect():bool
    {
        return Session::keyExist("user");
    }
    public static function hasRole(string $roleName):bool
    {
        return self::getRole()===$roleName;
    }
    public static function getRole(string $key="libp"):string
    {
        return Session::get("user")[$key];
    }


}