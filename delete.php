<?php
    $bdd = new PDO('mysql:host=localhost;dbname=agenda','root','');

    $pdoStat = $bdd->prepare('DELETE FROM contact WHERE id=:num LIMIT 1');

    $pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

    $execOk = $pdoStat->execute();

    if($execOk){
        $msg = 'Contact delete';
    }else{
        $msg = 'echec contact delete';
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Delete</title>
    </head>
    <body>
        <?= $msg; ?>
    </body>
    </html>