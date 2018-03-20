<?php
    $bdd = new PDO('mysql:host=localhost;dbname=agenda','root','');

    $pdoStat = $bdd->prepare('UPDATE contact SET lastName=:lastName, firstName=:firstName, phone=:phone,
     email=:email, description=:description WHERE id=:num LIMIT 1');

    $pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
    $pdoStat->bindValue(':lastName', $_POST['lastName'], PDO::PARAM_STR);
    $pdoStat->bindValue(':firstName', $_POST['firstName'], PDO::PARAM_STR);
    $pdoStat->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
    $pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $pdoStat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

    $execOk = $pdoStat->execute();

    //var_dump($execOk);

    if($execOk){
        $msg = 'Contact update';
    }else{
        $msg = 'echec';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <p><?= $msg ; ?></p>
</body>
</html>    