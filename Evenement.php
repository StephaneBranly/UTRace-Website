<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Evenement';
            $description_page='Découvrez sur cette page le détail de l\événement proposé !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <div class='content_section'>
                <h1 class="section_name">La Franklin'Oise</h1>
                <p>La première édition de cette course de karts appelée Franklin’Oise aura lieu normalement le dimanche 10 mai 2020, à la fin du PMDE. Le parcours est mis en place autour de Benjamin Franklin, c’est à dire dans les quatres rues qui entourent l’UTC : rue de l’Oise, rue Roger Couttolenc, rue du port à bateaux et rue du Chevreuil.<br/><br/>
                    La course rassemblera huit équipes de trois pilotes qui se relaieront et devront se départager au long de trois à six tours pour terminer premiers et remporter le trophée.</p>
            </div>
        </section>

        <section>
            <div class='content_section'>
                <h1 class="section_name">Le parcours</h1>
                <img src='./ressources/images/carte2.png' alt='plan circuit'/>
            </div>
        </section>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>