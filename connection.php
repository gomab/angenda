<?php
  /** Database connection **/
 // $bdd = new PDO('mysql:host=localhost;dbname=agenda','root','');

    $dsn = 'mysql:host=localhost; dbname=agenda';
    $user = 'root';
    $pass = '';

    try{
        $bdd = new PDO($dsn, $user, $pass);
    }catch(PDOException $e){
        echo "Connection error!" . $e->getMessage();
    }

  /** Prepare query **/
  $pdoStat = $bdd->prepare('INSERT INTO contact VALUES (NULL, :lastName, :firstName, :phone, :email, :description)');

  /** Bind marker to a value **/
  $pdoStat->bindValue(':lastName', $_POST['lastName'], PDO::PARAM_STR);
  $pdoStat->bindValue(':firstName', $_POST['firstName'], PDO::PARAM_STR);
  $pdoStat->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
  $pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $pdoStat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
  
/** EXecute query **/
$execOk = $pdoStat->execute();

if($execOk){
    $msg = 'YES';
}else{
    $msg = 'NO';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $msg ; ?>
</body>
</html>