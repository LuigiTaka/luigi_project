<?php

/**
 * Esta função serve para cadastrar qualquer tipo de entidade
 *
 *
 * @param string $tipo
 * @param array $registro
 */
function addRegistro(string $tipo, array $registro){

    $database_dir = __DIR__."/database";

    if(!is_dir($database_dir)){
        mkdir($database_dir);
    }

    $database_file = $database_dir."/$tipo.json";

    $registros = [];

    if(file_exists($database_file)){
        $registros = json_decode(file_get_contents($database_file),true);
    }

    $registro['id'] = count($registros)+1;

    $registros[] = $registro;

}