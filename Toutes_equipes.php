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
            $nom_page='Toutes les equipes';
            $description_page='Voyez sur cette page tous les équipages pour l\'événement !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php 
        
        for ($i = 1; $i <= 8; $i++) {
            
        echo"
        <div class='equipe p20p'>
            <h1 class='equipe_name'>Nom_equipe</h1>
            <img class='equipe_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image de l equipe NOM_EQUIPE'/>
            <p>Description equipe</p>
            <div class='spe'>
                <div class='note'>
                    Esthétique:
                    <i class='icone icon-star'>&#xe817;</i>
                    <i class='icone icon-star'>&#xe817;</i>
                    <i class='icone icon-star'>&#xe817;</i>
                    <i class='icone icon-star-half-alt'>&#xf123;</i>
                    <i class='icone icon-star-empty'>&#xe818;</i>
                </div>
                <div class='cote'><i class='icone icon-chart-line icone_margin'>&#xf201;</i>Cote : 1.03</div>
            </div>
        </div>";
        }
        ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>