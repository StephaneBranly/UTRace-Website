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
            <div class='content_section'>
                <h1 class="section_name">Pourquoi avoir des sponsors ?</h1>
                <p>Pour réaliser notre événement, nous avons besoin d’une somme assez conséquente. Et sans l’aide de sponsors, nous ne pourrions pas atteindre cette somme. C’est pourquoi nous faisons appel à différents sponsors afin de nous aider. Il s’agit pour d’une occasion pour les sponsors de montrer leur intérêt pour une association étudiante qui a pour but de réaliser une course à la fois divertissante et à la fois axé sur la sécurité routière et domaine mécanique du fait de son village associatif.
                    <br/><br/>Il existe de nombreuses manières de nous sponsoriser, plus d'informations sur notre dossier de sponsoring disponible dans la section <a href='#sponsoring' class='link'>nous sponsoriser</a>.
                </p>
            </div>
        </section>

        <section>
            <div class='content_section'>
                <h1 class="section_name">Les sponsors</h1>
                <?php 
                include_once("./admin/inc/sqlConnect.php"); 
                $query = mysqli_query($connect,"SELECT * FROM sponso");
                while($row = mysqli_fetch_array($query)){
                    echo "<a href='$row[2]' target='_blank'><img class='sponsor' src='./ressources/sponso/sponso$row[0].png' alt='$row[1]'></a>";
                }
                
                ?>
            </div>
        </section>

        <section id='sponsoring'>
            <div class='content_section'>
                <h1 class="section_name">Nous sponsoriser</h1> 
                <a href='./ressources/docs/Dossier_de_sponsoring_UTRace.pdf' target='_blank'><button type='submit' ><i class='icone icon-attach icone_margin'>&#xe82a;</i>Télécharger le dossier de subventions</button></a>
                <form>
                    <p><label>Email : </label><br/><input type='text'/><p>
                    <p><label>Entreprise : </label><br/><input type='text'/><p>
                    <p><label>Détail sponsorisation : </label><br/><textarea></textarea><p>
                    <button type='submit'>Envoyer</button>
                </form>
            </div>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>