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
            $nom_page='Mentions légales';
            $description_page='Ici figurent toutes les mentions légales';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name" >Mentions légales</h1>
            <p>A REMPLIR</p>
        </section>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>