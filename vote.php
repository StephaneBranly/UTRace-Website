<?php
    include_once("./lib/gestion_session.php");
    include_once("./lib/bdd_config.php");
?>

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
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        <h1>Votez pour votre equipe préferée !</h1>
        <p> Notez sur 5 l'apparence de chaque equipes !</p>
        <form method="post">
            <input required type="text" name="name" placeholder="Votre nom">
            <input required type="mail" name="mail" placeholder="Votre adresse mail">
        <?php 
        
        for ($i = 1; $i <= 4; $i++) {
            
        echo "<div class='equipe p40p'>
            <h1 class='equipe_name'>Nom_equipe</h1>
            <img class='equipe_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image de l equipe NOM_EQUIPE'/>
            <p>Description equipe</p>
            <div class='spe'>
                <div class='note'>
                <h3>Note :</h3>
                <fieldset class='rating'>
                <input type='radio' id='star5' name='rating' value='5' /><label class = 'full' for='star5' ></label>
                <input type='radio' id='star4half' name='rating' value='4.5' /><label class='half' ></label>
                <input type='radio' id='star4' name='rating' value='4' /><label class = 'full' for='star4' ></label>
                <input type='radio' id='star3half' name='rating' value='3.5' /><label class='half' for='star3half' ></label>
                <input type='radio' id='star3' name='rating' value='3' /><label class = 'full' for='star3' ></label>
                <input type='radio' id='star2half' name='rating' value='2.5' /><label class='half' for='star2half' ></label>
                <input type='radio' id='star2' name='rating' value='2' /><label class = 'full' for='star2' ></label>
                <input type='radio' id='star1half' name='rating' value='1.5' /><label class='half' ></label>
                <input type='radio' id='star1' name='rating' value='1' /><label class = 'full' for='star1' ></label>
                <input type='radio' id='starhalf' name='rating' value='0.5' /><label class='half' for='starhalf' ></label>
            </fieldset>
                </div>
            </div>
            <div class='pilotes'><i class='icone icon-users-2 icone_margin'>&#xe8be;</i>Les pilotes :</div>

            <table class='equipage'>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr class='pilote'>
                    <table class='badge'>
                        <tr>
                            <td class='left'>  
                                <div class='image-cropper'><img class='pilote_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/></div>
                            </td>
                            <td class='right'>
                                <img class='flag' src='./ressources/images/flags-normal/fr.png' alt='nationalite pilote'/><h1 class='pilote_name'>Nom_pilote</h1>
                                <p>Description pilote, voici par exemple une description assez longue où je pare de ma vie pour rien dire en fin de compte...<p>
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

