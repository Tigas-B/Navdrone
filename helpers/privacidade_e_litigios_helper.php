<?php

function todasPerguntas(){
    $resultado = selectSQL("SELECT * FROM politica");
    return $resultado;
}

function contarPerguntas(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM politica");
    return $resultado["total"];
}

?>