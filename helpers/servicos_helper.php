<?php

function todosServicos(){
    $resultado = selectSQL("SELECT * FROM servicos");
    return $resultado;
}

function servicoEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM servicos WHERE id='$id'");
    return $resultado;
}

?>