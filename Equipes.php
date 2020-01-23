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
            $nom_page='Equipes';
            $description_page='Voyez sur cette page tous les équipages pour l\'événement !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <div class='equipe'>
            <h1 class='equipe_name'>Nom_equipe</h1>
            <img class='equipe_img' src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image de l equipe NOM_EQUIPE'/>
            <p>Description equipe</p>
            <div class='note'>
                <i class='icone icon-star'>&#xe817;</i>
                <i class='icone icon-star'>&#xe817;</i>
                <i class='icone icon-star'>&#xe817;</i>
                <i class='icone icon-star'>&#xe817;</i>
                <i class='icone icon-star-empty'>&#xe818;</i>
            </div>
            <div class='cote'>Cote de 1.3</div>
            <div>+ voir l'équipage</div>
            <div class='equipage'>
                <div class='pilote'>
                    <h1 class='pilote_name'>Nom_pilote</h1>
                    <p>Description pilote</p>
                    <img src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/>
                </div>
                <div class='pilote'>
                    <h1 class='pilote_name'>Nom_pilote</h1>
                    <p>Description pilote</p>
                    <img src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/>
                </div>
                <div class='pilote'>
                    <h1 class='pilote_name'>Nom_pilote</h1>
                    <p>Description pilote</p>
                    <img src='https://www.asaca.net/documents/archives/images_sections/Karting.jpeg' alt='Image du piote NOM_PILOTE'/>
                </div>
            </div>

        </div>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>