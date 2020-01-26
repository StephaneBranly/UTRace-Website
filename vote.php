<?php
include("inc/header.php");
?>
<form action="vote.php" method="post">

    <label for="choice1">Choix 1</label>
    <input type="radio" name="choice" id="choice1" value="1" checked>
    <label for="choice2">Choix 2</label>
    <input type="radio" name="choice" id="choice2" value="2">
    <label for="choice3">Choix 3</label>
    <input type="radio" name="choice" id="choice3" value="3">
    <label for="choice4">Choix 4</label>
    <input type="radio" name="choice" id="choice4" value="4">
    <input type="email" name="email" id="email">
    <input type="submit" name="submit" value="Envoyer">

</form>
<?php 

    if(isset($_POST["submit"])){
        if(isset($_POST["choice"])){
            if(isset($_POST["email"])&&$_POST["email"]!=""){
                $email = addslashes($_POST["email"]);
                $choice = addslashes($_POST["choice"]);
                mail($email,"Vote","Vous avez votez pour".$choice);

            }else{
                echo "Erreur : Email invalide.";
            }
        }else{
            echo "Erreur : Aucun choix n'a été renseigné.";
        }
    }


?>
</body>
</html>