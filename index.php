<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <form method="POST" action="connection.php">
       <p>
        <label for="lastname">lastName</label>
        <input id="lastName" type="text" name ="lastName">
       </p>

       <p>
        <label for="firstName">firstName</label>
        <input id="firstName" type="text" name ="firstName">
       </p>

       <p>
        <label for="phone">Telephone</label>
        <input id="phone" type="tel" name ="phone">
       </p>

       <p>
        <label for="email">Email</label>
        <input id="email" type="text" name ="email">
       </p>

       <p>
        <label for="description" >Description</label></p>
        <textarea name="description" id="description"
            rows="10" cols="50">
            Vous pouvez écrire quelque
            chose ici.
        </textarea>
       

       <p><input type="submit" value="Enregistrer"></p>
    </form>
</body>
</html>