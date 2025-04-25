<?php

function introHome(){
    $resultado = selectSQLUnico("SELECT * FROM home WHERE categoria='intro_home'");
    return $resultado;
}

function introServicos(){
    $resultado = selectSQLUnico("SELECT * FROM home WHERE categoria='intro_servicos'");
    return $resultado;
}

function introProducao(){
    $resultado = selectSQLUnico("SELECT * FROM home WHERE categoria='intro_producao'");
    return $resultado;
}
function todosServicosVisitas(){
    $resultado = selectSQL("SELECT * FROM servicos WHERE categoria='visitas'");
    return $resultado;
}

function todosServicosProducao(){
    $resultado = selectSQL("SELECT * FROM servicos WHERE categoria='producao'");
    return $resultado;
}

?>