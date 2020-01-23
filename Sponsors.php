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
            $nom_page='Sponsors';
            $description_page='Découvrez sur cette page tous nos sponsors qui nous aident pour organiser l\'événement !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name">Pourquoi avoir des sponsors ?</h1>
            <p>Il nous faut de l'oseille tu vois...</p>
        </section>

        <section>
            <h1 class="section_name">Les sponsors</h1>
            <a href='' target='_blank'><img class='sponsor' src='https://upload.wikimedia.org/wikipedia/en/f/f6/UTC_logo.png' alt='NOM_DU_SPONSOR/'></a>
            <a href='' target='_blank'><img class='sponsor' src='https://www.myroom-residence.com/wp-content/uploads/2013/10/Logo-BDE-150.jpg' alt='NOM_DU_SPONSOR/'></a>
            <a href='' target='_blank'><img class='sponsor' src='https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Soci%C3%A9t%C3%A9_G%C3%A9n%C3%A9rale.svg/800px-Soci%C3%A9t%C3%A9_G%C3%A9n%C3%A9rale.svg.png' alt='NOM_DU_SPONSOR/'></a>
            <a href='' target='_blank'><img class='sponsor' src='https://upload.wikimedia.org/wikipedia/fr/thumb/8/80/Logo_Hauts-de-France_2016.svg/1024px-Logo_Hauts-de-France_2016.svg.png' alt='NOM_DU_SPONSOR/'></a>
            <a href='' target='_blank'><img class='sponsor' src='http://2014.igem.org/wiki/images/8/8d/AMU_Team-logo_fsdie.png' alt='NOM_DU_SPONSOR/'></a>
        </section>

        <section>
            <h1 class="section_name">Nous sponsoriser</h1>
            <p><a href=''>Télécharger notre dossier de subventions</a></p>
            <form>
                <p><label>Email : </label><input type='text'/><p>
                <p><label>Objet sponsorisation : </label><textarea></textarea><p>
                <button type='submit'>Envoyer</button>
            </form>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>