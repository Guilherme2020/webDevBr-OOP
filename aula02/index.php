<?php



    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webDev-OOP','root','root');




    var_dump($pdo->exec('INSERT INTO usuarios (nome,sobrenome,email,senha)VALUES ("Guilherme",
            "Rodrigues","gui@gmail.com","@AAAkskaskasaa");'));


