<?php
class Validator{
    public static $errors=[];
    public static function validate():bool{
        return count(self::$errors)==0;
    }
    public static function isEmpty(string $nameField,string $msg="Champ obligatoire"):bool{
        if(empty($_POST[$nameField])){
            self::$errors[$nameField]=$msg;
            return true;
            }
            return false;
    }
    public static function isEmail(string $inputField):bool{
        if(!filter_var($_POST[$inputField],FILTER_VALIDATE_EMAIL)){
            self::$errors[$inputField]="Adresse email invalide";
            return true;
            }
            return false;
    }


}