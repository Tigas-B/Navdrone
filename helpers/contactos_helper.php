<?php

function contactos(){
    $resultado = selectSQLUnico("SELECT * FROM contactos");
    return $resultado;
}

?>