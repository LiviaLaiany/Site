<?php
include __DIR__ . '/router.php';
include __DIR__ . '/database.php';
include __DIR__ . '/auth.php';
include __DIR__ . '/model/user.php';
include __DIR__ . '/model/teste.php';
include __DIR__ . '/model/duvida.php';
include __DIR__ . '/model/comentario.php';
session_start();
 
$connection = connection();

$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($rota, $rotas)) {
    include __DIR__ . $rotas[$rota];
} else {
    // echo "<html> <script> alert('Página não encontrada') </script> </html>";
    echo "<h1>Página não encontrada. Redirecionando em 3 segundos!</h1>";
    header('Refresh: 3; url= /');
}