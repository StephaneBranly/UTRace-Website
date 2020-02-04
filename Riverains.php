<!DOCTYPE html>
<html>
	<link href="./ressources/design/design.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <?php
            include_once("./lib/google_analytics.php");
            $nom_page='Riverains';
            $description_page='Les informations pour les riverains se trouvent ici !';
            include_once("./elements/meta.php");
        ?>
        <meta charset="UTF-8">
	</head>
	<body>
        <?php include_once("./elements/header.php"); ?>
        
        <section>
            <h1 class="section_name" >Riverains</h1>
            <p>A REMPLIR</p>
        </section>

        <section>
            <h1 class="section_name">Des questions ?</h1> 
            <p><i class='icone icon-help-circled icone_margin'>&#xe82d;</i> Nous ferons tout notre possible afin de répondre à vos questions dans les plus brefs délais.</p>
            <form>
                <p><label>Email : </label><br/><input type='text'/><p>
                <p><label>Nom : </label><br/><input type='text'/><p>
                <p><label>Adresse : </label><br/><input type='text'/><p>
                <p><label>Questions : </label><br/><textarea></textarea><p>
                <button type='submit'>Envoyer</button>
            </form>
        </section>

        <?php include_once("./elements/footer.php"); ?>
    </body>
	
</html>

<script type="text/javascript" src="services/index.js"></script>