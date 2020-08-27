<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
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
                <p>La première édition de cette course de karts appelée Franklin’Oise aura lieu normalement en P21, à la fin du PMDE. Le parcours parcoura le parking de BF et sera semé d'obstacles farfelus !<br/><br/>
                    La course rassemblera huit équipes de trois pilotes qui se relaieront et devront se départager au long de trois à six tours pour terminer premiers et remporter le trophée.</p>
            </div>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>