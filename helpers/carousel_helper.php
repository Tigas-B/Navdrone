<?php

function todosCarousel(){
    $resultado = selectSQL("SELECT * FROM carousel");
    return $resultado;
}

function contarCarousel(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM carousel");
    return $resultado["total"];
}

?>