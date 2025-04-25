<?php 

session_start();
date_default_timezone_set("Europe/Lisbon");

function login($login, $senha){
    $encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login= '$login' AND senha='$senha'");
    if(!empty($encontrado)){
        $_SESSION["usuario"] = $encontrado;
        return true;
    }
    else{return false;}
}

function verificarLogin(){return !empty($_SESSION["usuario"]);}

function logout(){session_destroy();}

?>