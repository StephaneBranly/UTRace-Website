<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Parier';
            $description_page='Ici, les spectateurs peuvent parier sur les 3 premiers arrivant dans la course ! Comme un tiercé.';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        <?php 
            include_once("./admin/inc/sqlConnect.php"); 
            $options_select = "";
            $query = mysqli_query($connect,"SELECT * FROM team ORDER BY `id` ASC");
            while($row = mysqli_fetch_array($query))
                $options_select .= "<option value='$row[id]'>$row[name]</option>";
        ?>
        <section>
            <div class='content_section'>
                <h1 class="section_name" id="contenu">Tiercé, explications du parie</h1>
                <p><h2>Parier</h2>
                Le but de ce tiercé est de trouver les 3 premières équipes à finir la course dans le bon ordre.
                 Pour cela, il suffit d'indiquer votre ordre, vos coordonnées et de générer un ticket.
                  Une fois généré, il faudra retenir votre numéro de ticket et passer au stand pour le valider en échange d'1€ symbolique.

                  <h2>Détails distributions lots</h2>
                  <p>Votre participation au tiercé est prise en compte dès lors que vous avez validé votre ticket.<br/>
                  La totalité des lots prévus seront distribués aux personnes ayant le "taux d'erreur" le plus faible. <br/>
                  En cas d'égalité, un tirage au sort sera effectué, sauf si accord entre les personnes pour choisir un lot.<br/>

                  <h2>Algorithme calcul d'erreur</h2>
                  Considérons premier, deuxieme, troisieme vos 3 équipes choisies dans l'ordre d'arrivée. position_arrivée(equipe) correspondant à la position d'arrivée d'une équipe à la fin de la course.<br/>Le taux d'erreur e sera calculé suivant la formule suivante:<br/>
                  e = 3*|1-position_arrivée(premier)| + 2*|2-position_arrivée(deuxieme)| + 1*|3-position_arrivée(troisieme)| 
                  </p>
                </p>
            </div>
        </section>
    
        <section>
            <div class='content_section'>
                <h1 class="section_name">Mon parie, mon tiercé</h1> 
                <form method='post' action='ticket'>
                    <p>
                    <table cellspacing="0" cellpadding="0" id='podium'>
                        <tr><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td></tr>
                        <tr><td></td><td class='fill'><select name='first'>
                            <?php echo $options_select; ?>
                        <select></td><td></td></tr>
                        <tr><td class='fill'><select name='second'>
                            <?php echo $options_select; ?>
                        <select></td><td class='fill'>1</td><td></td></tr>
                        <tr><td class='fill'>2</td><td class='fill'></td><td class='fill'><select name='third'>
                            <?php echo $options_select; ?>
                        <select></td></tr>
                        <tr><td class='fill'></td><td class='fill'></td><td class='fill'>3</td></tr>
                        <tr><td class='fill_delimiter'></td><td class='fill_delimiter'></td><td class='fill_delimiter'></td></tr>
                    </table></p>
                    <p><label>Email : </label><br/><input name='mail' required type='email'/><br/>
                    <label>Nom : </label><br/><input name='surname' required type='text'/><br/>
                    <label>Prénom : </label><br/><input name='name' required type='text'/><br/>
                    <label>Numéro de téléphone : </label><br/><input name='phone' required type='text'/></p>
                    <p><label>Je suis d'accord sur la sélection et distribution des gagnants des lots : <input required type='checkbox'/></label></p>
                    <button type='submit' name='submit'>Générer mon ticket</button>
                </form>
            </div>
        </section>
        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>