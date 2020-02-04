<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Accueil';
            $description_page='Accueil du site, vous trouverez ici les informations les plus importantes sur l\'assiociation UT\'Race !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name">Welcome</h1>
            <p>Bienvenue sur l'accueil de notre association ! L'événement organisé aura bientôt lieu !!!</p>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>