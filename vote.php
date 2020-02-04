<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Vote';
            $description_page='Notez les équipes !';
            include_once("./elements/meta.php");
            
        include_once("./admin/inc/sqlConnect.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        <h1>Votez pour votre equipe préferée !</h1>
        <?php 
        
        if(isset($_POST["submit"])){
            if(isset($_POST["mail"])&&$_POST["mail"]!=""&&
               isset($_POST["name"])&&$_POST["name"]!=""){
                $name = addslashes($_POST["name"]);
                $mail = addslashes($_POST["mail"]);
                $pass = uniqid();
                $query1 = mysqli_query($connect,"INSERT INTO voter values (0,'$name','$mail','$pass',false)");
                if(mysqli_errno($connect)==1062){
                    echo "<p style='color:red;'> Erreur : vous avez deja noté les équipes, vous ne pouvez pas modifier vos note</p>";
                }else{
                    $id=mysqli_insert_id($connect);
                    //mail($mail,"Vote UTRace","Bonjour $name,\n Vous avez notez les teams de UTRace, veuillez cliquer sur ce <a href='https://assos.utc.fr/utrace/confirm.php?id=$id&pass=$pass'>Lien</a> pour confirmer votre notation.\nSi vous n'avez pas voté, veuillez ignorer ce mail.\n\nCordialement,\nl'équipe UTRace.");
                    echo "Bonjour $name,\n Vous avez notez les teams de UTRace, veuillez cliquer sur ce <a href='https://assos.utc.fr/utrace/confirm.php?id=$id&pass=$pass'>Lien</a> pour confirmer votre notation.\nSi vous n'avez pas voté, veuillez ignorer ce mail.\n\nCordialement,\nl'équipe UTRace.";
                    $query2 = mysqli_query($connect,"SELECT * FROM team");
                    
                    while($row2 = mysqli_fetch_array($query2)){
                      
                        if(isset($_POST["rating$row2[0]"])){
             
                            $note = (float) $_POST["rating$row2[0]"];
                            $query3 = mysqli_query($connect,"INSERT INTO vote values (0,$id,$row2[0],$note)"); 
                        }else{
                            $query3 = mysqli_query($connect,"INSERT INTO vote values (0,$id,$row2[0],0)"); 
                    }
                }
            }
                
        }else{
            echo "<p> Notez sur 5 l'apparence de chaque equipes ! Attention vous ne pourrez pas modifier ces note !</p>";
        }
    }
        ?>
        <form method="post">
            <input required type="text" name="name" placeholder="Votre nom">
            <input required type="email" name="mail" placeholder="Votre adresse mail">
        <?php 
        include_once("./elements/header.php"); 
        $query = mysqli_query($connect,"SELECT * FROM team");
        while($row = mysqli_fetch_array($query)){
         $id=$row[0];   
            echo"
        <div class='equipe p40p'>
            <h1 class='equipe_name'>$row[1]</h1>
            <img class='equipe_img' src='img/team/team$row[0].png' alt='Image de l equipe $row[1]'/>
            <p>$row[2]</p>
            <div class='spe'>
                <div class='note'>
                <h3>Note :</h3>
                <fieldset class='rating'>
                <input type='radio' id='star5_$id' name='rating$id' value='5' /><label class = 'full' for='star5_$id' ></label>
                <input type='radio' id='star4half_$id' name='rating$id' value='4.5' /><label class='half' for='star4half_$id' ></label>
                <input type='radio' id='star4_$id' name='rating$id' value='4' /><label class = 'full' for='star4_$id' ></label>
                <input type='radio' id='star3half_$id' name='rating$id' value='3.5' /><label class='half' for='star3half_$id' ></label>
                <input type='radio' id='star3_$id' name='rating$id' value='3' /><label class = 'full' for='star3_$id' ></label>
                <input type='radio' id='star2half_$id' name='rating$id' value='2.5' /><label class='half' for='star2half_$id' ></label>
                <input type='radio' id='star2_$id' name='rating$id' value='2' /><label class = 'full' for='star2_$id' ></label>
                <input type='radio' id='star1half_$id' name='rating$id' value='1.5' /><label class='half' for='star1half_$id' ></label>
                <input type='radio' id='star1_$id' name='rating$id' value='1' /><label class = 'full' for='star1_$id' ></label>
                <input type='radio' id='starhalf_$id' name='rating$id' value='0.5' /><label class='half' for='starhalf_$id' ></label>
            </fieldset>
                </div>
            </div>
            <div class='pilotes'><i class='icone icon-users-2 icone_margin'>&#xe8be;</i>Les pilotes :</div>

            <table class='equipage'>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='img/team/pilot1_$row[0].png' alt='Image du piote $row[3]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[3]</h1>
                                <p>$row[4]<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='img/team/pilot2_$row[0].png' alt='Image du piote $row[5]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[5]</h1>
                                <p>$row[6]<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='img/team/pilot3_$row[0].png' alt='Image du piote $row[7]'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>$row[7]</h1>
                                <p>$row[8]<p>
                            </td>
                        </tr>
                    </table>
                </tr>
            </table>
        </div>";
        }
        
        ?>
        <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

