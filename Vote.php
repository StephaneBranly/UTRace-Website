<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
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
        <section>
            <div class='content_section'>
        <h1 class="section_name">Votez pour votre equipe préferée !</h1>
        <?php 
        
        if(isset($_POST["submit"])){
            if(isset($_POST["mail"])&&$_POST["mail"]!=""&&
               isset($_POST["name"])&&$_POST["name"]!=""){
                $name = addslashes($_POST["name"]);
                $mail = addslashes($_POST["mail"]);
                $pass = uniqid();
                $query1 = mysqli_query($connect,"INSERT INTO voter values (0,'$name','$mail','$pass',false)");
                if(mysqli_errno($connect)==1062){
                    echo "<p style='color:red;'> Erreur : vous avez deja noté les équipes, vous ne pouvez pas modifier vos notes...</p>";
                }else{
                    $id=mysqli_insert_id($connect);
                    mail($mail,"Vote UTRace","Bonjour $name,\n Vous avez noté les teams de UTRace, veuillez cliquer sur ce <a href='https://assos.utc.fr/utrace/confirm.php?id=$id&pass=$pass'>Lien</a> pour confirmer votre notation.\nSi vous n'avez pas voté, veuillez ignorer ce mail.\n\nCordialement,\nl'équipe UTRace.");
                    echo "<p>Un mail vous a été envoyé, merci de confirmer votre vote via ce dernier !</p>";
                    //echo "Bonjour $name,\n Vous avez noté les teams de UTRace, veuillez cliquer sur ce <a href='https://assos.utc.fr/utrace/confirm.php?id=$id&pass=$pass'>Lien</a> pour confirmer votre notation.\nSi vous n'avez pas voté, veuillez ignorer ce mail.\n\nCordialement,\nl'équipe UTRace.";
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
            echo "<p> Notez sur 5 l'apparence de chaque equipe ! Attention vous ne pourrez pas modifier ces note !</p>";
        }
    }else{
        echo "<p> Notez sur 5 l'apparence de chaque equipe ! Attention vous ne pourrez pas modifier ces note !</p>";
    }
        ?></div></section>
        <form method="post">
            
        <?php 
        include_once("./elements/header.php"); 
        $query = mysqli_query($connect,"SELECT * FROM team");
        while($row = mysqli_fetch_array($query)){
         $id=$row[0];   
            echo"
        <div class='equipe p40p'>
            <h1 class='equipe_name'>$row[1]</h1>
            <img class='equipe_img' src='ressources/team/team$row[0].png' alt='Image de l equipe $row[1]'/>
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
        </div>";
        }
        
        ?>
        <section>
            <div class='content_section'>
                <input required type="text" name="name" placeholder="Votre nom"><br/>
                <input required type="email" name="mail" placeholder="Votre adresse mail"><br/>
                <button type="submit" name="submit">Envoyer</button>
            </div>
        </section>
        </form>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

