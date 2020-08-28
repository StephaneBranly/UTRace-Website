<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Ticket';
            $description_page='Affichage ici du ticket de tiercé généré';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>

        <?php 
            if(isset($_POST["submit"])){
                if(isset($_POST["mail"])&&$_POST["mail"]!=""&&
                isset($_POST["name"])&&$_POST["name"]!=""&&
                isset($_POST["surname"])&&$_POST["surname"]!=""&&
                isset($_POST["phone"])&&$_POST["phone"]!=""&&
                isset($_POST["first"])&&
                isset($_POST["second"])&&
                isset($_POST["third"])){
                    $name = addslashes($_POST["name"]);
                    $surname = addslashes($_POST["surname"]);
                    $mail = addslashes($_POST["mail"]);
                    $phone = addslashes($_POST["phone"]);
                    $first = addslashes($_POST["first"]);
                    $second = addslashes($_POST["second"]);
                    $third = addslashes($_POST["third"]);
                    echo "<section>
                            <div class='content_section'>
                                <h1 class='section_name'>Ticket tiercé généré</h1> 
                                <p>Ton ticket a bien été généré, n'oublie pas de le valider au stand en échange d'1€ symbolique, retiens le numéro # de ton ticket tiercé !</p>
                                <div id='ticket_section'>
                                    <table cellspacing='0' cellpadding='0' id='ticket'>
                                        <tr>
                                            <td class='left' id='ticket_number'>
                                                Ticket #00026
                                            </td>
                                            <td class='right' id='name'>
                                            $name $surname
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='left'>
                                                <p>Ticket à valider<br/>au stand</p>
                                            </td>
                                            <td class='right'>
                                                <p id='tel'>Téléphone : $phone</p>
                                                <p id='email'>Mail : $mail</p>
                                                <p id='classement'>
                                                    1er - Les barjos (equipe $first)<br/>
                                                    2eme - Les bgs (equipe $second)<br/>
                                                    3eme - Les tarés (equipe $third)
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </section>";
                }
            }
        ?>
       
        
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>