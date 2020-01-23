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
            <p>Pour réaliser notre événement, nous avons besoin d’une somme assez conséquente. Et sans l’aide de sponsors, nous ne pourrions pas atteindre cette somme. C’est pourquoi nous faisons appel à différents sponsors afin de nous aider. Il s’agit pour d’une occasion pour les sponsors de montrer leur intérêt pour une association étudiante qui a pour but de réaliser une course à la fois divertissante et à la fois axé sur la sécurité routière et domaine mécanique du fait de son village associatif.</p>
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
            <button type='submit'><i class='icone icon-attach'>&#xe82a;</i>Télécharger le dossier de subventions</button>
            <form>
                <p><label>Email : </label><br/><input type='text'/><p>
                <p><label>Détail sponsorisation : </label><br/><textarea></textarea><p>
                <button type='submit'>Envoyer</button>
            </form>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>