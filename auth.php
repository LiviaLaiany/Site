<?php
    function hasUser(): bool {
        session_start(); // Inicia a sessão (caso ainda não tenha sido iniciada)
        return isset($_SESSION['usuario']);
    }
    // function hasName(): bool{
    //     session_start();
    //     return isset($_SESSION['nome']);
    // }
?>