<?php


    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webDev-OOP','root','root');

    $select = $pdo->query('SELECT * FROM usuarios WHERE id=0;');
 //   $dados  =  $select->fetchAll(PDO::FETCH_ASSOC);

    $dados  =  $select->fetchAll(PDO::FETCH_ASSOC);

?>

<pre>
    <?php print_r($dados); ?>
</pre>


