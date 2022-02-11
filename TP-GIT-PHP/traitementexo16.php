<style>
        .hidden{
            visibility: hidden;
        }
</style>

<?php

    

    if($_POST['number'] == $_POST['numberchoose']){
        echo "Vous avez trouvé le bon nombre : " . $_POST['numberchoose'];
        echo "<style>.form{
            visibility: hidden;
        }</style>";
        echo "<br><a href='http://localhost/TP1/exo16.php'>Retour</a>";
    }elseif($_POST['number'] < $_POST['numberchoose']){
        echo "Votre nombre est trop petit";
    }elseif($_POST['number'] > $_POST['numberchoose']){
        echo "Votre nombre est trop grand";
    };
?>

<form action="traitementexo16.php" method="POST" class="form">
<input type="text" name="number">
<input type="text" name="numberchoose" value="<?php echo $_POST['numberchoose']?>" class="hidden">
<br>
<button type="submit">Submit</button>
</form>


