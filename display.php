<?php
    $bdd = new PDO('mysql:host=localhost;dbname=agenda','root','');

    $pdoStat = $bdd->prepare('SELECT * FROM contact ORDER BY lastName');
    
    $pdoStat->execute();

    $contacts = $pdoStat->fetchAll();

    //var_dump($contacts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>
    <h1>Contact</h1>
   
    <ul>
        <?php foreach($contacts as $contact): ?>
            <li><?= $contact['lastName']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>