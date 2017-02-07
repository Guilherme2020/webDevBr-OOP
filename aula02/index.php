<?php


    include 'conecta.php';




    var_dump($pdo->exec('INSERT INTO usuarios (nome,sobrenome,email,senha)VALUES ("Guilherme",
            "Rodrigues","gui@gmail.com","@AAAkskaskasaa");'));


