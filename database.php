<?php

    function connection() : SQLite3 {
        return new SQLite3('database.db');
    }

    $connection = connection();
    
    //cria as tabelas de usuario
    $connection -> exec(
        "CREATE TABLE IF NOT EXISTS usuarios(
            id INTEGER PRIMARY KEY,
            usuario TEXT ,
            senha TEXT) "
    );

    $connection->exec(
        "CREATE TABLE IF NOT EXISTS teste(
            id INTEGER PRIMARY KEY,
            nome TEXT,
            senha TEXT)"
    );
    $connection->exec(
        "CREATE TABLE IF NOT EXISTS tb_duvidas(
            id INTEGER PRIMARY KEY,
            duvida TEXT
        )"
    );
    $connection->exec(
        "CREATE TABLE IF NOT EXISTS tb_comentario(
            id INTEGER PRIMARY KEY,
            comentario TEXT
        )"
    );

    function find ($query, $connection){
        
        return $connection->query($query);
    }
    function save ($query){
        $db = connection();
        return $db->exec($query);
    }

    


?>