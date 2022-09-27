<?php 
if (isset($_POST["age"])) {
    $age = $_POST["age"];
    if ($age >= 18) {
        echo("Il peut conduire");
    }
    elseif ($age >= 16) {
        echo("Il peut passer uniquement la conduite accompagner");
    }
    else {
        echo("Pas de conduite en vue");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="name">Enter your age: </label>
    <input type="number" name="age" id="name" required>
    <input type="submit" value="Valider">
    </form>

</body>
</html>
