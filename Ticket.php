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
        <section>
            <div class='content_section'>
                <h1 class="section_name">Ticket tiercé généré</h1> 
                <p>Ton ticket a bien été généré, n'oublie pas de le valider au stand en échange d'1€ symbolique, retiens le numéro # de ton ticket tiercé !</p><div id='ticket_section'>
        <table cellspacing="0" cellpadding="0" id='ticket'>
            <tr><td class='left' id='ticket_number'>
                Ticket #00026
            </td>
            <td class='right' id='name'>Stéphane BRANLY
            </td></tr>
            <tr><td class='left'>
                <p>Ticket à valider<br/>au stand</p>
            </td><td class='right'>
                <p id='tel'>Téléphone : 07-62-62-62-62</p>
                <p id='email'>Mail : email@mail.com</p>
                <p id='classement'>
                    1er - Les barjos (equipe 1)<br/>
                    2eme - Les bgs (equipe 2)<br/>
                    3eme - Les tarés (equipe 3)
                </p>
            </td></tr>
        </table>
        </div>
            </div>
        </section>
        
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>