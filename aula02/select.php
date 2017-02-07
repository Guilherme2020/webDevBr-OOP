<?php

    include 'conecta.php';
        /*
        $select = $pdo->query('SELECT * FROM usuarios;');
     //   $dados  =  $select->fetchAll(PDO::FETCH_ASSOC);
        */
    #   $dados  =  $select->fetchAll(PDO::FETCH_ASSOC);
    ///Protegendo de sql Injection.


    $select = $pdo->prepare('SELECT * FROM usuarios WHERE id=:id;');
    $select->bindValue(":id",$_GET['id']);
    $select->execute();
    $dados = $select->fetchAll(PDO::FETCH_ASSOC);
?>

<pre>
    <?php print_r($dados); ?>
</pre>


