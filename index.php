<?php 
if (isset($_POST["age"])) {
    $age = $_POST["age"];
    if ($age >= 18) {
        echo("Vous pouvez conduire");
    }
    elseif ($age >= 16) {
        echo("Vous pouvez passer uniquement la conduite accompagner");
    }
    else {
        echo("Pas de conduite en vue");
    }
    $tableau = [
        "Robert" => 25,
        "Jean" => 45,
        "Marion" => 26,
    ];
    $message_Ensemble=[];
    foreach ($tableau as $key => $age_Tableau) {
        if ($age_Tableau>$age) {
            array_push($message_Ensemble,["Vous etes plus jeune que" ." ".$key]);
        }
        else {
            array_push($message_Ensemble,["Vous etes plus age que" ." ".$key]);
        }
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
    <?php if (isset($_POST["age"])): ?>
        <?php foreach ($message_Ensemble as $message): ?>
            <p><?php echo implode("",$message); ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
