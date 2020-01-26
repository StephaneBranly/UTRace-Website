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
            $nom_page='A propos';
            $description_page='Toutes les informations sur le site ici.';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name" id="contenu">Contenu</h1>
            <p><i class='icone icon-file-code icone_margin'>&#xf1c9;</i>Site créé par
            <a class='link' href='https://github.com/StephaneBranly' target='_blank'>Stéphane Branly<a> 
                et <a class='link' href=''>Amaury Guichard<a> </p> 
            <p><i class='icone icon-github icone_margin'>&#xe84c;</i>Code disponible sur
            <a class='link' href='https://github.com/StephaneBranly/UTRace-Website' target='_blank'>github<a></p> 
                <p><i class='icone icon-alert icone_margin'>&#xe8b2;</i>Si une problème a été rencontré, le renseigner
            <a class='link' href='https://github.com/StephaneBranly/UTRace-Website/issues' target='_blank'>ici<a> </p> 
            <p>Police d'écriture : <a href='https://www.dafont.com/fr/nasalization.font' target='_blank' class='link'>Nazalisation</a></p>
            <p>Icones : <a href='http://fontello.com/' target='_blank' class='link'>Fontello</a></p>
            <p><i class='icone icon-pencil icone_margin'>&#xe835;</i>Graphismes par
            <a class='link' href='https://github.com/StephaneBranly' target='_blank'>Stéphane Branly<a> 
                et <a class='link' href=''>Thibault Le Porho<a> </p> 
        </section>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>