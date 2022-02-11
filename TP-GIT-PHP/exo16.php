<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16</title>
</head>
<body>

<style>
    .hidden {
        visibility: hidden;
    }
</style>

<?php

   $num = rand(0, 1000);
?>

<form action="traitementexo16.php" method="POST">
    <input type="text" name="number">
    <input type="text" name="numberchoose" value="<?php echo $num?>" class="hidden">
    <br>
    <button type="submit">Submit</button>
</form>

    
</body>
</html>

