<?php
$hostname = "localhost";
$dbname = "portnot";
$username = "root";
$password = "usbw";

try {
    $pdo = new PDO('mysql:host=' .$hostname .';dbname=' .$dbname,
$username, $password);
    pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dados = array(
        'type' => 'success',
        'mensagem' => 'conexão efetuada com sucesso!'
    );
} catch (PDOException $e) {
    $dados = array(
        'type' => 'error',
        'mensagem' => 'Erro: ' .$e->getMessage()
    );
}
echo json_encode($dados);
?>