<?php

function todasFotos(){
    $resultado = selectSQL("SELECT * FROM fotografias");
    return $resultado;
}
function contarFotos(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM fotografias");
    return $resultado["total"];
}

function todosVideos(){
    $resultado = selectSQL("SELECT * FROM videos");
    return $resultado;
}
function contarVideos(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM videos");
    return $resultado["total"];
}

function todasVisitas(){
    $resultado = selectSQL("SELECT * FROM visitas_virtuais_360");
    return $resultado;
}
function contarVisitas(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM visitas_virtuais_360");
    return $resultado["total"];
}
?>