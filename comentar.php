<?php
    // var_dump($_POST);
    
    $dados = json_decode($_POST['dados']);
    $pdo = new PDO('mysql:host=localhost; dbname=praticando;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
    $stmt = $pdo->prepare('INSERT INTO comentarios (nome, comment) VALUES (:nome, :comment)');
    $stmt->bindValue(':nome', $dados->nome);
    $stmt->bindValue(':comment', $dados->comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo true;
    } else {
        echo false;
    }
    


?>