<?php 
    $pdo = new PDO('mysql:host=localhost; dbname=praticando;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $stmt = $pdo->query('SELECT * FROM comentarios');
    $comment = $stmt->fetchAll();
    echo json_encode($comment);
    // var_dump($comment);


?>