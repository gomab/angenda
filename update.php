<?php
    $bdd = new PDO('mysql:host=localhost;dbname=agenda','root','');

    $pdoStat = $bdd->prepare('SELECT * FROM contact WHERE id=:num');

    $pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

    $pdoStat->execute();

    $contact = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Agenda - Edit</h1>
    <form method="POST" action="edit.php">
       <input type="hidden" name ="numContact" value="<?= $contact['id']; ?>">
       <p>
        <label for="lastname">lastName</label>
        <input id="lastName" type="text" name ="lastName" value="<?= $contact['lastName']; ?>">
       </p>

       <p>
        <label for="firstName">firstName</label>
        <input id="firstName" type="text" name ="firstName" value="<?= $contact['firstName']; ?>">
       </p>

       <p>
        <label for="phone">Telephone</label>
        <input id="phone" type="tel" name ="phone" value="<?= $contact['phone']; ?>">
       </p>

       <p>
        <label for="email">Email</label>
        <input id="email" type="text" name ="email" value="<?= $contact['email']; ?>">
       </p>

       <p>
        <label for="description" >Description</label></p>
        <textarea name="description" id="description" value="<?= $contact['description']; ?>" rows="10" cols="50">
            <?= $contact['description']; ?>
        </textarea>
       

       <p><input type="submit" value="Edit"></p>
    </form>
</body>
</html>    